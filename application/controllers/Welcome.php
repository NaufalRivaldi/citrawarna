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
		$title = $this->db->where('param', 'title')->get('setting')->row_array();
		$description = $this->db->where('param', 'description')->get('setting')->row_array();
		$keywords = $this->db->where('param', 'keywords')->get('setting')->row_array();
		$data['title'] = $title['value'];
		$data['description'] = $description['value'];
		$data['keywords'] = $keywords['value'];
		$this->load->view('index', $data);
	}
}
