<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() 
	{
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('mauth');
      $this->load->helper('url');
      $this->load->model('mlogin');  
      $this->load->library('session');
      $this->load->library('form_validation');
      $this->load->helper('form');

    
    }


	public function index()
	{
		$this->load->view('view_login');
	}

	public function cek_akun()
	{
		$this->load->model('mauth');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->mauth->cek_login($username, $password);

		if ($query === 1) {
			return "username tidak ditemukan";
		} else if ($query === 2) {
			return "user tidak aktif";
		} else if ($query === 3) {
			return "password salah";
		}else{
			$userdata = array (
				'id_user' => $query->id_user,
				'username' => $query->username,
				'email' => $query->email,
				'nama' => $query->nama,
				'level' => $query->level,
				'logged_in' => TRUE 
				);	
			$this->session->set_userdata($userdata);
			return TRUE;
		}
	}

	public function login()
	{
		if ($this->session->userdata('level') == "Admin") {redirect('home');}
		if ($this->session->userdata('level') == "Anggota") {redirect('home_u');}
		if ($this->session->userdata('logged_in')) redirect(base_url());

		if ($this->input->post('login')) {
			$this->load->model('mauth');
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');

			$error = $this->cekakun();

			if ($this->form_validation->run() && $error === TRUE) {
				$data = $this->load->mauth->cek_login($this->input->post('username'), $this->input->post('password'));
				if ($data->level == 'Admin') {
					$this->session->set_userdata('id_user',$id_user);
					redirect('home');

				} else if ($data->level == 'Anggota') {
					$this->session->set_userdata('id_user',$id_user);
					redirect('home_u');
				}
			}
			else {

				$data['error'] = $error;
				$this->load->view('view_login',$data);
			}
		}
			else{
				 echo "login gagal";
				$this->load->view('view_login');
			}
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}

	
	

	public function akun_baru()
	{
		$this->load->view('vbuatakun');
	}

	public function proses_buatakun()
	{

		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[t_user.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[t_user.email]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required[matches[password]]');

			if ($this->form_validation->run() === FALSE) {
				$this->session->set_flashdata('message', 'Data gagal disimpan.');
				$this->load->view('vbuatakun');
			}else{

			$data = array(
				'id_user' => $this->input->post('id_user'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'nama' => $this->input->post('nama'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level' => $this->input->post('level')
				
			);

			$insert = $this->mauth->buat_akun($data);

			if ($insert) {
				
				redirect(base_url('login'));
	            $this->session->set_flashdata('message', 'Data berhasil disimpan.');
			}else{
				redirect(base_url('auth/akun_baru'));
				$this->session->set_flashdata('message', 'Data gagal disimpan.');
			}
		}
	}
}