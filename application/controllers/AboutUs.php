<?php defined('BASEPATH') or exit('No direct script access allowed');

class AboutUs extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('bagan_model');
	}

	public function index(){
		$key = $this->home_model->get_setting('keywords');
		$desk = $this->home_model->get_setting('description');
		$data['keywords'] = $key['value'];
		$data['description'] = $desk['value'];
		$data['title'] = 'Welcome';
		$data['img'] = 'assets/img/cwa_banner.jpg';
		$data['bagan'] = $this->bagan_model->getBagan();
		// print_r($data['bagan']);
		$this->load->view('frontend/new/about_us/index_aboutus', $data);
	}
}


 ?>