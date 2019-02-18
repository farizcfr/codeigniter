<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct() 
	{
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->helper('url');
      $this->load->model('muser');  
    //  $this->load->model('mautoa');
      $this->load->helper('form');

    }


	public function index()
	{
		$data['data']=$this->muser->tampil();

		$this->load->view('template/header');
		$this->load->view('master/user/vselect',$data);
		$this->load->view('template/footer');
	}

		public function insert()
	{
	//	$data['kode']=$this->mautoa->buat_kode();

		$this->load->view('template/header');
		$this->load->view('master/user/vinsert');
		$this->load->view('template/footer');
	}

	public function getdata()
	{

		$data = array(
				'id_user' => $this->input->post('id_user'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'nama' => $this->input->post('nama'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level' => $this->input->post('level')
			);

		
		$this->db->insert('t_user',$data);

		$this->session->set_flashdata('message', 'Data berhasil disimpan...');
		redirect(base_url('user'));
	}

	public function delete($id_user)
	{
		
		$this->db->where('id_user', $id_user);
        $this->db->delete('t_user');

        $this->session->set_flashdata('message', 'Hapus data berhasil...');
        redirect(base_url('user'));
	}

	public function update($id_user)
	{
		
		$data = $this->db->get_where('t_user', array('id_user' => $id_user))->row();

		$this->load->view('template/header');
		$this->load->view('master/user/vupdate',array('data'=>$data));
		$this->load->view('template/footer');
	}

	public function getupdate()
	{
		$data = array(
			'id_user' => $this->input->post('id_user'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'nama' => $this->input->post('nama'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level' => $this->input->post('level')
			);

		
		$this->db->where('id_user',$data['id_user']);
        $this->db->update('t_user',$data);

        $this->session->set_flashdata('message', 'Update data berhasil disimpan...');
		redirect(base_url('user'));
	}




}
