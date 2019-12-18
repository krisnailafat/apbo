<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{

    public function getPesanan()
    {
        $query = "SELECT `pesanan`.*, `user`.`name` 
                    FROM `pesanan`
                     JOIN `user` ON `pesanan`.`nama` = `user`.`id` 
                    ";
        return $this->db->query($query)->result_array();
    }

    public function getPesananById($id_pesanan)
    {
        return $this->db->get_where('pesanan', ['id_pesanan' => $id_pesanan])->row_array();
    }

    public function getCariPesanan($keyword = null)
    {

        if ($keyword) {
            $this->db->like('nomor_hp', $keyword);
            $query = "SELECT `pesanan`.*, `user`.`name` 
                    FROM `pesanan`
                     JOIN `user` ON `pesanan`.`nama` = `user`.`id` 
                     WHERE `pesanan`.`nomor_hp` = $keyword
                    ";
            return $this->db->query($query)->result_array();
        }
        // $this->db->where(['nomor_hp' => $keyword]);
        // return $this->db->get('pesanan')->result_array();


    }
}
