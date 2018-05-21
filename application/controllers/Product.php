<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Product extends CI_Controller 
{
	public function view($kd_merk){
		$data['barang'] = $this->home_model->get_row_barang('kd_merk',$kd_merk);
		$data['raw'] = $this->db->query("SELECT * FROM raw WHERE kd_merk like '$kd_merk' and harga != 0 group by nm_barang")->result_array();

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

	
}

 ?>