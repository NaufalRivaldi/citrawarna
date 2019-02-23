<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Crud extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('backend_model', 'backend');
		$this->login_model->cek_login();
	}

	public function index(){
		redirect('backend/artikel');
	}

	//artikel
	public function artikel_add(){
		$laman = [
			'content' => 'backend/artikel/form',
			'title' => 'Add Artikel',
			'menu' => 2,
			'form_action' => 'crud/artikel_add'
		];
		
		if(!$_POST){
			//jika input pada form kosong 
			$laman['input'] = (array) $this->backend->defaultArtikel();
		} else {
			//jika tombol di klik 

			
      		$upload = $this->backend->upload_cover('./upload/artikel/', 'img');
		    if($upload['result'] == "success"){ 
		    	$this->backend->insert_artikel($upload);
		    	$resize = $this->backend->do_resize('img', "./upload/artikel/".$upload['file']['file_name'],'./upload/artikel/thumbs/');
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
		$laman = [
			'content' => 'backend/artikel/form',
			'title' => 'Edit Artikel',
			'menu' => 2,
			'form_action' => 'crud/artikel_edit/'.$id_artikel
		];

		$laman['input'] = $this->backend->row_artikel($id_artikel);
		if($_POST){
			$upload = $this->backend->upload_cover('./upload/artikel/', 'img');
			//kalau ada gambar cover dirubah
			if($upload['result'] == "success"){ 
		    	$this->backend->update_artikel($id_artikel, $upload);
		    	$resize = $this->backend->do_resize('img', "./upload/artikel/".$upload['file']['file_name'],'./upload/artikel/thumbs/');
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
		$this->backend->change_stat($id_artikel);
		$this->session->set_flashdata("success", "Data berhasil dihapus");
		redirect('backend/artikel');
	}

	//slideshow
	public function slideshow_add(){

		$laman = [
			'content' => 'backend/slideshow/form',
			'title' => 'Add Slideshow',
			'menu' => 3,
			'form_action' => 'crud/slideshow_add'
		];

		if(!$_POST){
			$laman['input'] = (array) $this->backend->default_slideshow();
		} else {
			
			$upload = $this->backend->upload_cover('./upload/slideshow/', 'img');
		    if($upload['result'] == "success"){ 
				//disable all record
				$this->db->set('stat', 0)->where('stat', 1)->update('slideshow');
				//insert to db
				$this->backend->insert_slideshow($upload);
				//resize
		    	$resize = $this->backend->do_resize('img', "./upload/slideshow/".$upload['file']['file_name'], './upload/slideshow/thumbs/');
				//get last id for active
				$last_id = $this->db->query('SELECT count(id_slideshow) as id from slideshow ')->row();
				//update active to last upload
				$set_active = $this->db->set('stat', 1)->where('id_slideshow', $last_id->id)->update('slideshow');
				$this->session->set_flashdata('success', 'Data Slideshow berhasil ditambah');
		        redirect('backend/slideshow'); 
		    }else{ 
		    	$laman['input'] = (array) $this->input->post();
		        $this->session->set_flashdata('danger', 'Terjadi kesalahan saat menyimpan data');
		    }
		}

		$this->load->view('backend/template', $laman);
	}

	public function hapus_slideshow(){
		$id = $this->input->post('id_slideshow');
		$slideshow = $this->db->where('id_slideshow', $id)->get('slideshow')->row();
		$old_pict = 'upload/slideshow/'. $slideshow->img;
		$old_thumb = 'upload/slideshow/thumbs/'. $slideshow->img;
		echo $old_pict;
		
		unlink($old_pict);
		unlink($old_thumb);

		$this->db->where('id_slideshow', $id)->delete('slideshow');
		$this->session->set_flashdata('success', 'Hapus data berhasil');
		redirect('backend/slideshow'); 
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


	//barang
	public function barang_add(){
		$laman = [
			'content' => 'backend/barang/form',
			'title' => 'Add barang',
			'menu' => 4,
			'form_action' => 'crud/barang_add'
		];

		if(!$_POST){
			$laman['input'] = (array) $this->backend->defaultBarang();
		} else {
      		$upload = $this->backend->upload_cover('./upload/produk/', 'foto');
		    if($upload['result'] == "success"){ 
		    	$this->backend->insert_barang($upload);
		    	$fileName = explode(".", $upload['file']['file_name']);

		    	if($fileName[1] == "png"){
		    		$convert = $this->backend->convert_image("./upload/produk/".$upload['file']['file_name']);
		    		$resize = $this->backend->do_resize('foto', "./upload/produk/".$fileName[0].".jpg", './upload/produk/thumbs/');
		    	}
		   
		    	$resize = $this->backend->do_resize('foto', "./upload/produk/".$upload['file']['file_name'], './upload/produk/thumbs/');
		        //print_r($upload['file']['file_name']);

		        $this->session->set_flashdata('success', 'Data barang berhasil ditambah');
		        redirect('backend/barang'); 
		    }else{ 
		    	$laman['input'] = (array) $this->input->post();
		        $this->session->set_flashdata('danger', 'Terjadi kesalahan saat menyimpan data');
		    }
		}

		$this->load->view('backend/template', $laman);
	}

	public function barang_edit($id_barang){
		$laman = [
			'content' => 'backend/barang/form',
			'title' => 'Edit Barang',
			'menu' => 4,
			'form_action' => 'crud/barang_edit/'.$id_barang
		];
		$laman['input'] = $this->backend->row_barang($id_barang);

		$this->load->view('backend/template', $laman);
		if($_POST){
			$upload = $this->backend->upload_cover("./upload/produk/", 'foto');
			//kalau ada gambar cover dirubah
			if($upload['result'] == "success"){ 
		    	$this->backend->update_barang($id_barang, $upload);
		    	$fileName = explode(".", $upload['file']['file_name']);
		    	
		    	if($fileName[1] == "png"){
		    		$convert = $this->backend->convert_image("./upload/produk/".$upload['file']['file_name']);
		    		$resize = $this->backend->do_resize('foto', "./upload/produk/".$fileName[0].".jpg", './upload/produk/thumbs/');
		    	}
		    	$resize = $this->backend->do_resize('foto', "./upload/produk/".$upload['file']['file_name'],'./upload/produk/thumbs/');
		        $this->session->set_flashdata('success', 'Data barang berhasil diedit');
		        redirect('backend/barang'); 
		    }else{
		    	$data = $this->input->post();
		    	$this->backend->update_barang_without_image($id_barang, $data); 
		        $this->session->set_flashdata('success', 'Data barang berhasil diedit');
		        redirect('backend/barang');  
		    }
		}
	}

	public function barang_delete($id_barang){
		$del = $this->backend->changeStatBarang($id_barang);
		if($del) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
			redirect('backend/barang');
		}
	}


	public function cabang_add(){
		$laman = [
			'content' => 'backend/cabang/form',
			'title' => 'Add cabang',
			'menu' => 4,
			'form_action' => 'crud/cabang_add'
		];

		if(!$_POST){
			$laman['input'] = (array) $this->backend->defaultCabang();
		} else {
      		$laman['input'] = (array) $this->input->post();
      		$this->db->insert('cabang', $laman['input']);
      		$this->session->set_flashdata('success', 'Data berhasil ditambah');
      		redirect('backend/cabang');
		}



		$this->load->view('backend/template', $laman);
	}

	public function cabang_edit($id = null){
		$laman = [
			'content' => 'backend/cabang/edit',
			'title' => 'edit cabang',
			'menu' => 4,
			'form_action' => 'crud/cabang_edit/'.$id,
			'data' => $this->backend->get_cabang_id($id)
		];

		if(!$_POST){
			$laman['input'] = (array) $this->backend->defaultCabang();
		} else {
      		$laman['input'] = (array) $this->input->post();
      		$this->db->where('id_cabang', $id)->update('cabang', $laman['input']);
      		$this->session->set_flashdata('success', 'Data berhasil diedit');
      		redirect('backend/cabang');
		}

		$this->load->view('backend/template', $laman);
	}

	public function cabang_delete($id){
		$this->db->set('stat', 0)->where('id_cabang', $id)->update('cabang');
		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect('backend/cabang');
	}

	public function detail_add(){
		$laman = [
			'content' => 'backend/barang/form_detail',
			'title' => 'Add Detail Barang',
			'menu' => 7,
			'form_action' => 'crud/detail_add'
		];

		if(!$_POST){
			$laman['input'] = (array) $this->backend->defaultDetail();
		} else {
			$laman['input'] = (array) $this->input->post();
			$laman['input']['cc'] = $_FILES['cc']['name'];
			$this->backend->upload_cover('./upload/cc/', 'cc');
			$this->db->insert('detail_barang', $laman['input']);
			$this->session->set_flashdata('success', 'Data berhasil ditambah');
			redirect('backend/detail_barang');
		}

		$this->load->view('backend/template', $laman);

	}

	public function detail_edit($param){
		$laman = [
			'content' => 'backend/barang/form_detail',
			'title' => 'Edit Detail Barang',
			'menu' => 7,
			'form_action' => 'crud/detail_edit/'.$param
		];

		if(!$_POST){
			$laman['input'] = $this->db->where('kd_merk', $param)->get('detail_barang')->row_array();
		} else {
			$laman['input'] = (array) $this->input->post();
			$laman['input']['cc'] = $_FILES['cc']['name'];
			if ($laman['input']['cc'] == ''){
				//kalau edit ga pake foto, jadi nama foto nya yg lama ga ilang
				$data = $this->db->where('kd_merk', $param)->get('detail_barang')->row_array();
				$laman['input']['cc'] = $data['cc'];
			} else {
				//kalo edit pake foto
				$laman['input']['cc'] = $_FILES['cc']['name'];
				$this->backend->upload_cover('./upload/cc/', 'cc');
			}
			$this->db->where('kd_merk', $param)->update('detail_barang', $laman['input']);
			$this->session->set_flashdata('success', 'Data berhasil diedit');
			redirect('backend/detail_barang');
		}

		$this->load->view('backend/template', $laman);
	}

	public function detail_delete($param){
		$this->db->where('kd_merk', $param)->set('stat', 0)->update('detail_barang');
		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect('backend/detail_barang');
	}

	public function search_produk(){
		$get = $this->input->get('data');
		$data = $this->db->like('nm_barang', $get)
							->or_like('kd_merk', $get)
							->get('barang')->result_array();
		$output = "<ul class='merk-ul'>";
		if($data){
			foreach($data as $row){
				$output .= "<li class='merk-li'>".$row['kd_merk']. " - ". $row['nm_barang'] ."</li>";
			}
		} else {
			$output .= "<li class='merk-li'>Tidak ada data</li>";
		}

		echo $output;
	}

	
}

 ?>