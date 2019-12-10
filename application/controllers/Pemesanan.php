<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
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
        // else {
        //     $title = $this->input->post('title');
        //     $deskritpion = $this->input->post('deskription');
        //     $upload_image = $_FILES['image'];

        //     if ($upload_image) {
        //         $config['allowed_types'] = 'gif|jpg|png';
        //         $config['max_size'] = '2048';
        //         $config['upload_path'] = './assets/article/img/about/';

        //         $this->load->library('upload', $config);

        //         if (!$this->upload->do_upload('image')) {
        //             echo $this->upload->display_errors();
        //             die();
        //         } else {
        //             $data = [
        //                 'title' => $this->input->post('title'),
        //                 'deskription' => $this->input->post('deskription'),
        //                 'image' => $this->upload->data('file_name')
        //             ];

        //             $this->db->insert('about', $data);

        //             $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New About Added!</div>');
        //             redirect('article/about');
        //         }
        //     }
        // }
    }

    public function buatpesanan()
    {
        $data['title'] = 'Buat Pesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pemesanan_model', 'pesanan');
        $data['datapesanan'] = $this->pesanan->getPesanan();
        $data['nama_pelanggan'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('nomor_hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pemesanan/buatpesanan', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nomor_hp' => $this->input->post('nomor_hp'),
                'berat' => $this->input->post('berat'),
                'harga' => $this->input->post('harga'),
                'status' => 'Belum selesai',
                'admin' => 'admin',
                'date_created' => time()
            ];

            $this->db->insert('pesanan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pelanggan berhasil ditambahkan!</div>');
            redirect('pemesanan/pesanan');
        }
    }


    public function deletePesanan($id_pesanan)
    {
        $this->db->where('id_pesanan', $id_pesanan);
        $this->db->delete('pesanan');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">delete success!</div>');
        redirect('pemesanan/pesanan');
    }

    public function editPesanan($id_pesanan)
    {
        $data['title'] = 'Edit Pesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pemesanan_model', 'pesanan');

        $data['datapesanan'] = $this->pesanan->getPesanan();
        $data['nama_pelanggan'] = $this->db->get('user')->result_array();
        $data['pesananById'] = $this->pesanan->getPesananById($id_pesanan);

        $this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('nomor_hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('berat', 'Berat', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pemesanan/editPesanan', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nomor_hp' => $this->input->post('nomor_hp'),
                'berat' => $this->input->post('berat'),
                'harga' => $this->input->post('harga'),
                'status' => 'Belum selesai',
                'admin' => 'admin',
                'date_created' => time()
            ];

            $this->db->where('id_pesanan', $id_pesanan);
            $this->db->update('pesanan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit pesanan success!</div>');
            redirect('pemesanan/pesanan');
        }
    }

    public function editBelumSelesaiPesanan($id_pesanan)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pemesanan_model', 'pesanan');


        $data['datapesanan'] = $this->pesanan->getPesanan();
        $data['nama_pelanggan'] = $this->db->get('user')->result_array();
        $data['title'] = 'Data Pesanan ( ' . count($data['datapesanan']) . ' )';
        $data['pesananById'] = $this->pesanan->getPesananById($id_pesanan);

        $data = [
            'status' => 'Belum selesai',
            'admin' => 'admin',
            'date_created' => time()
        ];

        $this->db->where('id_pesanan', $id_pesanan);
        $this->db->update('pesanan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit status pesanan success!</div>');
        redirect('pemesanan/pesanan');
    }
    public function editDiProsesPesanan($id_pesanan)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pemesanan_model', 'pesanan');


        $data['datapesanan'] = $this->pesanan->getPesanan();
        $data['nama_pelanggan'] = $this->db->get('user')->result_array();
        $data['title'] = 'Data Pesanan ( ' . count($data['datapesanan']) . ' )';
        $data['pesananById'] = $this->pesanan->getPesananById($id_pesanan);

        $data = [
            'status' => 'Di Proses',
            'admin' => 'admin',
            'date_created' => time()
        ];

        $this->db->where('id_pesanan', $id_pesanan);
        $this->db->update('pesanan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit status pesanan success!</div>');
        redirect('pemesanan/pesanan');
    }
    public function editSudahSelesaiPesanan($id_pesanan)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pemesanan_model', 'pesanan');


        $data['datapesanan'] = $this->pesanan->getPesanan();
        $data['nama_pelanggan'] = $this->db->get('user')->result_array();
        $data['title'] = 'Data Pesanan ( ' . count($data['datapesanan']) . ' )';
        $data['pesananById'] = $this->pesanan->getPesananById($id_pesanan);

        $data = [
            'status' => 'Sudah Selesai',
            'admin' => 'admin',
            'date_created' => time()
        ];

        $this->db->where('id_pesanan', $id_pesanan);
        $this->db->update('pesanan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit status pesanan success!</div>');
        redirect('pemesanan/pesanan');
    }
}
