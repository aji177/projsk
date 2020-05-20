<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function pelayanan_login(string $username)
    {
        return $this->db->get_where('tb_admin', ['username' => $username]);
    }

    public function pelayanan_session()
    {
        return $this->session->userdata('id_admin');
    }
}

/* End of file Login_model.php */
