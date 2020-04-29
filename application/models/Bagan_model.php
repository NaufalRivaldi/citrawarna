<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Bagan_model extends CI_Model
{
    public $bagan="default.jpg";

    public function validation(){
        return [
            [
                'field' => 'bagan',
                'label' => 'bagan',
                'rules' => 'required'
            ]
        ];
    }

	public function getData(){
		return $this->db->order_by('id', 'desc')->get('bagan')->result();
    }

    public function getBagan()
    {
        return $this->db->order_by('id', 'desc')->get('bagan')->row();
    }
    
    public function save(){
        $post = $this->input->post();
        // print_r($post);
        $this->bagan = $this->_uploadImage();
        
        return $this->db->insert('bagan', $this);
    }

    public function delete($id){
        return $this->db->where('id', $id)->delete('testimoni');
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/bagan/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']			= true;
        $config['max_size']             = 5120; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('bagan')) {
            return $this->upload->data('file_name');
        }
        
        $this->session->set_flashdata('danger', 'Tidak ada file yang diupload!');
		redirect('admin/bagan/');
    }
}

 ?>