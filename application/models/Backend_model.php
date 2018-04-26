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

	public function upload_cover(){
		$config['upload_path'] = './upload/artikel/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['remove_space'] = true;

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('img')){
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      		return $return;
		} else {
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      		return $return;
		}
	}

	public function insert_artikel($upload){
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

		$this->db->insert('artikel', $data);
	}

	public function do_resize($field, $source_path){
		$config = [
			'image_library' => 'gd2',
			'source_image' => $source_path,
			'new_image' => './upload/artikel/thumbs/',
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
}

 ?>