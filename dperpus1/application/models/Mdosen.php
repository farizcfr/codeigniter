<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdosen extends CI_Model {


	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('t_dosen');
		$this->db->join('t_profil_dosen','t_profil_dosen.kode_dosen=t_dosen.kode_dosen');
		$query = $this->db->get();
		return $query->result(); 
	}

}
//$this->db->query('SELECT 
//							M.kode_prodi,
//							D.ttl,
//							D.jenis_kelamin,
//							D.email,
//							D.kode_dosen,
//							D.nama
//							FROM
//							t_dosen AS M
//							INNER JOIN t_profil_dosen AS D ON D.kode_dosen = M.kode_dosen AND D.kode_dosen = "'.$kode_dosen.'")');