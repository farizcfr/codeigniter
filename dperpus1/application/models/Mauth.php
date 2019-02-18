<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mauth extends CI_Model {

	

	public function register_daftar($data)
	{
		return $this->db->insert('t_pendaftaran',$data);
		
	} 

	public function buat_akun($data)
	{
		 return $this->db->insert('t_user',$data);
	}

	public $table = 't_user';

	public function cek_login($username, $password)
	{
		$this->db->where('username', $username);

		$query = $this->db->get($this->table)->row();

		if (!$query) return 1;
		
		if($query->status == 0) return 2;

		$hash = $query->password;
		if(md5($password) != $hash) return 3;
		
		return $query;

	}

	public function buat_kode()
	{
		  $this->db->select('RIGHT(t_pendaftaran.no_pendaftaran,7) as kode', FALSE);
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
		  $kodemax = str_pad($kode, 7, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "DF-".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
	}
}

	
