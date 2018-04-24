<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Login_model extends CI_Model
{

	public function login($username, $password){
		return $this->db->where("username", $username)
						->where("password", $password)
						->where("stat", 1)
						->get('user')
						->row_array();
	}

	public function login_gagal($username, $password){
		$user = $this->db->where('username', $username)->get('user')->result_array();
		if($user){
			$data = array(
				'id' => null,
				'username' => $username,
				'password' => $password,
				'ip' => $_SERVER['REMOTE_ADDR'],
				'waktu' => date('Y-m-d H:i:s')
			);
			return $this->db->insert('login_log', $data);
		}
		
	}

	public function cek_gagal($username){
		$q = $this->db->where('username', $username)->get('login_log')->result_array();
		return count($q);
	}

	public function change_stat($username){
		return $this->db->where('username', $username)->set('stat', 0)->update('user');
	}

	public function reset_gagal($username){
		return $this->db->where('username', $username)->delete('login_log');
	}

	public function cek_login(){
		$login = $this->session->userdata('username');
		if(!$login){
			$this->session->set_flashdata('danger', 'Harap login terlebih dahulu!');
			redirect('backend');
		}
	}
}

 ?>