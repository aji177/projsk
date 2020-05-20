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
}

/* End of file Api.php */
