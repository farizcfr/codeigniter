 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmahasiswa extends CI_Model {


	public function tampil()
	{

		$this->db->select('*');
		$this->db->from('t_mahasiswa');
		$this->db->join('t_profil_mahasiswa','t_profil_mahasiswa.nim=t_mahasiswa.nim');
		$query = $this->db->get();
		return $query->result();
	}

}