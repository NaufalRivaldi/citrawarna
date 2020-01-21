<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Lowongan_model extends CI_Model
{
    public $tgl;
    public $judul;
    public $deskripsi;

    public function validation(){
        $validationRules = [
            [
                'field' => 'judul',
                'label' => 'judul',
                'rules' => 'required'
            ],
            [
                'field' => 'deskripsi',
                'label' => 'deskripsi',
                'rules' => 'required'
            ],
          ];
          return $validationRules;
    }

	public function getData(){
		return $this->db->order_by('id', 'desc')->get('lowongan')->result();
    }
    
    public function save(){
        $post = $this->input->post();
        $this->tgl = date('Y-m-d');
        $this->judul = $post['judul'];
        $this->deskripsi = $post['deskripsi'];
        
        return $this->db->insert('lowongan', $this);
    }

    public function delete($id){
        return $this->db->where('id', $id)->delete('lowongan');
    }
}

 ?>