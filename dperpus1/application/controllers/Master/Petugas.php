<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {


	public function __construct() 
	{
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->helper('url');
      $this->load->model('mpetugas');  
      //$this->load->model('mautoa');
      $this->load->helper('form');

    }


	public function index()
	{
		$data['data']=$this->mpetugas->tampil();

		$this->load->view('template/header');
		$this->load->view('master/petugas/view_petugas',$data);
		$this->load->view('template/footer');
	}

		public function insert()
	{
		//$data['data']=$this->mmahasiswa->tampil();

		$this->load->view('template/header');
		$this->load->view('master/petugas/view_petugas',$data);
		$this->load->view('template/footer');
	}

	public function getdata()
	{
		$data['data']=$this->mpetugas->tampil();
		$data = array(
			'kode_petugas' => $this->input->post('kode_petugas'),
			'nama_petugas' => $this->input->post('nama_petugas'),
			'jabatan' => $this->input->post('jabatan')
			
			);

		
		$this->db->insert('t_petugas',$data);

			
		$this->session->set_flashdata('message', 'Data berhasil disimpan.');
		redirect(base_url('petugas'));
	}
}