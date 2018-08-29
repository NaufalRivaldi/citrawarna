<?php 
defined('BASEPATH') or exit('No direct script access allowed!');

class Kategori extends CI_Controller
{
	public function list($param) {
		if($param==null){
			redirect('kategori');
		} else {
			$data['kategori'] = $this->db->where('id_kategori', $param)->get('kategori')->row_array();
			$data['artikels'] = $this->db->join('kategori', 'kategori.id_kategori=artikel.id_kategori')->where('artikel.id_kategori', $param)->get('artikel')->result_array();
			$data['content'] = 'frontend/grup_kategori';
			$data['title'] = "Kategori " . $data['kategori']['nama_kategori'];
			$data['description'] = "Ini adalah list artikel dari kategori ".$data['kategori']['nama_kategori'];
			$data['keywords'] = $data['kategori']['nama_kategori']. ", artikel ". $data['kategori']['nama_kategori'];
			$data['img'] = 'assets/img/kategori.jpg';
			$this->load->view('template', $data);
		}  
	}
}


 ?>