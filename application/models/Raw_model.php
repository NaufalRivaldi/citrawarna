<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Raw_model extends CI_Model
{
	public function get_raw(){
		return $this->db->get('raw')->result();		
	}

	public function upload_csv($path){
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'csv';
		$config['remove_space'] = true;
		$config['overwrite'] = true;
		$config['file_name'] = date('Ymd');

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('csv')){
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      		return $return;
		} else {
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      		return $return;
		}
	}
}

 ?>