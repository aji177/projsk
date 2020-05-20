<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Provinsi_model extends CI_Model
{
    public function all()
    {
        $data = $this->db->get('provinsi');

        $res = [
            'errors' => false,
            'num_rows' => $data->num_rows(),
            'data' => $data->result_array(),
        ];

        return $res;
    }

    public function getById($id)
    {
        $data = $this->db->get_where('provinsi', ['id' => $id]);

        $res = [
            'errors' => false,
            'length' => $data->num_rows(),
            'data' => $data->row_array(),
        ];

        return $res;
    }
}

/* End of file Provinsi_model.php */
