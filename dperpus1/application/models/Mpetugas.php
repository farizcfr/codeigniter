 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpetugas extends CI_Model {


	public function tampil()
	{
		$query = $this->db->get("t_petugas");
        return $query->result(); 
	}


}