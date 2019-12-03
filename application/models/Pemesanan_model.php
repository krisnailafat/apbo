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

    public function getPesananById($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }
}
