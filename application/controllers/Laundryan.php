<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laundryan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function laundryan()
    {
        $data['title'] = 'Laundryan';
        $data['subTitle'] = 'Daftar pesanan laundry anda';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data2['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row()->name;

        $data['laundryan'] = $this->db->get_where('pesanan', ['nama' => $this->session->userdata('id')])->result_array();
        $data['nama'] = implode(", ", $data2);



        $pesanan = $this->db->get_where('pesanan', ['nama' => $this->session->userdata('id')])->result_array();
        $data['pesanan'] = count($pesanan);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laundryan/laundryan', $data);
            $this->load->view('templates/footer');
        }
        // else {
        //     $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
        //     redirect('menu');
        // }
    }

    public function Pesanan()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data2['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row()->name;

        $this->load->model('Pemesanan_model', 'pesanan');
        // $z = implode(", ", $data2);
        // echo $dataa;
        // die();


        $data['datapesanan'] = $this->pesanan->getPesanan();
        // print_r($data['datapesanan']);
        // die();
        $data['pelanggan'] = $this->db->get('user')->result_array();
        $data['title'] = 'Data Pesanan ( ' . count($data['datapesanan']) . ' )';

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pemesanan/pesanan', $data);
            $this->load->view('templates/footer');
        }
    }
}
