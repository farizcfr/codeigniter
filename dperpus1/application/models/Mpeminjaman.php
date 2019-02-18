<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpeminjaman extends CI_Model {


	public function tampil()
	{

		$this->db->select('*');
		$this->db->from('t_peminjaman');
		$this->db->join('t_detailpeminjaman','t_detailpeminjaman.no_pinjam=t_peminjaman.no_pinjam');
		$this->db->join('t_anggota','t_anggota.no_anggota=t_peminjaman.no_anggota');
		$query = $this->db->get();
		return $query->result();
	}
	

	public function buat_kode()
	{
		  $this->db->select('RIGHT(t_peminjaman.no_pinjam,8) as kode', FALSE);
		  $this->db->order_by('no_pinjam','DESC');    
		  $this->db->limit(1); 

		  $query = $this->db->get('t_peminjaman');      //cek dulu apakah ada sudah ada kode di tabel.    
		  
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
		  $kodejadi = "PJ".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
	}

	public function ambil_data_anggota($no_anggota,$nama_anggota)
	{
		$this->db->select('no_anggota,nama_anggota');
		$this->db->from('t_anggota');
		$this->db->where('no_anggota',$no_anggota);
		$this->db->where('nama_anggota',$nama_anggota);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows == 1) {
			return $query->result(); 
		}else{
			return FALSE;
		}

	}

	public function ambil_data_pinjam($no_pinjam,$id_user)
	{
		$this->db->select('no_pinjam,id_user');
		$this->db->from('t_peminjaman');
		$this->db->where('no_pinjam',$no_pinjam);
		$this->db->where('id_user',$id_user);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows == 1) {
			return $query->result(); 
		}else{
			return FALSE;
		}

	}
}