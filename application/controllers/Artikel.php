<?php defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller 
{
	public function __construct(){
		parent::__construct();

	}

	public function read($link){
		$data['artikel'] = $this->db->where('link', $link)->get('artikel')->row_array();
		$data['title'] = $data['artikel']['judul'];
		$data['keywords'] = $data['artikel']['keyword'];
		$data['img'] = 'upload/artikel/'.$data['artikel']['img'];
		$data['description'] = $data['artikel']['excerpt'];
		$data['content'] = 'frontend/read_artikel';
		//update jumlah klik pada record
		$this->home_model->updateClick('artikel', 'link', $link);

		$this->load->view('template', $data); 
	}
}


 ?>