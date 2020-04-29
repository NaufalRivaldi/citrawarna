<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Lowongan extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('backend_model', 'backend');
		$this->load->model('lowongan_model', 'lowongan');
		$this->load->library('form_validation');
	}
    
    public function index(){
		$this->login_model->cek_login();

		$lowongan = $this->lowongan->getData();

		$laman = [
			'content' => 'backend/lowongan/index',
			'title' => 'Lowongan',
			'menu' => 9,
			'lowongan' => $lowongan
		];

		$this->load->view('backend/template', $laman);
	}

	public function form(){
		$this->login_model->cek_login();

		$laman = [
			'content' => 'backend/lowongan/form',
			'title' => 'Lowongan - Form',
			'menu' => 8
		];

		$this->load->view('backend/template', $laman);
	}

	public function store(){
		$lowongan = $this->lowongan;
		// print_r($lowongan);
		$validation = $this->form_validation;
		$validation->set_rules($lowongan->validation());
		
		if($validation->run()){
			$lowongan->save();
			$this->session->set_flashdata('success', 'Simpan data berhasil');
			redirect('admin/lowongan/');
		}

		$this->session->set_flashdata('danger', 'Terjadi kesalahan saat menyimpan data');
		redirect('admin/lowongan/');
	}

	public function delete($id){
		$this->lowongan->delete($id);
		$this->session->set_flashdata('success', 'Delete data berhasil.');
		redirect('admin/lowongan');
	}
}

 ?>