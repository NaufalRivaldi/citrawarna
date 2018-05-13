<?php defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller 
{
	public function __construct(){
		parent::__construct();

	}

	public function read($link){
		$data['artikel'] = $this->db->where('link', $link)->get('artikel')->row_array();
		$data['page'] = $data['artikel']['judul'];
		$this->load->view('frontend/read_artikel', $data); 
	}
}


 ?>