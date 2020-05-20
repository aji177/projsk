<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan_model extends CI_Model
{
    public function ById($id)
    {
        $data = $this->db->get_where('kecamatan', ['id' => $id]);
        $res = [
            'errors' => false,
            'length' => $data->num_rows(),
            'data' => $data->row_array(),
        ];
        return $res;
    }

    public function ByKabKotaId($id)
    {
        $data = $this->db->get_where('kecamatan', ['kabkota_id' => $id]);
        $res = [
            'errors' => false,
            'length' => $data->num_rows(),
            'data' => $data->result_array(),
        ];
        return $res;
    }
}

/* End of file Kecamatan_model.php */
