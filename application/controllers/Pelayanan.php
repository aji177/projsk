<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Login_model');
        $this->load->model('Keperluan_model', 'keperluan');
        $this->load->model('SKCK_model', 'skck');
    }

    public function index()
    {
        if (!$this->Login_model->pelayanan_session()) {
            redirect(base_url('pelayanan/login'));
        }
        $data = [
            'title' => 'Beranda'
        ];
        $this->load->view('admin/beranda', $data);
    }

    public function cari()
    {
        if (!$this->Login_model->pelayanan_session()) {
            redirect(base_url('pelayanan/login'));
        }
        $data = [
            'title' => 'Pencarian SKCK'
        ];
        $this->load->view('admin/pencarian', $data);
    }

    public function buat_skck_online()
    {
        if (!$this->Login_model->pelayanan_session()) {
            redirect(base_url('pelayanan/login'));
        }
        $data = [
            'title' => 'Buat SKCK Online'
        ];
        $this->load->view('admin/skck_online', $data);
    }

    public function buat_skck_offline()
    {
        if (!$this->Login_model->pelayanan_session()) {

            redirect(base_url('pelayanan/login'));
        }
        $data = [
            'title' => 'Buat SKCK Offline',
            'kabkota' => $this->db->get_where('kabkota', ['provinsi_id' => 11])->result_object(),
            'keperluan' => $this->db->get('tb_keperluan')->result_object()

        ];
        $this->load->view('admin/skck_offline', $data);
    }

    public function laporan()
    {
        if (!$this->Login_model->pelayanan_session()) {
            redirect(base_url('pelayanan/login'));
        }
        $data = [
            'title' => 'Laporan'
        ];
        $this->load->view('admin/laporan', $data);
    }

    public function template_skck()
    {
        if (!$this->Login_model->pelayanan_session()) :
            redirect(base_url('pelayanan/login'));
        endif;
        $data = [
            'title' => 'Template SKCK',
            'data' => $this->db->order_by('id_template', 'DESC')
                ->get('template_skck', 1)->row_array(),
        ];
        $this->load->view('admin/template-skck', $data);
    }

    public function generate_no_skck()
    {
        $bulan_romawi = $this->db->get('bulan_romawi');
        $no_skck = $this->db->select('*')->from('no_skck')
            ->limit(1)->order_by('id_no_skck', 'DESC')->get()->row_object();

        if (!$this->Login_model->pelayanan_session()) {
            redirect(base_url('pelayanan/login'));
        } else {
            $data = [
                'title' => 'Generate No SKCK',
                'bulan_romawi' => $bulan_romawi->result_object(),
                'last_no_skck' => $no_skck
            ];
            $this->load->view('admin/generate-no-skck', $data);
        }
    }

    public function user_management()
    {
        if (!$this->Login_model->pelayanan_session()) {
            redirect(base_url('pelayanan/login'));
        }
        $data = [
            'title' => 'User Managemnt'
        ];
        $this->load->view('admin/user-management', $data);
    }

    public function print($id_skck = 0)
    {
        if (!$this->Login_model->pelayanan_session()) {
            redirect(base_url('pelayanan/login'));
        } else {
            if ($id_skck == 0) {
                $this->session->set_flashdata('error', "Mohon Isi data terlebih dahulu.");
                redirect(base_url('pelayanan/buat_skck_offline'));
            }

            $skck = $this->skck->getSKCK($id_skck);
            $nomor = $this->skck->getNomorSKCK($skck->nomor);
            if (!is_null($skck)) {

                $data = [
                    'title' => 'Print Skck',
                    'skck' => $skck,
                    'nomor_skck' => $nomor->format,
                    'template' => $this->db->order_by('id_template', 'DESC')
                        ->get('template_skck', 1)->row_object(),
                ];

                $this->load->view('admin/print-view', $data);
            } else {
                $this->session->set_flashdata('error', "tidak ada data ditemukan. Pastikan untuk mengisi data sebelum mencetak data");
                redirect(base_url('pelayanan/buat_skck_offline'));
            }
        }
    }

    /**
     * Logical Area below
     */

    public function login()
    {
        if ($this->Login_model->pelayanan_session()) {
            redirect(base_url('pelayanan'));
        }
        $this->load->view('admin/login');
    }

    public function do_login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if (!isset($username) && !isset($password)) {
            redirect(base_url('pelayanan/login'));
        } else {
            $respon = $this->Login_model->pelayanan_login($username);
            if ($respon->num_rows() > 0) {
                $data = $respon->row_array();
                if ($data['password'] == md5($password)) {
                    $this->db->update('tb_admin', [
                        'login_at' => date('Y-m-d G:i:s'),
                    ], ['id_admin' => $data['id_admin']]);

                    $array = array(
                        'id_admin' => $data['id_admin']
                    );

                    $this->session->set_userdata($array);

                    redirect(base_url('pelayanan'));
                } else {
                    $this->session->set_flashdata('error_password', 'Password Salah');
                }
            } else {
                $this->session->set_flashdata('error_username', 'Username Salah');
            }
            $this->load->view('admin/login');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('id_admin');
        redirect(base_url('pelayanan/login'));
    }

    public function insert_skck_offline()
    {
        $data_ktp = $this->skck->input_data_ktp();
        if ($data_ktp['respon'] > 0) {
            $nomor = explode('/', $this->input->post('nomor_skck'));
            $romawi = $this->db->get_where('bulan_romawi', ['id' => date('n')])->row_object()->romawi;
            $respon = $this->db->insert('no_skck', [
                'no_skck' => $nomor[2],
                'bulan' => $romawi,
                'tahun' => date('Y'),
                'divisi' => $nomor[6],
                'format' => $this->input->post('nomor_skck'),
                'create_at' => time()
            ]);
            $id_nomor_skck = $this->db->insert_id();
            if ($respon > 0) {
                $data = [
                    'tiket' => '',
                    'nomor' => $id_nomor_skck,
                    'id_ktp' => $data_ktp['id'],
                    'Alamat' => $this->input->post('nama_jalan')
                        . ', Kel. ' .  $this->db->select('nama_desa')
                            ->from('desa')->where('id', $this->input->post('kelurahan'))
                            ->get()->row_array()['nama_desa']
                        . ', Kec. ' .  $this->db->select('nama_kecamatan')
                            ->from('kecamatan')->where('id', $this->input->post('kecamatan'))
                            ->get()->row_array()['nama_kecamatan']
                        . ', ' .  $this->db->select('nama_kabkota')
                            ->from('kabkota')->where('id', $this->input->post('kota'))
                            ->get()->row_array()['nama_kabkota'],
                    'rumus_1_jari' => $this->input->post('rumus_1'),
                    'rumus_2_jari' => $this->input->post('rumus_2'),
                    'rumus_3_jari' => $this->input->post('rumus_3'),
                    'rumus_4_jari' => $this->input->post('rumus_4'),
                    'rumus_5_jari' => $this->input->post('rumus_5'),
                    'rumus_6_jari' => $this->input->post('rumus_6'),
                    'rumus_7_jari' => $this->input->post('rumus_7'),
                    'rumus_8_jari' => $this->input->post('rumus_8'),
                    'rumus_9_jari' => $this->input->post('rumus_9'),
                    'rumus_10_jari' => $this->input->post('rumus_10'),
                    'rumus_11_jari' => $this->input->post('rumus_11'),
                    'rumus_12_jari' => $this->input->post('rumus_12'),
                    'berada_di_indonesia_dari' => $this->input->post('tinggal_dari'),
                    'keperluan' => $this->input->post('keperluan'),
                    'catatan_kriminal' => $this->input->post('catatan_kriminal'),
                    'catatan_kriminal_en' => $this->input->post('catatan_kriminal_en'),
                    'create_from' => 'offline',
                ];
                $respon = $this->db->insert('data_skck', $data);

                if ($respon > 0) {
                    $id = $this->db->insert_id();
                    mkdir(FCPATH . 'uploads/' . "$id/", 0777, true);
                    $simpan = $this->input->post('simpan');

                    if ($simpan == 'simpan') {
                        $sidik_jari = [
                            'ibu_jari_kanan',
                            'telunjuk_jari_kanan',
                            'jari_tengah_kanan',
                            'jari_manis_kanan',
                            'jari_kelingking_kanan',
                            'ibu_jari_kiri',
                            'telunjuk_jari_kiri',
                            'jari_tengah_kiri',
                            'jari_manis_kiri',
                            'jari_kelingking_kiri',
                        ];
                        for ($i = 0; $i <= count($sidik_jari); $i++) :
                            $this->upload($sidik_jari[$i], $id);
                        endfor;
                    }

                    $this->upload('foto_ktp', $id);
                    $this->upload('ktp', $id);
                    $this->upload('sidik_ktp', $id);
                    $this->upload('signature_ktp', $id);
                    $this->upload('lampiran_ktp', $id);
                    $this->upload('lampiran_kk', $id);
                    $this->upload('lampiran_ijazah', $id);
                    echo json_encode([
                        'errors' => 0,
                        'messages' =>  "Data SKCK Dengan Nomor " . $this->input->post('nomor_skck') . " Atas nama Sdr. " . $this->input->post('nama') . " Berhasil dibuat.",
                        'redirect' => base_url('pelayanan/print/' . $id),
                        'data' => [],
                    ]);
                } else {
                    $this->db->delete('no_skck', ['id_no_skck' => $id_nomor_skck]);
                    echo json_encode([
                        'errors' => 1,
                        'messages' => 'error', "Data SKCK Dengan Nomor " . $this->input->post('nomor_skck') . " Gagal Dibuat. Periksa Koneksi Internet.",
                        'redirect' => base_url('pelayanan/buat_skck_offline'),
                        'data' => [],
                    ]);
                }
            } else {
                echo json_encode([
                    'errors' => 1,
                    'messages' => 'error', "Data SKCK Dengan Nomor " . $this->input->post('nomor_skck') . " Gagal Dibuat. Periksa Koneksi Internet.",
                    'redirect' => base_url('pelayanan/buat_skck_offline'),
                    'data' => [],
                ]);
            }
        } else {
            echo json_encode([
                'errors' => 1,
                'messages' => 'error', "Data SKCK Dengan NIK KTP " . $this->input->post('nik') . " Gagal Dibuat. Periksa Koneksi Internet.",
                'data' => [],
                'redirect' => base_url('pelayanan/buat_skck_offline'),
            ]);
        }
    }

    public function multiple_file()
    {

        $this->upload('file1', 1);
        echo '<br>';
        $this->upload('file2', 1);
    }


    private function upload(string $file, int $id_skck)
    {
        $upload = $_FILES[$file];

        if ($upload['name'] != null) {
            if (is_array($upload['name'])) {
                $files_num = sizeof($upload['tmp_name']);

                $config['upload_path'] = FCPATH . 'uploads/' . "$id_skck/";
                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']  = '4000';
                for ($i = 0; $i < $files_num; $i++) {
                    if ($upload['name'][$i] != null) {
                        $_FILES[$file]['name'] = $upload['name'][$i];
                        $_FILES[$file]['type'] = $upload['type'][$i];
                        $_FILES[$file]['tmp_name'] = $upload['tmp_name'][$i];
                        $_FILES[$file]['error'] = $upload['error'][$i];
                        $_FILES[$file]['size'] = $upload['size'][$i];

                        $this->upload->initialize($config);
                        if ($this->upload->do_upload($file)) {
                            $this->db->insert('lampiran', [
                                'id_skck' => $id_skck,
                                'file' => $this->upload->data()['file_name'],
                                'name' => $file
                            ]);
                            echo "success";
                        } else {
                            $error = array('error' => $this->upload->display_errors());
                            print_r($error);
                        }
                    }
                }
            } else {
                $config['upload_path'] = FCPATH . 'uploads/' . "$id_skck/";
                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                $config['max_size']  = '4000';

                $this->upload->initialize($config);
                if (!$this->upload->do_upload($file)) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                } else {
                    $this->db->insert('lampiran', [
                        'id_skck' => $id_skck,
                        'file' => $this->upload->data()['file_name'],
                        'name' => $file
                    ]);
                    echo "success";
                }
            }
        }
    }



    public function generate_skck()
    {
        if (!isset($_POST['no_skck'])) {
            redirect(base_url('pelayanan/generate_no_skck'));
        }

        $no_skck = $this->db->select('*')->from('no_skck')
            ->limit(1)->order_by('id_no_skck', 'DESC')->get()->row_object();

        $input_no_skck = $this->input->post('no_skck');
        $input_bulan = $this->input->post('bulan');
        $input_tahun = $this->input->post('tahun');
        $input_divisi = $this->input->post('divisi');
        $input_format = $this->input->post('format');

        if ($no_skck->no_skck == $input_no_skck) :
            $this->session->set_flashdata('no_skck', "Nomor $input_no_skck telah dibuat.");
            redirect(base_url('pelayanan/generate_no_skck'));
        else :
            $respon = $this->db->insert('no_skck', [
                'no_skck' => $input_no_skck,
                'bulan' => $input_bulan,
                'tahun' => $input_tahun,
                'divisi' => $input_divisi,
                'format' => $input_format,
                'create_at' => time(),
            ]);
            $this->session->set_flashdata('success', "Nomor $input_no_skck telah dibuat Jam " . date('d F Y, H:i:s', time()));
            redirect(base_url('pelayanan/generate_no_skck'));
        endif;
    }

    public function image($id_skck, $name)
    {
        $data = $this->db->get_where('lampiran', [
            'id_skck' => $id_skck,
            'name' => $name
        ])->row_object();
        echo file_get_contents(base_url('uploads/' . $id_skck . '/' . $data->file), true);
    }

    public function input_template_skck()
    {
        if (!isset($_POST['daerah_satuan'])) {
            redirect(base_url('pelayanan/template_skck'));
        }

        $data = [
            'daerah_satuan' => $this->input->post('daerah_satuan'),
            'resor_satuan' => $this->input->post('resor_satuan'),
            'alamat_satuan' => $this->input->post('alamat_satuan'),
            'atas_nama' => $this->input->post('atas_nama'),
            'satuan_kepala' => $this->input->post('satuan_kepala'),
            'pejabat' => $this->input->post('pejabat'),
            'jabatan' => $this->input->post('jabatan'),
            'pernyataan_id' => $this->input->post('pernyataan_id'),
            'pernyataan_en' => $this->input->post('pernyataan_en'),
            'lokasi_cetak' => $this->input->post('lokasi_cetak'),
            'skck_berlaku' => $this->input->post('skck_berlaku'),
        ];

        $respon = $this->db->insert('template_skck', $data);

        if ($respon > 0) {
            $this->session->set_flashdata('success', "Data Template SKCK Berhasil diperbarui.");
            redirect(base_url('pelayanan/template_skck'));
        } else {
            $this->session->set_flashdata('error', "Data Template SKCK Gagal diperbarui");
            redirect(base_url('pelayanan/template_skck'));
        }
    }
}

/* End of file Pelayanan.php */
