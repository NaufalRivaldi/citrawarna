<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Testimoni_model extends CI_Model
{
    public $nama;
    public $email;
    public $bintang;
    public $keterangan;

    public function validation(){
        $validationRules = [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],
            [
                'field' => 'bintang',
                'label' => 'bintang',
                'rules' => 'required'
            ],
          ];
          return $validationRules;
    }

	public function getData(){
		return $this->db->order_by('id', 'desc')->get('testimoni')->result();
    }
    
    public function save(){
        $post = $this->input->post();
        $this->nama = $post['nama'];
        $this->email = $post['email'];
        $this->bintang = $post['bintang'];
        $this->keterangan = $post['keterangan'];
        
        return $this->db->insert('testimoni', $this);
    }

    public function delete($id){
        return $this->db->where('id', $id)->delete('testimoni');
    }
}

 ?>