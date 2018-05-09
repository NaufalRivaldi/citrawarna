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


	public function artikel(){
		$this->login_model->cek_login();
		$laman = [
			'content' => 'backend/artikel/index',
			'title' => 'Artikel',
			'menu' => 2
		];
		$laman['artikel'] = $this->backend->get_artikel();


		$this->load->view('backend/template', $laman);

	}

	public function slideshow(){
		$this->login_model->cek_login();
		$laman = [
			'content' => 'backend/slideshow/index',
			'title' => 'Slideshow ',
			'menu' => 3
		];
		$laman['slideshow'] = $this->backend->get_slideshow();
		$this->load->view('backend/template', $laman);
	}


	public function barang(){
		$this->login_model->cek_login();
		$laman = [
			'content' => 'backend/barang/index',
			'title' => 'Barang',
			'menu' => 4,
			'barang' => $this->backend->get_barang()
		];

		//$laman['cek'] = $this->db->query('SELECT distinct nm_barang,harga FROM raw WHERE kd_merk = "WLDN"')->result_array();
		$this->load->view('backend/template', $laman);
	}
}

 ?>