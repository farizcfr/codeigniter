 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {


	public function tampil()
	{
		$query = $this->db->get("t_user");
        return $query->result(); 
	}
}