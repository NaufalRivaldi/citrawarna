<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Product extends CI_Controller 
{
	public function view($kd_merk){
		$data['barang'] = $this->home_model->get_row_barang('kd_merk',$kd_merk);
		$data['raw'] = $this->db->query("SELECT * FROM raw WHERE kd_merk like '$kd_merk' group by nm_barang")->result_array();

		$data['title'] = $data['barang']['nm_barang'];
		$data['keywords'] = $data['barang']['tag'];
		$data['img'] = 'upload/produk/'.$data['barang']['foto'];
		$data['description'] = $data['barang']['deskripsi'];
		$data['detail'] = 0;
		//update jumlah klik pada record
		$this->home_model->updateClick('barang', 'kd_merk', $kd_merk);

		$data['content'] = 'frontend/show_barang';
		$this->load->view('template', $data);
	}

	public function detail($nm_barang){
		//tambahan fungsi kampret gara2 character nama barang aneh2
		if(strpos($nm_barang, "~")){
			$namaBarang = str_replace('~', '"', $nm_barang);
			$namaBarang = strtoupper(str_replace("_", " ", $namaBarang));
		} else {
			$namaBarang = strtoupper(str_replace("_", " ", $nm_barang));
		}

		
		//get 1 row dulu untuk kd_merk	
		$row = $this->home_model->raw($namaBarang)->row_array();

		$data['barang'] = $this->home_model->get_row_barang('kd_merk', $row['kd_merk']);

		$data['raw'] = $this->db->query("SELECT * FROM raw WHERE nm_barang='".$namaBarang. "' AND kd_gudang != 'GUDANG' ")->result_array();

		$data['title'] = $data['barang']['nm_barang'];
		$data['keywords'] = $data['barang']['tag'];
		$data['img'] = 'upload/produk/'.$data['barang']['foto'];
		$data['description'] = $data['barang']['deskripsi'];
		$data['detail'] = 1;
		//update jumlah klik pada record
		$this->home_model->updateClick('barang', 'kd_merk', $row['kd_merk']);

		$data['content'] = 'frontend/show_barang';
		$this->load->view('template', $data);
	}

	public function kategori($kat=null){
		$kat = $this->uri->segment(3);
		$data['title'] = "Produk Kami";
		switch ($kat) {
			case 'all' :
				$data['title'] = 'Semua Produk';
				$data['judul_kat'] = "PRODUK KAMI";
				$data['barangs'] = $this->db->get('barang')->result_array();
				$data['desc_kat'] = $this->db->where('kd_kategori', 44)->get('kat_barang')->row_array();
			break;

			case 'unggulan':
				$data['title'] = 'Produk Unggulan';
				$data['judul_kat'] = "	PRODUK UNGGULAN KAMI";
				$data['barangs'] = $this->home_model->get_barang_unggulan(0);
				$data['desc_kat'] = $this->db->where('kd_kategori', 45)->get('kat_barang')->row_array();	
				break;

			case 'tembok':
				$data['title'] = 'Cat Tembok';
				$data['judul_kat'] = "	PRODUK CAT TEMBOK KAMI";
				$data['barangs'] = $this->db->where('kd_kategori','1')->get('barang')->result_array();
				$data['desc_kat'] = $this->db->where('kd_kategori', 1)->get('kat_barang')->row_array();	
				break;

			case 'kayu_besi':
				$data['title'] = 'Cat Kayu Besi';
				$data['judul_kat'] = "	PRODUK CAT KAYU & BESI ";
				$data['barangs'] = $this->db->where('kd_kategori','2')->get('barang')->result_array();
				$data['desc_kat'] = $this->db->where('kd_kategori', 2)->get('kat_barang')->row_array();;	
				break;

			case 'politur':
				$data['title'] = 'Cat Politur';
				$data['judul_kat'] = "	PRODUK CAT POLITUR ";
				$data['barangs'] = $this->db->where('kd_kategori','8')->get('barang')->result_array();
				$data['desc_kat'] = $this->db->where('kd_kategori', 8)->get('kat_barang')->row_array();;	
				break;

			case 'genteng':
				$data['title'] = 'Cat Genteng';
				$data['judul_kat'] = "	PRODUK CAT POLITUR ";
				$data['barangs'] = $this->db->where('kd_kategori',5)->get('barang')->result_array();
				$data['desc_kat'] = $this->db->where('kd_kategori', 5)->get('kat_barang')->row_array();;	
				break;

			case 'waterproofing':
				$data['title'] = 'Cat Waterproofing';
				$data['judul_kat'] = "	PRODUK CAT POLITUR ";
				$data['barangs'] = $this->db->where('kd_kategori',7)->get('barang')->result_array();
				$data['desc_kat'] = $this->db->where('kd_kategori', 7)->get('kat_barang')->row_array();;	
				break;

			case 'spray':
				$data['title'] = 'Cat Spray';
				$data['judul_kat'] = "	PRODUK CAT SPRAY / SEMPROT ";
				$data['barangs'] = $this->db->where('kd_kategori',31)->get('barang')->result_array();
				$data['desc_kat'] = $this->db->where('kd_kategori', 31)->get('kat_barang')->row_array();;	
				break;
			
			case 'duco':
				$data['title'] = 'Cat Duco';
				$data['judul_kat'] = "CAT DUCO";
				$data['desc_kat'] = $this->db->where('kd_kategori', 3)->get('kat_barang')->row_array();
				$data['barangs'] = $this->db->where('kd_kategori','3')->get('barang')->result_array();
				break;

			case 'batu':
				$data['title'] = 'Cat Batu';
				$data['judul_kat'] = "CAT BATU";
				$data['desc_kat'] = $this->db->where('kd_kategori', 42)->get('kat_barang')->row_array();
				$data['barangs'] = $this->db->where('kd_kategori',42)->get('barang')->result_array();
				break;

			case 'thinner':
				$data['title'] = 'Thinner';
				$data['judul_kat'] = "THINNER";
				$data['desc_kat'] = $this->db->where('kd_kategori', 4)->get('kat_barang')->row_array();
				$data['barangs'] = $this->db->where('kd_kategori',4)->get('barang')->result_array();
				break;
			case 'lain':
				$data['title'] = 'Produk Lain - Lain';
				$data['judul_kat'] = "PRODUK LAIN - LAIN";
				$data['desc_kat'] = $this->db->where('kd_kategori', 43)->get('kat_barang')->row_array();
				$data['barangs'] = $this->db->where('kd_kategori',43)->get('barang')->result_array();
				break;
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

	
}

 ?>