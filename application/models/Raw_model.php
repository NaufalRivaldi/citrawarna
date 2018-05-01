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
}

 ?>