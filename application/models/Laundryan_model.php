<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laundryan_model extends CI_Model
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
}
