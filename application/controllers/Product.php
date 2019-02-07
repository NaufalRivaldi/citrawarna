<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Product extends CI_Controller 
{
	public function view($kd_merk){
		$data['barang'] = $this->home_model->get_row_barang('kd_merk',$kd_merk);
		$data['location'] = '';
		if(isset($_GET['location'])){
			$get = $this->input->get();
			$location = $get["location"];
			$data['location'] = $location;

			// switch location -> tambah jika ada cabang baru ya..
			switch ($location) {
				case 'bali':
					$data['raw'] = $this->db->query("SELECT * FROM raw WHERE kd_merk LIKE '$kd_merk' AND kd_gudang NOT IN (SELECT kd_gudang FROM raw WHERE kd_gudang LIKE '%CL%') AND harga != 0 GROUP BY nm_barang")->result_array();
					break;

				case 'lombok':
					$data['raw'] = $this->db->query("SELECT * FROM raw WHERE kd_merk like '$kd_merk' and harga != 0 and kd_gudang like '%CL%' group by nm_barang")->result_array();
					break;
				
				default:
					# code...
					break;
			}
		}else{
			$data['raw'] = $this->db->query("SELECT * FROM raw WHERE kd_merk like 'default' and harga != 0 group by nm_barang")->result_array(); 
		}

		$data['title'] = $data['barang']['nm_barang'];
		$data['keywords'] = $data['barang']['tag'];
		$data['img'] = 'upload/produk/'.$data['barang']['foto'];
		$data['description'] = $data['barang']['deskripsi'];
		$data['detail'] = 0;
		$data['teknis'] = $this->db->where('kd_merk', $kd_merk)->get('detail_barang');
		$data['kd_merk'] = $kd_merk;
		//update jumlah klik pada record
		$this->home_model->updateClick('barang', 'kd_merk', $kd_merk);

		$data['content'] = 'frontend/show_barang';
		$this->load->view('template', $data);
	}

	public function detail($nm_barang, $location){
		//tambahan fungsi kampret gara2 character nama barang aneh2
		if(strpos($nm_barang, "~")){
			$namaBarang = str_replace('~', '"', $nm_barang);
			$namaBarang = strtoupper(str_replace("_", " ", $namaBarang));
		} else if(strpos($nm_barang, "%3Cplamir%3E")){
			//plamir sompret kenapa mesti ada karakter aneh lagi sih
			$namaBarang = str_replace("%3Cplamir%3E", "(plamir)", $nm_barang);
			$namaBarang = strtoupper(str_replace("_", " ", $namaBarang));
		} else if(strpos($nm_barang,'%5E')){
			$namaBarang = str_replace("%5E", "/", $nm_barang);
			$namaBarang = strtoupper(str_replace("_", " ", $namaBarang));
		} else {
			$namaBarang = strtoupper(str_replace("_", " ", $nm_barang));
		}

		
		//get 1 row dulu untuk kd_merk	
		$row = $this->home_model->raw($namaBarang)->row_array();

		$data['barang'] = $this->home_model->get_row_barang('kd_merk', $row['kd_merk']);

		switch ($location) {
			case 'bali':
				$query = $this->db->query("SELECT * FROM raw WHERE nm_barang='".$namaBarang. "' AND kd_gudang != 'GUDANG' AND kd_gudang NOT like '%CL%' ");
				break;

			case 'lombok':
				$query = $this->db->query("SELECT * FROM raw WHERE nm_barang='".$namaBarang. "' AND kd_gudang != 'GUDANG' AND kd_gudang like '%CL%' ");
				break;
			
			default:
				# code...
				break;
		}
		$data['raw'] = $query->result_array();

		$data['title'] = $data['barang']['nm_barang'];
		$data['keywords'] = $data['barang']['tag'];
		$data['img'] = 'upload/produk/'.$data['barang']['foto'];
		$data['description'] = $data['barang']['deskripsi'];
		$data['detail'] = 1;
		//data teknis

		$select_kode_barang = $query->row_array();

		$data['teknis'] = $this->db->where('kd_merk', $select_kode_barang['kd_merk'])->where('stat', 1)->get('detail_barang');
		//update jumlah klik pada record
		$this->home_model->updateClick('barang', 'kd_merk', $row['kd_merk']);

		$data['content'] = 'frontend/show_barang';
		$this->load->view('template', $data);
	}

	public function kategori($kat=null){
		
		$kat = $this->uri->segment(3);
		$data['title'] = "Produk Kami";

		if($kat){
			$kategori = $this->db->where('kd_kategori', $kat)->get('kat_barang')->row_array();
			$data['judul_kat'] = $kategori['desk_kategori'];
			$data['title'] = $kategori['desk_kategori'];
			$data['barangs'] = $this->home_model->get_list_barang($kat);
			$data['desc_kat'] = $this->db->where('kd_kategori', $kat)->get('kat_barang')->row_array();
			//kalau semua produk (44 adalah kd_kategori)
			if($kat == 44){
				$data['barangs'] = $this->home_model->get_all_barang($kat);
				$data['desc_kat'] = $this->db->where('kd_kategori', 44)->get('kat_barang')->row_array();
			} else if($kat == 45){
				$data['barangs'] = $this->home_model->get_barang_unggulan(0);
				$data['desc_kat'] = $this->db->where('kd_kategori', 45)->get('kat_barang')->row_array();
			}
		}

		if(isset($kat)){
			$data['content'] = 'frontend/index_kategori';
		} else {
			$data['content'] = 'frontend/list_kategori';
		}
		
		$data['keywords'] = "citra warna, produk unggulan, toko cat citra warna";
		$data['description'] = "Produk unggulan kami adalah produk yang berkualitas dengan harga yang sangat kompetitif ";
		$data['img'] = 'assets/img/cwa_banner.jpg';
		$this->load->view('template', $data);
	}

	public function search(){
		$post = $this->input->get();
		$keyword = $post['search'];

		$data['title'] = "Produk Kami";

		if($keyword){
			$data['judul_kat'] = 'Cari Produk : '.$keyword;
			$data['title'] = 'Cari Barang';
			$data['barangs'] = $this->home_model->get_search_barang($keyword);
		}
		
		$data['content'] = 'frontend/index_search';
		$data['keywords'] = "";
		$data['description'] = " ";
		$data['img'] = 'assets/img/cwa_banner.jpg';
		$this->load->view('template', $data);
	}

	
}

 ?>