<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Crud extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('backend_model', 'backend');
	}

	public function index(){
		redirect('backend/artikel');
	}

	//artikel
	public function artikel_add(){
		$this->login_model->cek_login();
		
		$laman = [
			'content' => 'backend/artikel/form',
			'title' => 'Add Artikel',
			'menu' => 2,
			'form_action' => 'crud/artikel_add'
		];
		
		if(!$_POST){
			$laman['input'] = (array) $this->backend->defaultArtikel();
		} else {
      		$upload = $this->backend->upload_cover('./upload/artikel/');
		    if($upload['result'] == "success"){ 
		    	$this->backend->insert_artikel($upload);
		    	$resize = $this->backend->do_resize('img', "./upload/artikel/".$upload['file']['file_name']);
		    	//print_r($upload['file']['file_name']);
		        $this->session->set_flashdata('success', 'Data artikel berhasil ditambah');
		        redirect('backend/artikel'); 
		    }else{ 
		    	$laman['input'] = (array) $this->input->post();
		        $this->session->set_flashdata('danger', 'Terjadi kesalahan saat menyimpan data');
		    }
		}


		$this->load->view('backend/template', $laman);
	}

	public function artikel_edit($id_artikel){
		$this->login_model->cek_login();

		$laman = [
			'content' => 'backend/artikel/form',
			'title' => 'Edit Artikel',
			'menu' => 2,
			'form_action' => 'crud/artikel_edit/'.$id_artikel
		];

		$laman['input'] = $this->backend->row_artikel($id_artikel);
		if($_POST){
			$upload = $this->backend->upload_cover();
			//kalau ada gambar cover dirubah
			if($upload['result'] == "success"){ 
		    	$this->backend->update_artikel($id_artikel, $upload);
		    	$resize = $this->backend->do_resize('img', "./upload/artikel/".$upload['file']['file_name']);
		        $this->session->set_flashdata('success', 'Data artikel berhasil diedit');
		        redirect('backend/artikel'); 
		    }else{
		    	$data = $this->input->post();
		    	$this->backend->update_artikel_without_image($id_artikel, $data); 
		        $this->session->set_flashdata('success', 'Data artikel berhasil diedit');
		        redirect('backend/artikel');  
		    }
		}

		$this->load->view('backend/template', $laman);
	}

	public function artikel_hapus($id_artikel){
		$this->login_model->cek_login();
		$this->backend->change_stat($id_artikel);
		$this->session->set_flashdata("success", "Data berhasil dihapus");
		redirect('backend/artikel');
	}

	//slideshow
	public function slideshow_add(){
		$this->login_model->cek_login();

		$laman = [
			'content' => 'backend/slideshow/form',
			'title' => 'Add Slideshow',
			'menu' => 3,
			'form_action' => 'crud/slideshow_add'
		];

		if(!$_POST){
			$laman['input'] = (array) $this->backend->default_slideshow();
		} else {
			$upload = $this->backend->upload_cover('./upload/slideshow/');
		    if($upload['result'] == "success"){ 
		    	$this->backend->insert_slideshow($upload);
		    	$resize = $this->backend->do_resize('img', "./upload/slideshow/".$upload['file']['file_name'], './upload/slideshow/thumbs/');
		        $this->session->set_flashdata('success', 'Data Slideshow berhasil ditambah');
		        redirect('backend/slideshow'); 
		    }else{ 
		    	$laman['input'] = (array) $this->input->post();
		        $this->session->set_flashdata('danger', 'Terjadi kesalahan saat menyimpan data');
		    }
		}

		$this->load->view('backend/template', $laman);
	}

	public function disable_slide($id){
		$this->db->where('id_slideshow', $id)->set('stat', 0)->update('slideshow');
		$this->session->set_flashdata('success','Slideshow di non aktifkan');
		redirect('backend/slideshow');
	}

	public function enable_slide($id){
		$this->db->where('id_slideshow', $id)->set('stat', 1)->update('slideshow');
		$this->session->set_flashdata('success','Slideshow di aktifkan');
		redirect('backend/slideshow');
	}
}

 ?>