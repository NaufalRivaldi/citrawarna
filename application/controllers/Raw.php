<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Raw extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->login_model->cek_login();
		$this->load->model('raw_model');
	}

	public function index(){
		$data['menu'] = 5;
		$data['content'] = 'backend/raw_data';
		$data['title'] = 'Upload Raw Data';
		$data['get_last_upload'] = $this->raw_model->get_setting('last_raw_upload');
		$data['get_last_update'] = $this->raw_model->get_setting('last_raw_update');
		if($_POST){
			$upload = $this->raw_model->upload_csv('./upload/raw/');
			if($upload['result'] == "success"){ 
				$this->raw_model->updateLastUpload();
				echo "<script>alert('Berhasil mengupload raw data'); location.href ='raw'; </script>";
				
			} else {
				echo "<script>alert('Upload data gagal')</script>";
			}
		}
		
		$this->load->view('backend/template', $data);
	}

	public function flush(){
		$this->raw_model->flush();
		$this->session->set_flashdata('success','Berhasil menghapus old raw');
		redirect('raw');
	}


}

 ?>