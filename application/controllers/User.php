<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    protected $user;
    protected $request_skck;
    protected $file_lampiran;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'login');
        $this->load->model('SKCK_model', 'skck');
        setlocale(LC_TIME, 'id_ID');
        if ($this->login->user_session()) {
            $this->userData();
            $this->last_request_skck();
            $this->cekKadaluarsa();
            $this->lampiran();
        }
    }

    private function lampiran()
    {
        $data = $this->db->get_where('lampiran', [
            'id_skck' => $this->request_skck['id_skck'],
        ])->result_array();
        $this->file_lampiran = $data;
    }

    private function cekKadaluarsa()
    {
        if (!is_null($this->request_skck)) {
            extract($this->request_skck);
            if (strtotime('+1 WEEK', strtotime($request_at)) < time()) {
                $this->db->update('data_skck', ['kadaluarsa' => 1], ['id_ktp' => $this->user->id_nik]);
            }
        }
    }

    private function userData()
    {
        $this->db->select('data_nik.*, desa.nama_desa, kecamatan.nama_kecamatan, kabkota.nama_kabkota');
        $this->db->from('data_nik');
        $this->db->join('desa', 'desa.id = data_nik.id_desa');
        $this->db->join('kecamatan', 'kecamatan.id = data_nik.id_kecamatan');
        $this->db->join('kabkota', 'kabkota.id = data_nik.id_kota');
        $this->db->where('data_nik.no_ktp', $this->session->userdata('nik'));
        $data = $this->db->get()->row_object();
        $this->user = $data;
    }

    private function last_request_skck()
    {
        $data = $this->db
            ->order_by('id_skck', 'DESC')
            ->get_where('data_skck', ['id_ktp' => $this->user->id_nik, 'kadaluarsa' => 0, 'is_print' => 0, 'create_from' => 'online']);
        $this->request_skck = $data->row_array();
    }

    public function index()
    {
        if (!$this->login->user_session()) {
            redirect(base_url('user/login'));
        }

        $data = ['title' => 'Beranda'];
        $this->load->view('user/beranda', $data);
    }

    public function formulir_skck()
    {
        if (!$this->login->user_session()) {
            redirect(base_url('user/login'));
        }

        $data = [
            'title' => 'Formulir SKCK',
            'user' => $this->user,
            'request_skck' => $this->request_skck,
            'kabkota' => $this->db->get_where('kabkota', ['provinsi_id' => 11])->result_object(),
            'keperluan' => $this->db->get('tb_keperluan')->result_object()
        ];
        $this->load->view('user/formulir', $data);
    }

    public function pengajuan_skck()
    {
        if (!$this->login->user_session()) {
            redirect(base_url('user/login'));
        }

        $data = [
            'title' => 'Pengajuan SKCK',
            'user' => $this->user,
            'request_skck' => $this->request_skck,
        ];
        $this->load->view('user/pengajuan', $data);
    }

    public function riwayat_skck()
    {
        if (!$this->login->user_session()) {
            redirect(base_url('user/login'));
        }

        $data = [
            'title' => 'Pengajuan SKCK',
            'user' => $this->user,
            'data_skck' => $this->db
                ->select('*')
                ->from('data_skck')
                ->where('data_skck.id_ktp', $this->user->id_nik)
                ->order_by('data_skck.id_skck', 'DESC')
                ->get()->result_object()
        ];
        $this->load->view('user/riwayat', $data);
    }

    public function ubah_formulir()
    {
        $data = [
            'title' => 'Ubah Formulir SKCK',
            'user' => $this->user,
            'request_skck' => $this->request_skck,
            'kabkota' => $this->db->get_where('kabkota', ['provinsi_id' => 11])->result_object(),
            'data_keperluan' => $this->db->get('tb_keperluan')->result_array(),
            'check_keperluan' => function () {
                $data = $this->db->get_where('tb_keperluan', ['keperluan_nama' => $this->request_skck['keperluan']]);

                if ($data->num_rows() > 0) {
                    return true;
                } else {
                    return false;
                }
            },
            'lampiran' => $this->file_lampiran
        ];

        $this->load->view('user/tiket_update', $data);
    }

    public function tiket()
    {
        $data = [
            'title' => 'Cetak Tiket ' . $this->request_skck['tiket'],
            'user' => $this->user,
            'request_skck' => $this->request_skck,
        ];
        $this->load->view('user/tiket', $data, FALSE);
    }

    public function login()
    {
        if ($this->login->user_session()) {
            redirect(base_url('user'));
        }

        $data = ['title' => 'Login Pengguna'];
        $this->load->view('user/login', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('nik');
        redirect(base_url('user/login'));
    }

    public function insert()
    {
        $object = [
            'no_ktp' => $this->input->post('nik'),
            'paspor' => $this->input->post('paspor'),
            'jk' => $this->input->post('jk'),
            'kebangsaan' => 'Indonesia',
            'agama' => $this->input->post('agama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'nama_jalan' => $this->input->post('nama_jalan'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'id_desa' => $this->input->post('kelurahan'),
            'id_kecamatan' => $this->input->post('kecamatan'),
            'id_kota' => $this->input->post('kota'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'is_full' => 1
        ];

        $respon = $this->db->update('data_nik', $object, [
            'id_nik' => $this->user->id_nik
        ]);

        if ($respon > 0) {
            $data = [
                'tiket' => random_string('alnum', 20),
                'id_ktp' => $this->user->id_nik,
                'alamat' =>  $this->input->post('nama_jalan')
                    . ', Kel. ' .  $this->db->select('nama_desa')
                        ->from('desa')->where('id', $this->input->post('kelurahan'))
                        ->get()->row_array()['nama_desa']
                    . ', Kec. ' .  $this->db->select('nama_kecamatan')
                        ->from('kecamatan')->where('id', $this->input->post('kecamatan'))
                        ->get()->row_array()['nama_kecamatan']
                    . ', ' .  $this->db->select('nama_kabkota')
                        ->from('kabkota')->where('id', $this->input->post('kota'))
                        ->get()->row_array()['nama_kabkota'],
                'berada_di_indonesia_dari' => $this->input->post('tinggal_dari'),
                'keperluan' => $this->input->post('keperluan'),
                'request_at' => date('Y-m-d H:i:s'),
                'create_from' => 'online',
            ];

            $respon = $this->db->insert('data_skck', $data);
            $id_skck = $this->db->insert_id();

            if ($respon > 0) {
                mkdir(FCPATH . 'uploads/' . $id_skck, 0777, true);
                $this->upload('foto_ktp', $id_skck);
                $this->upload('lampiran_ktp', $id_skck);
                $this->upload('lampiran_kk', $id_skck);
                $this->upload('lampiran_ijazah', $id_skck);

                echo json_encode([
                    'errors' => false,
                    'messages' => 'Selamat, Permintaan anda telah diajukan. Masuk ke halaman Pengajuan SKCK untuk mengambil Tiket anda.',
                ]);
            } else {
                echo json_encode([
                    'errors' => true,
                    'messages' => 'Maaf, Tidak dapat membuat data SKCK anda. Coba periksa sambungan internet anda.',
                ]);
            }
        } else {
            echo json_encode([
                'errors' => true,
                'messages' => 'Maaf, Tidak dapat membuat data SKCK anda. Coba periksa sambungan internet anda.',
            ]);
        }
    }

    public function update()
    {
        $object = [
            'no_ktp' => $this->input->post('nik'),
            'paspor' => $this->input->post('paspor'),
            'jk' => $this->input->post('jk'),
            'kebangsaan' => 'Indonesia',
            'agama' => $this->input->post('agama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'nama_jalan' => $this->input->post('nama_jalan'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'id_desa' => $this->input->post('kelurahan'),
            'id_kecamatan' => $this->input->post('kecamatan'),
            'id_kota' => $this->input->post('kota'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'is_full' => 1
        ];

        $respon = $this->db->update('data_nik', $object, [
            'id_nik' => $this->user->id_nik
        ]);

        if ($respon > 0) {
            $data = [
                'id_ktp' => $this->user->id_nik,
                'alamat' =>  $this->input->post('nama_jalan')
                    . ', Kel. ' .  $this->db->select('nama_desa')
                        ->from('desa')->where('id', $this->input->post('kelurahan'))
                        ->get()->row_array()['nama_desa']
                    . ', Kec. ' .  $this->db->select('nama_kecamatan')
                        ->from('kecamatan')->where('id', $this->input->post('kecamatan'))
                        ->get()->row_array()['nama_kecamatan']
                    . ', ' .  $this->db->select('nama_kabkota')
                        ->from('kabkota')->where('id', $this->input->post('kota'))
                        ->get()->row_array()['nama_kabkota'],
                'berada_di_indonesia_dari' => $this->input->post('tinggal_dari'),
                'keperluan' => $this->input->post('keperluan'),
                'create_from' => 'online',
            ];

            $respon = $this->db->update('data_skck', $data, ['id_skck' => $this->request_skck['id_skck']]);
            $id_skck = $this->request_skck['id_skck'];

            if ($respon > 0) {
                $this->upload('foto_ktp', $id_skck);
                $this->upload('lampiran_ktp', $id_skck);
                $this->upload('lampiran_kk', $id_skck);
                $this->upload('lampiran_ijazah', $id_skck);

                echo json_encode([
                    'errors' => false,
                    'messages' => 'Selamat, Permintaan anda telah diajukan. Masuk ke halaman Pengajuan SKCK untuk mengambil Tiket anda.',
                ]);
            } else {
                echo json_encode([
                    'errors' => true,
                    'messages' => 'Maaf, Tidak dapat membuat data SKCK anda. Coba periksa sambungan internet anda.',
                ]);
            }
        } else {
            echo json_encode([
                'errors' => true,
                'messages' => 'Maaf, Tidak dapat membuat data SKCK anda. Coba periksa sambungan internet anda.',
            ]);
        }
    }

    private function upload(string $file, int $id_skck)
    {
        $upload = $_FILES[$file];

        if ($upload['name'] != null) {
            $config['upload_path'] = FCPATH . 'uploads/' . "$id_skck/";
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']  = '4000';

            $this->upload->initialize($config);
            if ($this->upload->do_upload($file)) {
                $this->check_file($id_skck, $file, $this->upload->data()['file_name']);
            }
        }
    }

    private function check_file($id_skck, $name, $file)
    {
        $data = $this->db->get_where('lampiran', [
            'id_skck' => $id_skck,
            'name' => $name
        ]);

        if ($data->num_rows() > 0) {
            unlink(FCPATH . 'uploads/' . "$id_skck/" . $data->row_object()->file);
            $object = [
                'file' => $file,
            ];
            $this->db->update('lampiran', $object, ['id_lampiran' => $data->row_object()->id_lampiran]);
        } else {
            $this->db->insert('lampiran', [
                'id_skck' => $id_skck,
                'file' => $file,
                'name' => $name
            ]);
        }
    }

    public function file($id_skck, $name)
    {
        $data = $this->db->get_where('lampiran', [
            'id_skck' => $id_skck,
            'name' => $name
        ])->row_object();
        echo file_get_contents(base_url('uploads/' . $id_skck . '/' . $data->file), true);
    }
}

/* End of file User.php */
