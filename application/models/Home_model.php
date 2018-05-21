<?php defined('BASEPATH') or exit('No Direct script access allowed!');

class Home_model extends CI_Model 
{
	public function get_home_artikel($limit){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
						->order_by('tanggal', 'desc')
						->where('stat', 1)
						->get('artikel',$limit)->result_array();
	}

	public function get_cabang(){
		return $this->db->where('stat', 1)->get('cabang')->result_array();
	}

	public function get_setting($param){
		return $this->db->where('param', $param)->get('setting')->row_array();
	}

	public function get_barang_unggulan($limit=null){
		return $this->db->join('kat_barang', 'kat_barang.kd_kategori = barang.kd_kategori')->where('stat', 1)->where('unggulan', 'y')->get('barang', $limit)->result_array();
	}

	public function updateClick($tbl,$field,$value){
		$query = $this->db->query("UPDATE $tbl SET click = click + 1 WHERE $field = '$value' ");
		return $query;
	}

	public function get_row_barang($field, $kd_merk){
		return $this->db->join('kat_barang', 'barang.kd_kategori = kat_barang.kd_kategori')
									->join('jenis', 'jenis.kd_jenis = barang.kd_jenis', 'left')
									->where($field, $kd_merk)->get('barang')->row_array();
	}

	public function raw($nm_barang){
		return $this->db->where('nm_barang', $nm_barang)->get('raw');
	}

	public function get_list_barang($kat){
		return $this->db->join('kat_barang', 'kat_barang.kd_kategori = barang.kd_kategori')->where('barang.kd_kategori', $kat)->get('barang')->result_array();
	}

	public function get_all_barang($kat){
		return $this->db->join('kat_barang', 'kat_barang.kd_kategori = barang.kd_kategori')->get('barang')->result_array();
	}


 


}

 ?>