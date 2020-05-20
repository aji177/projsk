<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Keperluan_model extends CI_Model
{

    public function getAll()
    {
        return $this->db->get('tb_keperluan')->result_object();
    }
}

/* End of file Keperluan_model.php */
