<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Product extends CI_Controller 
{
	public function view($kd_merk){
		$data['barang'] = $this->home_model->get_row_barang('kd_merk',$kd_merk);
		$data['raw'] = $this->db->query("SELECT * FROM raw WHERE kd_merk='$kd_merk' group by nm_barang")->result_array();

		$data['title'] = $data['barang']['nm_barang'];
		$data['keywords'] = $data['barang']['tag'];
		$data['img'] = 'upload/produk/'.$data['barang']['foto'];
		$data['description'] = $data['barang']['deskripsi'];
		$data['detail'] = 0;
		//update jumlah klik pada record
		$this->home_model->updateClick('barang', 'kd_merk', $kd_merk);

		$data['content'] = 'frontend/show_barang';
		$this->load->view('template', $data);
	}

	public function detail($nm_barang){

		$namaBarang = strtoupper(str_replace("-", " ", $nm_barang));
		//get 1 row dulu untuk kd_merk
		$row = $this->home_model->raw($namaBarang)->row_array();

		$data['barang'] = $this->home_model->get_row_barang('kd_merk', $row['kd_merk']);

		$data['raw'] = $this->db->query("SELECT * FROM raw WHERE nm_barang='".$namaBarang. "' AND kd_gudang != 'GUDANG' ")->result_array();

		$data['title'] = $data['barang']['nm_barang'];
		$data['keywords'] = $data['barang']['tag'];
		$data['img'] = 'upload/produk/'.$data['barang']['foto'];
		$data['description'] = $data['barang']['deskripsi'];
		$data['detail'] = 1;
		//update jumlah klik pada record
		$this->home_model->updateClick('barang', 'kd_merk', $row['kd_merk']);

		$data['content'] = 'frontend/show_barang';
		$this->load->view('template', $data);
	}
}

 ?>