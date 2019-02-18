<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {


	 public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->library('pdf_report');
	 	$this->load->models('mbuku');
	 }

	public function index() 
	{
		$data['data']=$this->mbuku->tampil();
	 
	    $this->load->view('template/header');
		$this->load->view('master/buku/vcetak',$data);
		$this->load->view('template/footer');
	 }



}