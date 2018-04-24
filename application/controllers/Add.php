<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Add extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('backend_model', 'backend');
	}

	public function artikel(){
		$this->login_model->cek_login();


		$laman = [
			'content' => 'backend/artikel/form',
			'title' => 'Add Artikel',
			'menu' => 2
		];
		
		if(!$_POST){
			$laman['input'] = (array) $this->backend->defaultArtikel();
		} else {
			$laman['input'] = (array) $this->input->post();
		}

		$this->load->view('backend/template', $laman);
	}
}

 ?>