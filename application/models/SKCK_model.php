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

    public function getSKCK($id_skck)
    {
        /**
         * @var $id_skck Id Data SKCK
         */
        $this->db->select('*');
        $this->db->from('data_skck');
        $this->db->join('data_nik', 'data_nik.id_nik = data_skck.id_ktp');
        $this->db->where('data_skck.id_skck', $id_skck);
        $respon = $this->db->get()->row_object();
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

    public function getSKCKBetweenDate($date_start, $date_end)
    {
        $this->db->select('*');
        $this->db->from('data_skck');
        $this->db->join('data_nik', 'data_nik.id_nik = data_skck.id_ktp');
        $this->db->join('no_skck', 'no_skck.id_no_skck = data_skck.nomor');
        $this->db->where("data_skck.create_at BETWEEN '$date_start' and '$date_end'");
        $data = $this->db->get();
        return $data;
    }

    public function input_data_ktp()
    {
        $data = $this->get_data_ktp_by_nik($this->input->post('nik'));

        if ($data->num_rows() > 0) {
            $object = [
                'paspor' => $this->input->post('paspor'),
                'jk' => $this->input->post('jk'),
                'kebangsaan' => 'Indonesia',
                'agama' => $this->input->post('agama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'nama_jalan' => $this->input->post('nama_jalan'),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'id_desa' => $this->input->post('kelurahan'),
                'id_kecamatan' => $this->input->post('kecamatan'),
                'id_kota' => $this->input->post('kota'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'is_full' => 1
            ];

            $this->db->update('data_nik', $object, [
                'id_nik' => $data->row_object()->id_nik
            ]);

            return [
                'respon' => 1,
                'id' => $data->row_object()->id_nik,
            ];
        } else {
            $data = [
                'no_ktp' => $this->input->post('nik'),
                'paspor' => $this->input->post('paspor'),
                'nama' => $this->input->post('nama'),
                'jk' => $this->input->post('jk'),
                'kebangsaan' => 'Indonesia',
                'agama' => $this->input->post('agama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'nama_jalan' => $this->input->post('nama_jalan'),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'id_desa' => $this->input->post('kelurahan'),
                'id_kecamatan' => $this->input->post('kecamatan'),
                'id_kota' => $this->input->post('kota'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'is_full' => 1
            ];
            $respon = $this->db->insert('data_nik', $data);
            $id = $this->db->insert_id();
            return [
                'respon' => $respon,
                'id' => $id
            ];
        }
    }

    public function get_data_ktp_by_nik($nik)
    {
        return $this->db
            ->order_by('id_nik', 'DESC')
            ->get_where('data_nik', ['no_ktp' => $nik], 1);
    }
}

/* End of file SKCK_model.php */
