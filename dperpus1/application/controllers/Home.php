<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mauth');
		$this->load->library('form_validation');
		

		//if (! $this->session->logged_in) {
	//		redirect(base_url('auth'));
	//	}
	}


	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('vhome');
		$this->load->view('template/footer');
	}
}
