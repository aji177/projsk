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
        if (!$this->Login_model->pelayanan_session()) {
            redirect(base_url('pelayanan/login'));
        }
        $data = [
            'title' => 'Template SKCK'
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

    // Logical Input Data
    public function input_skck_offline()
    {
        $data = [
            'nomor' => $this->input->post('nomor_skck'),
            'no_ktp' => $this->input->post('nik'),
            'paspor' => $this->input->post('paspor'),
            'nama' => $this->input->post('nama'),
            'jk' => $this->input->post('jk'),
            'kebangsaan' => 'Indonesia',
            'agama' => $this->input->post('agama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('nama_jalan')
                . ' RT ' . $this->input->post('rt')
                . '/ RW ' .  $this->input->post('rw')
                . ', Kel. ' .  $this->db->select('nama_desa')
                    ->from('desa')->where('id', $this->input->post('kelurahan'))
                    ->get()->row_array()['nama_desa']
                . ', Kec. ' .  $this->db->select('nama_kecamatan')
                    ->from('kecamatan')->where('id', $this->input->post('kecamatan'))
                    ->get()->row_array()['nama_kecamatan']
                . ', ' .  $this->db->select('nama_kabkota')
                    ->from('kabkota')->where('id', $this->input->post('kota'))
                    ->get()->row_array()['nama_kabkota'],
            'pekerjaan' => $this->input->post('pekerjaan'),
            '1_rumus_jari' => $this->input->post('rumus_1'),
            '2_rumus_jari' => $this->input->post('rumus_2'),
            '3_rumus_jari' => $this->input->post('rumus_3'),
            '4_rumus_jari' => $this->input->post('rumus_4'),
            '5_rumus_jari' => $this->input->post('rumus_5'),
            '6_rumus_jari' => $this->input->post('rumus_6'),
            '7_rumus_jari' => $this->input->post('rumus_7'),
            '8_rumus_jari' => $this->input->post('rumus_8'),
            '9_rumus_jari' => $this->input->post('rumus_9'),
            '10_rumus_jari' => $this->input->post('rumus_10'),
            '11_rumus_jari' => $this->input->post('rumus_11'),
            '12_rumus_jari' => $this->input->post('rumus_12'),
            'berada_di_indonesia_dari' => $this->input->post('tinggal_dari'),
            'keperluan' => $this->input->post('keperluan'),
        ];
        $respon = $this->db->insert('data_skck_offline', $data);

        if ($respon > 0) {
            $nomor = explode('/', $data['nomor']);
            $romawi = $this->db->get_where('bulan_romawi', ['id' => date('n')])->row_object()->romawi;
            $respon = $this->db->insert('no_skck', [
                'no_skck' => $nomor[2],
                'bulan' => $romawi,
                'tahun' => date('Y'),
                'divisi' => $nomor[6],
                'format' => $data['nomor'],
                'create_at' => time()
            ]);
            $this->session->set_flashdata('success', "Data SKCK Dengan Nomor " . $this->input->post('nomor_skck') . " Atas nama Sdr. " . $this->input->post('nama') . " Berhasil dibuat.");
            redirect(base_url('pelayanan/buat_skck_offline'));
        } else {
            $this->session->set_flashdata('error', "Data SKCK Dengan Nomor " . $this->input->post('nomor_skck') . " Gagal Dibuat. Periksa Koneksi Internet.");
            redirect(base_url('pelayanan/buat_skck_offline'));
        }
    }

    public function multiple_file()
    {
        $files_num = sizeof($_FILES['file']['tmp_name']);
        $files = $_FILES['file'];
        $data = [];

        $config['upload_path'] = FCPATH . 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size']  = '4000';
        for ($i = 0; $i < $files_num; $i++) {

            $_FILES['file']['name'] = $files['name'][$i];
            $_FILES['file']['type'] = $files['type'][$i];
            $_FILES['file']['tmp_name'] = $files['tmp_name'][$i];
            $_FILES['file']['error'] = $files['error'][$i];
            $_FILES['file']['size'] = $files['size'][$i];

            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                array_push($data, $_FILES['file']['name']);
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        }

        print_r($data);
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
}

/* End of file Pelayanan.php */
