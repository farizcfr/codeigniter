 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpendaftaran extends CI_Model {


	public function tampil()
	{
		$query = $this->db->get("t_pendaftaran");
        return $query->result(); 
	}

		public function buat_kode()
	{
		  $this->db->select('RIGHT(t_pendaftaran.no_pendaftaran,8) as kode', FALSE);
		  $this->db->order_by('no_pendaftaran','DESC');    
		  $this->db->limit(1); 

		  $query = $this->db->get('t_pendaftaran');      //cek dulu apakah ada sudah ada kode di tabel.    
		  
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode)+1;    
		  }
		  else 
		  {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 8, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "DF".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
	}



}