<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller 
{
	public function __construct(){
		parent::__construct();

	}

	public function detail($id){
		$data['lowongan'] = $this->db->where('id', $id)->get('lowongan')->row_array();
		$data['title'] = $data['lowongan']['judul'];
		$data['keywords'] = $data['lowongan']['judul'];
		$data['img'] = 'assets/img/cwa_banner.jpg';
		$data['description'] = "Lowongan kerja toko cat citra warna";
		//update jumlah klik pada record

		$this->load->view('frontend/new/lowongan/detail_lowongan', $data); 
	}
}


 ?>