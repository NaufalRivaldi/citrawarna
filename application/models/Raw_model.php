<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Raw_model extends CI_Model
{
	public function get_setting($param){
		return $this->db->where('param', $param)->get('setting')->row_array();
	}

	public function get_raw(){
		return $this->db->get('raw')->result();		
	}

	public function upload_csv($path){
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'csv';
		$config['remove_space'] = true;
		$config['overwrite'] = true;
		$config['max_size'] = 5000;
		$config['file_name'] = date('YmdHis');

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('csv')){
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      		return $return;
		} else {
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      		return $return;
		}
	}

	public function updateLastUpload(){
		$now = date('Y-m-d H:i:s');
		$this->db->set("value", $now)->where("param", "last_raw_upload")->update('setting');
	}

	public function flush(){
		$tgl_upload = $this->get_setting('last_raw_upload');
		$tgl_update = $this->get_setting('last_raw_update');
		$a = strtotime($tgl_upload['value']);
		$b = strtotime($tgl_update['value']);

		if($a < $b){
			$tglupl = $this->raw_model->get_setting('last_raw_upload');
			$change1 = str_replace("-", "", $tglupl['value']);
			$change2 = str_replace(" ", "", $change1);
			$change3 = str_replace(":", "", $change2);
			$newName = $change3.".csv";
			
			if(is_file("upload/raw/$newName")){
				unlink("upload/raw/$newName");

			}
		}
	}

	public function import($fileName, $field){

		$reader = new PhpOffice\PhpSpreadsheet\Reader\Csv();
		$spreadsheet = $reader->load('upload/raw/'.$fileName);
		$worksheet = $spreadsheet->getActiveSheet();
		$highestRow = $worksheet->getHighestRow(); // e.g. 10
		$highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
		$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
		
		$query = "insert into raws values('', ";

		$iterator = 0;
		foreach ($worksheet->getRowIterator() as $row) {
		    $cellIterator = $row->getCellIterator();
		    $cellIterator->setIterateOnlyExistingCells(true);
		    foreach ($cellIterator as $cell) {
		    	$val = $cell->getValue();
		        if ($iterator > $field) {
		        	if ($iterator % $field === 0) {
		        		$query .= "'$val')";
		        		$this->db->query($query);
						$query = "insert into raws values('',";
		        	}else{
	        			$query .= " '$val',";
		        		
		        	}
		        }
		        $iterator++;
		    }
		}
	}
}

 ?>