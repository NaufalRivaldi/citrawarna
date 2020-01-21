<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Testimoni extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('backend_model', 'backend');
		$this->load->model('testimoni_model', 'testi');
		$this->load->library('form_validation');
	}
    
    public function index(){
		$this->login_model->cek_login();

		$testimoni = $this->testi->getData();

		$laman = [
			'content' => 'backend/testimoni/index',
			'title' => 'Testimoni',
			'menu' => 8,
			'testimoni' => $testimoni
		];

		$this->load->view('backend/template', $laman);
	}

	public function form(){
		$this->login_model->cek_login();

		$laman = [
			'content' => 'backend/testimoni/form',
			'title' => 'Testimoni - Form',
			'menu' => 8
		];

		$this->load->view('backend/template', $laman);
	}

	public function store(){
		$testi = $this->testi;
		$validation = $this->form_validation;
		$validation->set_rules($testi->validation());

		if($validation->run()){
			$testi->save();
			$this->session->set_flashdata('success', 'Simpan data berhasil');
			redirect('admin/testimoni/');
		}

		$this->session->set_flashdata('danger', 'Terjadi kesalahan saat menyimpan data');
		redirect('admin/testimoni/');
	}

	public function delete($id){
		$this->testi->delete($id);
		$this->session->set_flashdata('success', 'Delete data berhasil.');
		redirect('admin/testimoni');
	}
}

 ?>