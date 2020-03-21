<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = [
            'view' => 'home/index',
            'modal' => 'pendaftaran/index'
        ];
        $this->load->view('app', $data);
    }
}
        
    /* End of file Home.php */
