<?php defined('BASEPATH') or exit('No Direct script access allowed!');

class Home_model extends CI_Model 
{
	public function get_home_artikel($per_halaman, $offset){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
						->order_by('tanggal', 'desc')
						->where('stat', 1)
						->limit($per_halaman, $offset)
						->get('artikel')->result_array();
	}
	public function get_new_artikel($limit){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
						->order_by('tanggal', 'desc')
						->where('stat', 1)
						->get('artikel',$limit)->result_array();
	}
	public function get_popular_artikel(){
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')
						->order_by('click', 'desc')
						->where('stat', 1)
						->get('artikel',3)->result_array();
	}

	public function get_random_artikel($limit){
		return $this->db->query("SELECT * FROM artikel INNER JOIN kategori on kategori.id_kategori = artikel.id_kategori order by rand() LIMIT $limit")->result_array();
	}

	public function get_cabang(){
		return $this->db->where('stat', 1)->get('cabang')->result_array();
	}

	public function get_cabang_by_lokasiId($lokasiId)
	{
		return $this->db->where('lokasiId', $lokasiId)->get('cabang')->result();
	}

	public function get_totalStore(){
		return $this->db->count_all('cabang');
	}

	public function getLast_cabang(){
		return $this->db->limit(1)->order_by('id_cabang', 'DESC')->where('stat', 1)->get('cabang')->row();
	}

	public function get_setting($param){
		return $this->db->where('param', $param)->get('setting')->row_array();
	}

	public function get_barang_unggulan($limit=null){
		return $this->db->join('kat_barang', 'kat_barang.kd_kategori = barang.kd_kategori')->where('stat', 1)->where('unggulan', 'y')->get('barang', $limit)->result_array();
	}

	public function updateClick($tbl,$field,$value){
		$query = $this->db->query("UPDATE $tbl SET click = click + 1 WHERE $field = '$value' ");
		return $query;
	}

	public function get_row_barang($field, $kd_merk){
		return $this->db->join('kat_barang', 'barang.kd_kategori = kat_barang.kd_kategori')
									->join('jenis', 'jenis.kd_jenis = barang.kd_jenis', 'left')
									->where($field, $kd_merk)->get('barang')->row_array();
	}

	public function raw($nm_barang){
		return $this->db->where('nm_barang', $nm_barang)->get('raw');
	}

	public function get_list_barang($kat){
		return $this->db->join('kat_barang', 'kat_barang.kd_kategori = barang.kd_kategori')->where('barang.kd_kategori', $kat)->get('barang')->result_array();
	}

	public function get_search_barang($key){
		return $this->db->join('kat_barang', 'kat_barang.kd_kategori = barang.kd_kategori')->like('barang.nm_barang', $key)->get('barang')->result_array();
	}

	public function get_all_barang($kat){
		return $this->db->join('kat_barang', 'kat_barang.kd_kategori = barang.kd_kategori')->get('barang')->result_array();
	}


