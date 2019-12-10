<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
	}
	public function index()
	{

		$data['title'] = 'Home';
		$this->load->model('Article_model', 'article');
		$data['about'] = $this->db->get('about')->row_array();


		//pagination
		$this->load->library('pagination');

		// ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		// config
		$this->db->like('title', $data['keyword']);
		$this->db->from('post');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 3;


		// initialize
		$this->pagination->initialize($config);


		// $data['post'] = $this->article->post();
		$data['start'] = $this->uri->segment(3);
		$data['post'] = $this->article->getPost($config['per_page'], $data['start'], $data['keyword']);

		$data['admin'] = $this->article->admin();
		$data['allpost'] = $this->article->getNameKategori();
		$data['allkategori'] = $this->db->get('kategori')->result_array();



		$this->load->view('welcome_message', $data);
	}
}
