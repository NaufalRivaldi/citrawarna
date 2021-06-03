<?php defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index(){
		$key = $this->home_model->get_setting('keywords');
		$desk = $this->home_model->get_setting('description');
		$data['cabangBali'] = $this->home_model->get_cabang_by_lokasiId(1);
		$data['cabangLombok'] = $this->home_model->get_cabang_by_lokasiId(2);
		$data['cabangMakassar'] = $this->home_model->get_cabang_by_lokasiId(3);
		$data['cabangPalembang'] = $this->home_model->get_cabang_by_lokasiId(4);
		$data['keywords'] = $key['value'];
		$data['description'] = $desk['value'];
		$data['title'] = 'Welcome';
		$data['img'] = 'assets/img/cwa_banner.jpg';
		$this->load->view('frontend/new/contact/contact_form', $data);
	}
}


 ?>