	public function pagination_artikel($totRows){
		$config['base_url'] = base_url('artikel/');
		$config['total_rows'] = $totRows;
		$config['per_page'] = 6;
		$config['use_page_numbers'] = true;

		$config['num_tag_open'] = "<li class='page-item'><div class='my-page-link'>";
		$config['num_tag_close'] = "</div></li>";
		$config['cur_tag_open'] = "<li class='page-item active'><div class='my-page-link'>";
		$config['cur_tag_close'] = "</div></li>";
		$config['next_tag_open'] = "<li class='page-item'><div class='my-page-link'>";
		$config['next_tag_close'] = "</div></li>";
		$config['prev_tag_open'] = "<li class='page-item'><div class='my-page-link'>";
		$config['prev_tag_close'] = "</div></li>";
		$config['last_tag_open'] = "<li class='page-item'><div class='my-page-link'>";
		$config['last_tag_close'] = "</div></li>";
		$config['first_tag_open'] = "<li class='page-item'><div class='my-page-link'>";
		$config['first_tag_close'] = "</div></li>";


		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
//kalau cabang nambah, tulis disini 
	public function cabang_name($cbg){
		$lokasi = '';
		switch ($cbg) {
			case 'CW1':
				$lokasi = " Citra Warna Imam Bonjol 1";
				break;
			case 'CW2':
				$lokasi = " Citra Warna Imam Bonjol 2";
				break;
			case 'CW3':
				$lokasi = " Citra Warna Buluh Indah";
				break;
			case 'CW4':
				$lokasi = " Citra Warna Canggu";
				break;
			case 'CW5':
				$lokasi = " Citra Warna Teuku Umar";
				break;
			case 'CW6' : 
				$lokasi = " Citra Warna Sunset Road";
				break;
			case 'CW7' : 
				$lokasi = " Citra Warna Gatot Subroto  ";
				break;
			case 'CW8' : 
				$lokasi = " Citra Warna Ubud ";
				break;
			case 'CW9' : 
				$lokasi = " Citra Warna Mumbul Nusa Dua ";
				break;
			case 'CA0' : 
				$lokasi = " Citra Warna Mahendradata ";
				break;
			case 'CA1' : 
				$lokasi = " Citra Warna Semabaung Gianyar  ";
				break;
			case 'CA2' : 
				$lokasi = " Citra Warna Kediri Tabanan";
				break;
			case 'CA3' : 
				$lokasi = " Citra Warna Panjer";
				break;
			case 'CA4' : 
				$lokasi = " Citra Warna Dalung";
				break;
			case 'CA5' : 
				$lokasi = " Citra Warna Singaraja";
				break;
			case 'CA6' :
				$lokasi = " Citra Warna Tibubeneng Canggu";
				break;
			case 'CA7' :
				$lokasi = " Citra Warna WR Supratman ";
				break;
			case 'CA8' :
				$lokasi = " Citra Warna Waturenggong ";
				break;
			case 'CA9' :
				$lokasi = " Citra Warna Ahmad Yani";
				break;
			case 'CB0' :
				$lokasi = " Citra Warna Hayam Wuruk";
				break;
			case 'CB1' :
				$lokasi = " Citra Warna Dalung 2";
				break;
			case 'CM1' :
				$lokasi = " Citra Warna Palembang - Kalidoni";
				break;
			case 'CM2' :
				$lokasi = " Citra Warna Palembang - Plaju";
				break;
			case 'CM3' :
				$lokasi = " Citra Warna Palembang - Sekip";
				break;
			case 'CM4' :
				$lokasi = " Citra Warna Palembang - Dempo";
				break;
			case 'CL1' :
				$lokasi = " Citra Warna Mataram - Lombok ";
				break;
			case 'CS1' :
				$lokasi = " Citra Warna Makassar - Tamanlanrea";
				break;
			case 'CS2' :
				$lokasi = " Citra Warna Makassar - Manggala";
				break;
			case 'CS3' :
				$lokasi = " Citra Warna Hasanuddin Gowa";
				break;
			default : 
				$lokasi = "undefined";
				break;
		}
		return $lokasi;
	}


	public function get_kategori(){
		return $this->db->get('kategori')->result_array();
	}

	public function emailValidation() {
    $validationRules = [
      [
        'field' => 'name',
        'label' => 'name',
        'rules' => 'required'
      ],
      [
      	'field' => 'email',
      	'label' => 'email',
      	'rules' => 'required'
      ],
      [
      	'field' => 'no_telp',
      	'label' => 'no_telp',
      	'rules' => 'required'
      ],
      [
      	'field' => 'subject',
      	'label' => 'subject',
      	'rules' => 'required'
      ],
      [
      	'field' => 'message',
      	'label' => 'message',
      	'rules' => 'required'
      ],
      
    ];
    return $validationRules;
  }


 


}

 ?>