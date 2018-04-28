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
		if($_POST){
			$upload = $this->raw_model->upload_csv('./upload/raw/');
			if($upload['result'] == "success"){ 
				//print_r($upload['file']['file_name']);
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';

				$csv_reader = PHPExcel_IOFactory::createReader('CSV');
				$load_csv = $csv_reader->load('upload/raw/'.$upload['file']['file_name']);
				$sheet = $load_csv->getActiveSheet()->getRowIterator();
				$data['sheet'] = $sheet;
			} else {
				echo "<script>alert('Upload data gagal')</script>";
			}
		}
		
		$this->load->view('backend/template', $data);
	}
}

 ?>