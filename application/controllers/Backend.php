<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Backend extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('backend_model', 'backend');
	}
	public function index(){
		$this->load->view("backend/form_login");
	}

	public function login(){
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		if($username == ''){
			redirect('backend');
		}
		$query = $this->login_model->login($username, $password);
		
		if($query){
			$user = [
				'id_user' => $query['id_user'],
				'username' => $query['username']
			];
			$this->login_model->reset_gagal($query['username']);
			$this->session->set_userdata($user);
			$this->session->set_flashdata("success", "Login Berhasil");
			redirect('backend/dashboard');
		} else {
			$this->session->set_flashdata("danger", "Login gagal, username/password salah!");
			$fail = $this->login_model->login_gagal($username, $password);
			$jml_gagal = $this->login_model->cek_gagal($username);
			if($jml_gagal > 3){
				$this->session->set_flashdata("danger", "Anda telah diblokir, hubungi developer");
				$stat_user = $this->login_model->change_stat($username);
			} 

			$this->load->view("backend/form_login");
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata("success", "Anda telah logout");
		redirect('backend');
	}

	public function secret(){
		$this->login_model->cek_login();

		$laman = [
			'content' => 'backend/secret',
			'title' => 'User Security',
			'menu' => 0
		];
		$laman['blocked'] = $this->backend->get_blocked_user();

		$this->load->view('backend/template', $laman);
	}
	public function unblock($username){
		$this->login_model->cek_login();
		$data = $this->backend->do_unblocking($username);
		$this->session->set_flashdata('success', 'User berhasil di unblock, mohon himbau user tersebut agar tidak salah login lebih dari 3x');
		redirect('backend/secret');
	}

	public function dashboard(){
		$this->login_model->cek_login();

		$laman = [
			'content' => 'backend/dashboard',
			'title' => 'Dashboard',
			'menu' => 1
		];

		$this->load->view('backend/template', $laman);
	}


	public function artikel($page = null){
		$this->login_model->cek_login();
		$per_halaman = 8;
		if($page == null){
			$offset = 0;
		} else {
			$offset = ($page * $per_halaman) - $per_halaman;
		}

		$artikel = $this->db->get('artikel')->num_rows();

		$laman = [
			'content' => 'backend/artikel/index',
			'title' => 'Artikel',
			'menu' => 2
		];
		$laman['artikel'] = $this->backend->get_artikel($per_halaman, $offset);
		$laman['pagination'] = $this->backend->makePagination($artikel, 'artikel');

		if(isset($_GET['keywords'])){
			$keywords = $this->input->get('keywords');
			$laman['artikel'] = $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
							->like('judul', $keywords)
							->get('artikel')
							->result_array();
		
			$laman['pagination'] = null;
		}

		$this->load->view('backend/template', $laman);

	}

	public function slideshow($page=null){
		$this->login_model->cek_login();

		$per_halaman = 8;
		if($page == null){
			$offset = 0;
		} else {
			$offset = ($page * $per_halaman) - $per_halaman;
		}
		$slide = $this->db->get('slideshow')->num_rows();
		$laman = [
			'content' => 'backend/slideshow/index',
			'title' => 'Slideshow ',
			'menu' => 3
		];

		
		$laman['slideshow'] = $this->backend->get_slideshow($per_halaman, $offset);
		$laman['paginate'] = $this->backend->makePagination($slide, 'slideshow');
		
		$this->load->view('backend/template', $laman);
	}


	public function barang($page = null){

		$per_halaman = 8;
		if($page == null) {
			$offset = 0;
		} else {
			$offset = ($page * $per_halaman) - $per_halaman;
		}

		$this->login_model->cek_login();
		$brg = $this->db->get('barang')->num_rows();
		$laman = [
			'content' => 'backend/barang/index',
			'title' => 'Barang',
			'menu' => 4,
			'barang' => $this->backend->get_barang($per_halaman, $offset),
			'pagination' => $this->backend->makePagination($brg, 'barang')
		];

		//fungsi untuk search data
		if(isset($_GET['keywords'])){
			$keywords = $this->input->get('keywords');
			$laman['barang'] = $this->db->join('kat_barang', 'kat_barang.kd_kategori = barang.kd_kategori')
							->join('jenis', 'jenis.kd_jenis = barang.kd_jenis', 'left')
							->like('nm_barang', $keywords)
							->get('barang')
							->result_array();

			$laman['pagination'] = null;
		}

		$this->load->view('backend/template', $laman);
	}

	public function cabang(){
		$this->login_model->cek_login();
		$laman = [
			'content' => 'backend/cabang/index',
			'title' => 'cabang',
			'menu' => 6,
			'cabang' => $this->backend->get_cabang()
		];

		$this->load->view('backend/template', $laman);
	}


	//new featured detail barang update 09-08-2018
	public function detail_barang(){
		$this->login_model->cek_login();
		$laman['content'] = 'backend/barang/index_detail';
		$laman['title'] = "Detail Barang";
		$laman['menu'] = 7;
		$laman['detail_barang'] = $this->backend->get_detail_barang(); 
		$this->load->view('backend/template', $laman);
	}
}

 ?>