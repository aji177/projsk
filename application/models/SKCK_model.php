<?php


defined('BASEPATH') or exit('No direct script access allowed');

class SKCK_model extends CI_Model
{

    public function getNomorSKCK($id_nomor)
    {
        /**
         * @var $id_nomo dari nomor skck yang ada di dalam data skck
         * Data dalam bentuk Objek
         */
        $respon = $this->db->get_where('no_skck', ['id_no_skck' => $id_nomor])->row_object();
        return $respon;
    }

    public function getSKCKOffline($id_skck)
    {
        /**
         * @var $id_skck Id Data SKCK
         */

        $respon = $this->db->get_where('data_skck_offline', ['id_skck' => $id_skck])->row_object();
        return $respon;
    }

    public function getSKCKOnline($id_skck)
    {
        /**
         * @var $id_skck Id Data SKCK
         */

        $respon = $this->db->get_where('data_skck_online', ['id_skck' => $id_skck])->row_object();
        return $respon;
    }
}

/* End of file SKCK_model.php */
