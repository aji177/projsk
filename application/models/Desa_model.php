<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Desa_model extends CI_Model
{
    public function ById($id)
    {
        $data = $this->db->get_where('desa', ['id' => $id]);
        $res = [
            'errors' => false,
            'length' => $data->num_rows(),
            'data' => $data->row_array(),
        ];
        return $res;
    }

    public function ByKecamatanId($id)
    {
        $data = $this->db->get_where('desa', ['kecamatan_id' => $id]);
        $res = [
            'errors' => false,
            'length' => $data->num_rows(),
            'data' => $data->result_array(),
        ];
        return $res;
    }
}

/* End of file Desa_model.php */
