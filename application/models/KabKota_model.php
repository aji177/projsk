<?php


defined('BASEPATH') or exit('No direct script access allowed');

class KabKota_model extends CI_Model
{

    public function ById($id)
    {
        $data = $this->db->get_where('kabkota', ['id' => $id]);
        $res = [
            'errors' => false,
            'length' => $data->num_rows(),
            'data' => $data->row_array()
        ];
        return $res;
    }

    public function ByProvinsiId($provinsi_id)
    {
        $data = $this->db->get_where('kabkota', ['provinsi_id' => $provinsi_id]);
        $res = [
            'errors' => false,
            'length' => $data->num_rows(),
            'data' => $data->result_array()
        ];
        return $res;
    }
}

/* End of file KabKota_model.php */
