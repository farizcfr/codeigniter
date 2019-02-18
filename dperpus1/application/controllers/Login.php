<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() 
	{
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->helper('url','form');
      $this->load->model('mlogin','login',true);  
      $this->load->library('session');

    }


	public function index()
	{
		if (!$_POST) {
			$input = (object) $this->login->getDefaultValues();
		} else {
			$input = (object) $this->input->post();
		}

		if (!$this->login->validate()) {
			$this->load->view('view_login', compact('input'));
			return;
		}

		if (!$this->login->run($input)) {
			redirect(base_url('login'));
			
		} else {
			redirect('home');
		
			
		}
	}





	
}