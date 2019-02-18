<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {


	public function __construct() 
	{
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->helper('url');
      $this->load->model('mdosen');  
      //$this->load->model('mautoa');
      $this->load->helper('form');

    }


	public function index()
	{
		$data['data']=$this->mdosen->tampil();


		$this->load->view('template/header');
		$this->load->view('master/dosen/vselect',$data);
		$this->load->view('template/footer');
	}

		public function insert()
	{
		$data['data']=$this->mdosen->tampil();

		$this->load->view('template/header');
		$this->load->view('master/dosen/vinsert');
		$this->load->view('template/footer');
	}

public function getdata()
	{
		$data = array(
			'kode_dosen' => $this->input->post('kode_dosen'),
			'nama_dosen' => $this->input->post('nama_dosen'),
			'kode_prodi' => $this->input->post('kode_prodi')
			);

		
		$this->db->insert('t_dosen',$data);


		$data = array(
			'kode_dosen' => $this->input->post('kode_dosen'),
			'nama_dosen' => $this->input->post('nama_dosen'),
			'ttl' => $this->input->post('ttl'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'email' => $this->input->post('email')
			);

		
		$this->db->insert('t_profil_dosen',$data);

		$this->session->set_flashdata('message', 'Data berhasil disimpan.');
		redirect(base_url('dosen'));
	}

	public function delete($kode_dosen)
	{
		
		$tables = array('t_dosen','t_profil_dosen');
		$this->db->where('kode_dosen',$kode_dosen);
		$this->db->delete($tables);

		$this->session->set_flashdata('message', 'Hapus data berhasil...');
        redirect(base_url('dosen'));
	}

	public function update($kode_dosen)
	{
		
		$data = $this->db->get_where('t_dosen', array('kode_dosen' => $kode_dosen))->row();
		$data = $this->db->get_where('t_profil_dosen', array('kode_dosen' => $kode_dosen))->row();

		$this->load->view('template/header');
		$this->load->view('master/dosen/vupdate',array('data'=>$data));
		$this->load->view('template/footer');
	}

	public function getupdate()
	{
		$this->db->where('kode_dosen',$data['kode_dosen']);
		$data = array(
			'kode_dosen' => $this->input->post('kode_dosen'),
			'nama_dosen' => $this->input->post('nama_dosen'),
			'kode_prodi' => $this->input->post('kode_prodi')
			);

		
		$this->db->update('t_dosen',$data);

		$this->db->where('kode_dosen',$data['kode_dosen']);
        $data = array(
			'kode_dosen' => $this->input->post('kode_dosen'),
			'nama_dosen' => $this->input->post('nama_dosen'),
			'ttl' => $this->input->post('ttl'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'email' => $this->input->post('email')
			);

        
        $this->db->update('t_profil_dosen',$data);


        $this->session->set_flashdata('message', 'Update data berhasil disimpan.');
		redirect(base_url('dosen'));
	}


}
