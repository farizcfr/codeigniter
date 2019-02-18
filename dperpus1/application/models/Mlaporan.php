<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlaporan extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 $this->db->select('*');
 $this->db->from('t_buku');
 $query = $this->db->get();
 return $query->result();
 }

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */