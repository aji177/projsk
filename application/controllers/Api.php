<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index_get()
    {
        $this->response([
            'errors' => false,
            'connect' => 'success'
        ], 200);
    }

    public function provinsi_get($get = null, $id = null)
    {
        // Config Data;
        $this->load->model('Provinsi_model', 'prov');
        $this->load->model('KabKota_model', 'kabkota');

        // Get data from request
        if ($get === 'all') {
            $provinsi_all = $this->prov->all();
            return $this->response($provinsi_all, 200);
        } else if ($get === 'id') {
            $provinsi_by_id = $this->prov->getById($id);
            return $this->response($provinsi_by_id, 200);
        } else if ($get === 'kabkota') {
            $kabkota_by_provinsi_id = $this->kabkota->ByProvinsiId($id);
            return $this->response($kabkota_by_provinsi_id, 200);
        } else {
            return $this->response([
                'errors' => true,
                'message' => 'No Data Founded',
                'data' => [],
            ], 404);
        }
    }

    public function kabkota_get($get = null, $id = null)
    {
        // Config Data
        $this->load->model('KabKota_model', 'kabkota');
        $this->load->model('Kecamatan_model', 'kecamatan');
        // Get data from request
        if ($get === 'id') {
            $kabkota_by_id = $this->kabkota->ById($id);
            return $this->response($kabkota_by_id, 200);
        } else if ($get === 'kecamatan') {
            $kecamatan_by_kabkota_id = $this->kecamatan->ByKabKotaId($id);
            return $this->response($kecamatan_by_kabkota_id, 200);
        } else {
            return $this->response([
                'errors' => true,
                'message' => 'No Data Founded',
                'data' => [],
            ], 404);
        }
    }

    public function kecamatan_get($get = null, $id = null)
    {
        // Config Data
        $this->load->model('Kecamatan_model', 'kecamatan');
        $this->load->model('Desa_model', 'desa');
        // Get data from request
        if ($get === 'id') {
            $kecamatan_by_id = $this->kecamatan->ById($id);
            return $this->response($kecamatan_by_id, 200);
        } else if ($get === 'desa') {
            $desa_by_kabkota_id = $this->desa->ByKecamatanId($id);
            return $this->response($desa_by_kabkota_id, 200);
        } else {
            return $this->response([
                'errors' => true,
                'message' => 'No Data Founded',
                'data' => [],
            ], 404);
        }
    }

    public function desa_get($get = null, $id = null)
    {
        // Config Data
        $this->load->model('Desa_model', 'desa');
        if ($get === 'id') {
            $desa_by_id = $this->desa->ById($id);
            return $this->response($desa_by_id, 200);
            # code...
        } else {
            return $this->response([
                'errors' => true,
                'message' => 'No Data Founded',
                'data' => [],
            ], 404);
        }
    }

    public function generate_no_skck_get()
    {
        $no_skck = $this->db->select('*')->from('no_skck')
            ->limit(1)->order_by('id_no_skck', 'DESC')->get();

        $data = $no_skck->row_object();

        return $this->response([
            'errors' => false,
            'length' => $no_skck->num_rows(),
            'data' => [
                'format' => str_replace($data->no_skck, $data->no_skck + 1, $data->format)
            ],
        ], 200);
    }

    public function laporan_skck_get()
    {
        $this->load->model('SKCK_model', 'skck');
        $data = $this->skck->getSKCKBetweenDate(date('Y-m-d', strtotime('-1 month', time())), date('Y-m-d 23:59:59'));

        return $this->response([
            'errors' => false,
            'length' => $data->num_rows(),
            'data' => $data->result_object(),
        ], 200);
    }

    public function laporan_skck_post()
    {
        $this->load->model('SKCK_model', 'skck');
        $date_start = $this->input->post('tanggal_awal');
        $date_end = $this->input->post('tanggal_akhir');
        $data = $this->skck->getSKCKBetweenDate(date('Y-m-d 00:00:00', strtotime($date_start)), date('Y-m-d 23:59:59', strtotime($date_end)));

        return $this->response([
            'errors' => false,
            'length' => $data->num_rows(),
            'data' => $data->result_object(),
        ], 200);
    }

    public function user_login_post()
    {
        if (isset($_POST['nik']) && isset($_POST['nama'])) {
            $nik = $this->input->post('nik');
            $nama = $this->input->post('nama');
            $data_ktp_offline = $this->db
                ->select('*')
                ->from('data_nik')
                ->where("no_ktp", $nik)
                ->order_by('id_nik', 'DESC')
                ->get();

            if ($data_ktp_offline->num_rows() == 0) {
                $object = [
                    'no_ktp' => $nik,
                    'nama' => $nama,
                    'is_full' => 0
                ];

                $this->db->insert('data_nik', $object);

                $array = array(
                    'nik' => $nik
                );
                $this->session->set_userdata($array);

                return $this->response([
                    'errors' => false,
                    'redirect' => base_url('user/formulir_skck'),
                    'data' => [
                        $nik, $nama
                    ],
                ], 200);
            } else {
                $user = $data_ktp_offline->row_array();
                if ($user['nama'] === $nama) {
                    $array = array(
                        'nik' => $nik
                    );
                    $this->session->set_userdata($array);
                    return $this->response([
                        'errors' => false,
                        'redirect' => base_url('user/formulir_skck'),
                        'data' => [
                            $user['no_ktp'], $user['nama']
                        ],
                    ], 200);
                } else {
                    return $this->response([
                        'errors' => true,
                        'messages' => 'Nama Yang Anda Masukkan Salah. Pastikan Nama anda sesuai dengan apa yang anda daftarkan.'
                    ], 200);
                }
            }
        } else {
            return $this->response([
                'errors' => true,
                'messages' => 'Kamu tidak memasukkan data apapun'
            ], 200);
        }
    }

    public function print_done_post()
    {
        $id_skck = $this->input->post('id_skck');

        $respon = $this->db->update('data_skck', [
            'create_at' => date('Y-m-d h:i:s'),
            'is_print' => 1,
        ], ['id_skck' => $id_skck]);

        if ($respon > 0) {
            return $this->response([
                'errors' => false,
                'messages' => 'Status Cetak berkas ini telah di perbaharui'
            ], 200);
        } else {
            return $this->response([
                'errors' => true,
                'messages' => 'Status Cetak berkas ini gagal di perbaharui. Mohon Periksa Koneksi anda'
            ], 404);
        }
    }
}

/* End of file Api.php */
