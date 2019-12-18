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

    public function getPesananAll()
    {
        $query = "SELECT `pesanan`.*, `user`.`name` 
                    FROM `pesanan`
                     JOIN `user` ON `pesanan`.`nama` = `user`.`id` 
                     ORDER BY `pesanan`.`date_created` ASC
                    ";
        return $this->db->query($query)->result_array();
    }

    public function getJumlahTotal()
    {
        $query = "SELECT SUM(`harga`) AS 'JumlahTotal', SUM(`berat`) AS 'JumlahBerat'
                    FROM `pesanan`
                    ";
        return $this->db->query($query)->result_array();
    }

    public function getPesananPeriode($tgl1, $tgl2)
    {
        $query = "SELECT `pesanan`.*, `user`.`name` 
                    FROM `pesanan`
                     JOIN `user` ON `pesanan`.`nama` = `user`.`id` 
                     WHERE `pesanan`.`date_created` BETWEEN $tgl1 AND $tgl2
                     ORDER BY `pesanan`.`date_created` ASC
                    ";
        return $this->db->query($query)->result_array();
    }

    public function getJumlahTotalPeriode($tgl1, $tgl2)
    {
        $query = "SELECT SUM(`harga`) AS 'JumlahTotal', SUM(`berat`) AS 'JumlahBerat'
                    FROM `pesanan`
                    WHERE `pesanan`.`date_created` BETWEEN $tgl1 AND $tgl2
                    ";
        return $this->db->query($query)->result_array();
    }
}
