<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Backend_model extends CI_Model
{
	public function get_artikel(){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')->get('artikel')->result_array();
	}

	public function defaultArtikel(){
		return [
			'tanggal' => date('Y-m-d H:i:s'),
			'judul' => '',
			'link' => '',
			'keyword' => '',
			'excerpt' => '',
			'isi' => '',
			'id_kategori' => '',
			'img' => '',
			'stat' => '',
		];
	}
}

 ?>