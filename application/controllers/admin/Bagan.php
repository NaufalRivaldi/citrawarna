<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Bagan extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('backend_model', 'backend');
		$this->load->model('bagan_model', 'bagan');
		$this->load->library('form_validation');
	}
    
    public function index(){
		$this->login_model->cek_login();

		$bagan = $this->bagan->getData();

		$laman = [
			'content' => 'backend/bagan/index',
			'title' => 'Bagan',
			'menu' => 10,
			'bagan' => $bagan
		];

		$this->load->view('backend/template', $laman);
	}

	public function form(){
		$this->login_model->cek_login();

		$laman = [
			'content' => 'backend/bagan/form',
			'title' => 'Struktur Organisasi - Form',
			'menu' => 10
		];

		$this->load->view('backend/template', $laman);
	}

	public function store(){
        $bagan = $this->bagan;

        $bagan->save();
        $this->session->set_flashdata('success', 'Simpan data berhasil');
        redirect('admin/bagan/');
	}

	public function delete($id){
		$this->lowongan->delete($id);
		$this->session->set_flashdata('success', 'Delete data berhasil.');
		redirect('admin/lowongan');
	}
}

 ?>