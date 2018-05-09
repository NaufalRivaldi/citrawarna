<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Backend_model extends CI_Model
{
	public function get_artikel(){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')->where('stat', 1)->get('artikel')->result_array();
	}

	public function defaultArtikel(){
		return [
			'tanggal' => '',
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

	public function upload_cover($path, $field){
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['remove_space'] = true;
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload($field)){
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      		return $return;
		} else {
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      		return $return;
		}
	}

	public function do_resize($field, $source_path, $new_path){
		$config = [
			'image_library' => 'gd2',
			'source_image' => $source_path,
			'new_image' => $new_path,
			'maintain_ratio' => true,
			'width' => 200
		];
		$this->load->library('image_lib', $config);
		if($this->image_lib->resize()){
			return true;
		} else {
			return false;
		}
	}

	public function insert_artikel($upload){
		$data = $this->input->post();
		$data['link'] = strtolower(str_replace(" ", "-", $this->input->post('judul')));
		$data['img'] = $upload['file']['file_name'];

		$this->db->insert('artikel', $data);
	}


	public function row_artikel($id_artikel){
		return $this->db->where('id_artikel', $id_artikel)->get('artikel')->row_array();
	}

	public function update_artikel($id_artikel, $upload){
		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'judul' => $this->input->post('judul'),
			'link' => strtolower(str_replace(" ", "-", $this->input->post('judul'))),
			'keyword' => $this->input->post('keyword'),
			'excerpt' => $this->input->post('excerpt'),
			'isi' => $this->input->post('isi'),
			'id_kategori' => $this->input->post('id_kategori'),
			'img' => $upload['file']['file_name'],
			'stat' => $this->input->post('stat'),
			);

		$this->db->where('id_artikel', $id_artikel);
		$this->db->update('artikel', $data);
	}

	public function update_artikel_without_image($id_artikel, $data){
		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'judul' => $this->input->post('judul'),
			'link' => strtolower(str_replace(" ", "-", $this->input->post('judul'))),
			'keyword' => $this->input->post('keyword'),
			'excerpt' => $this->input->post('excerpt'),
			'isi' => $this->input->post('isi'),
			'id_kategori' => $this->input->post('id_kategori'),
			'stat' => $this->input->post('stat'),
			);

		return $this->db->where('id_artikel', $id_artikel)->update('artikel', $data);
	}

	public function change_stat($id_artikel){
		return $this->db->set('stat', 0)->where('id_artikel', $id_artikel)->update('artikel');
	}

	public function get_blocked_user(){
		return $this->db->where('stat', 0)->get('user')->result_array();
	}

	public function do_unblocking($username){
		$unblock = $this->db->set('stat', 1)->where('username', $username)->update('user');
		$del_log = $this->db->where('username', $username)->delete('login_log');
	}

	public function get_slideshow(){
		return $this->db->get('slideshow')->result_array();
	}

	public function default_slideshow(){
		return [
			'tanggal' => '',
			'judul' => '',
			'url' => '',
			'img' => '',
			'z-index' => '',
			'stat' => '',
			
		];
	}

	public function insert_slideshow($upload){
		$data = $this->input->post();
		$data['img'] = $upload['file']['file_name'];

		$this->db->insert('slideshow', $data);
	}


	public function get_barang(){
		return $this->db->join('kat_barang', 'kat_barang.kd_kategori = barang.kd_kategori')
						->join('jenis', 'jenis.kd_jenis = barang.kd_jenis')
						->where('stat', 1)
						->get('barang')->result_array();
	}

	public function defaultBarang(){
		return [
			'kd_merk' => '',
			'nm_barang' => '',
			'deskripsi' => '',
			'kd_kategori' => '',
			'kd_jenis' => '',
			'tag' => '',
			'foto' => '',
			'no_index' => '',
			'unggulan' => '',
			'stat' => '',
			'click' => '',
		];
	}

	public function insert_barang($upload){
		$data = $this->input->post();
		$data['foto'] = $upload['file']['file_name'];

		$this->db->insert('barang', $data);
	}

	public function row_barang($id_barang){
		return $this->db->where('id_barang', $id_barang)->get('barang')->row_array();
	}

	public function update_barang($id_barang, $upload){
		$data = $this->input->post();
		$data['foto'] = $upload['file']['file_name'];

		$this->db->where('id_barang', $id_barang);
		$this->db->update('barang', $data);
	}

	public function update_barang_without_image($id_barang, $data){
		$data = $this->input->post();
		return $this->db->where('id_barang', $id_barang)->update('barang', $data);
	}

	public function changeStatBarang($id_barang){
		return $this->db->set('stat', 0)->where('id_barang', $id_barang)->update('barang');
	}


}

 ?>