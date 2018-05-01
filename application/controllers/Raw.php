<?php defined('BASEPATH') or exit('No direct script access allowed!');

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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

	public function update(){
		//$this->raw_model->update();
		$file = $this->raw_model->get_setting('last_raw_upload');
		$nmFile = $file['value'];
		$change1 = str_replace("-", "", $nmFile);
		$change2 = str_replace(" ", "", $change1);
		$change3 = str_replace(":", "", $change2);
		$newName = $change3.".csv";

		
		$reader = new PhpOffice\PhpSpreadsheet\Reader\Csv();
		$spreadsheet = $reader->load('upload/raw/'.$newName);
		$worksheet = $spreadsheet->getActiveSheet();
		$highestRow = $worksheet->getHighestRow(); // e.g. 10
		$highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
		$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
		echo '<table border="1">';
		for ($row = 1; $row <= $highestRow; ++$row) {
		    echo '<tr>';
		    for ($col = 1; $col <= $highestColumnIndex; ++$col) {
		        $value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
		        echo "<td>$value</td>";
		        // $ins =   "'".$value. "',";
		        // echo $ins;
		        //$this->db->query("INSERT INTO raw (id, nis, nama, jk, telp, alamat) VALUES(null,$ins  )");
		  
		    }
		    echo '</tr>';
		}
		echo '</table>';
	}


}

 ?>