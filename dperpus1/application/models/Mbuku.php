<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbuku extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function tampil()
	{
		$query = $this->db->get("t_buku");
        return $query->result(); 
	} 

	public function simpan_buku($data)
	{
		return $this->db->insert('t_buku',$data);
	}

}