<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mautoa extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}


	public function buat_kode()
	{
		  $this->db->select('RIGHT(t_anggota.no_anggota,8) as kode', FALSE);
		  $this->db->order_by('no_anggota','DESC');    
		  $this->db->limit(1); 

		  $query = $this->db->get('t_anggota');      //cek dulu apakah ada sudah ada kode di tabel.    
		  
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
		  $kodejadi = "18".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
	}
}