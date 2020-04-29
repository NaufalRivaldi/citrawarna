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

	public function import($fileName){
		$tgl_upload = $this->get_setting('last_raw_upload');
		$tgl_update = $this->get_setting('last_raw_update');
		$a = strtotime($tgl_upload['value']);
		$b = strtotime($tgl_update['value']);

		if($a > $b){
			$loc = "upload/raw/$fileName";
			
			require_once("class/excel_reader2.php");
			require_once("class/SpreadsheetReader.php");
			//membaca file csv
			try
            {
                $reader = new SpreadsheetReader($loc);
            }
            catch (Exception $E)
            {
                echo $E -> getMessage();
                die();
            }
			//$reader = new SpreadsheetReader($loc);
			$no = 1;

			//menghapus record sebelumnya
			$del = $this->db->query("TRUNCATE TABLE raw");
			$query = "INSERT INTO raw VALUES";
			$no = 1;
			foreach($reader as $row){
				
				//row[0] = kd_gudang, row[1] = kd_barang dsbnya, looping value setelah query insert diatas
				$kata = $this->db->escape($row[2]);
				$split = str_replace('/','-',$kata);
				$split = str_replace('(',' ',$split);
				$split = str_replace(')',' ',$split);

				$query .= "(NULL,
				'$row[0]', '$row[1]', ".$split.", '$row[3]', 
				'$row[4]', '$row[6]', '$row[7]', '$row[8]', '$row[9]'), ";
			}
			$query = substr($query, 0, -2);
			
			$run =  $this->db->query($query.";");

			if($run){
				$this->db->set('value', date('Y-m-d H:i:s'))->where('param', 'last_raw_update')->update('setting'); 
				$cabang = array(
						"CW1",
						"CW2",
						"CW3",
						"CW4",
						"CW5",
						"CW6",
						"CW7",
						"CW8",
						"CW9",
						"CA0",
						"CA1",
						"CA2",
						"CA3",
						"CA4",
						"CA5",
						"CA6",
						"CA7",
						"CA8",
						"CA9",
						"CL1",
						"CS1",
						"CM1",
						"GUDANG"
					);
				$data_cabang = implode("','", $cabang);
				$delete = $this->db->query("DELETE FROM raw WHERE kd_gudang NOT IN ('$data_cabang') OR nm_barang LIKE '%Tinter%' OR nm_barang LIKE '#%' OR nm_barang LIKE 'HAPUS%'");

				//ganti kd_merk paladin jadi PLDN_G or PLDN_S
				$paladinG = $this->db->set('kd_merk', 'PLDN_G')->where('kd_merk', 'PLDN(G)')->update('raw');
				$paladinS = $this->db->set('kd_merk', 'PLDN_V')->where('kd_merk', 'PLDN(V)')->update('raw');

				if($delete || $paladinG || $paladinS){
					return true;
				} else {
					return false;
				}
			}
			

		}
		
	}
}

 ?>