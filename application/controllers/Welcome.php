<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$key = $this->home_model->get_setting('keywords');
		$desk = $this->home_model->get_setting('description');
		$data['keywords'] = $key['value'];
		$data['description'] = $desk['value'];
		$data['title'] = 'Welcome';
		$data['img'] = 'assets/img/cwa_banner.jpg';
		$data['content'] = 'frontend/home';
		$this->load->view('template', $data);
	}

	public function home()
	{
		$this->load->view('template2020');
	}
}
