<?php 
defined('BASEPATH') or exit('No direct script access allowed!');

class Inspirasi extends CI_Controller
{
	public function index(){
		$data['title'] = "Inspirasi ";
		$data['keywords'] = "Inspirasi cat tembok, rumah bagus, warna yang cocok";
		$data['description'] = "Berikut adalah inspirasi yang kami sarankan untuk pengecatan anda";
		$data['img'] = 'assets/img/inspiration.jpg';
		$data['content'] = 'frontend/inspiration_page';
		$this->load->view('template', $data);
	}
}

 ?>