 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manggota extends CI_Model {


	public function tampil()
	{
		$query = $this->db->get("t_anggota");
        return $query->result(); 
	}


}