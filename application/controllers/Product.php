<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Product extends CI_Controller 
{
	public function view($kd_merk){
		$data['barang'] = $this->db->join('kat_barang', 'barang.kd_kategori = kat_barang.kd_kategori')
									->join('jenis', 'jenis.kd_jenis = barang.kd_jenis')
									->where('kd_merk', $kd_merk)->get('barang')->row_array();
		$data['raw'] = $this->db->query("SELECT * FROM raw WHERE kd_merk = '$kd_merk' group by nm_barang")->result_array();
		$data['page'] = $data['barang']['nm_barang'];
		$this->load->view('frontend/show_barang', $data);

	}
}

 ?>