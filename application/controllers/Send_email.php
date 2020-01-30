<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Send_email extends CI_Controller
{
	public function index(){
		$this->load->library('email');

		if($this->form_validation->run()){

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$no_telp = $this->input->post('no_telp');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			$hal = base_url();
			if($name == "" && $email=="" && $no_telp=="" && $subject=="" && $message==""){
				echo "<script>alert('Harap mengisi semua form yang ada'); location.href='$hal'</script>";
			}

			$this->email->from($email, $name);
			$this->email->to('alangpandu1998@gmail.com');
			$this->email->subject($subject);
			$this->email->message($message . " No Telp Pengirim : " .$no_telp. " - send via contact form www.cwabali.com");

			$send = $this->email->send();
			if($send){
				echo "<script>alert('Pesan anda sudah terkirim dan akan segera kami proses'); location.href='$hal'</script>";
			} 
		} else {
			echo validation_errors();
			
		}
	}
}


 ?>