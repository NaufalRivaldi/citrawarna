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
		$data['raw'] = $this->db->query('SELECT distinct kd_barang, nm_barang,harga FROM raw WHERE kd_merk = "WLDN"')->result_array();
		
		$this->load->view('backend/template', $data);
	}

	

	public function update(){
		//$this->raw_model->update();
		$file = $this->raw_model->get_setting('last_raw_upload');
		$nmFile = $file['value'];
		$change1 = str_replace("-", "", $nmFile);
		$change2 = str_replace(" ", "", $change1);
		$change3 = str_replace(":", "", $change2);
		$newName = $change3.".csv";
		
		$import = $this->raw_model->import($newName);

		if($import){
			$this->session->set_flashdata('success', 'Berhasil Update Raw Data');
			$this->raw_model->flush();
			redirect('raw');
		} else {
			$this->session->set_flashdata('danger', 'Gagal Update Raw Data');
			redirect('raw');
		}
	}


}

 ?>