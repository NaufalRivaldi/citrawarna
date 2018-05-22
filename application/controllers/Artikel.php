<?php defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller 
{
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['artikels'] = $this->home_model->get_home_artikel(0);
		$data['title'] = "Artikel ";
		$data['keywords'] = "Artikel Citra Warna, cwa artikel";
		$data['description'] = "Berikut adalah artikel dari kami";
		$data['img'] = 'assets/img/cwa_banner.jpg';
		$data['content'] = 'frontend/index_artikel';
		$this->load->view('template', $data);
	}

	public function read($link){
		$data['artikel'] = $this->db->join('kategori', 'kategori.id_kategori=artikel.id_kategori')->where('link', $link)->get('artikel')->row_array();
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