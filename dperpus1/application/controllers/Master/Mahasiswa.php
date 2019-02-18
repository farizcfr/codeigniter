<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {


	public function __construct() 
	{
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->helper('url');
      $this->load->model('mmahasiswa');  
      //$this->load->model('mautoa');
      $this->load->helper('form');

    }


	public function index()
	{
		$data['data']=$this->mmahasiswa->tampil();

		$this->load->view('template/header');
		$this->load->view('master/mahasiswa/vselect',$data);
		$this->load->view('template/footer');
	}

		public function insert()
	{
		$data['data']=$this->mmahasiswa->tampil();

		$this->load->view('template/header');
		$this->load->view('master/mahasiswa/vinsert',$data);
		$this->load->view('template/footer');
	}

	public function getdata()
	{
		$data['data']=$this->mmahasiswa->tampil();
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'kode_prodi' => $this->input->post('kode_prodi')
			
			);

		
		$this->db->insert('t_mahasiswa',$data);

		$data = array(
			'nim' => $this->input->post('nim'),
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'ttl' => $this->input->post('ttl'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'jurusan' => $this->input->post('jurusan'),
			'email' => $this->input->post('email')
			);
		$this->db->insert('t_profil_mahasiswa',$data);
		
		$this->session->set_flashdata('message', 'anda berhasil menginput data');
		
		$this->session->set_flashdata('message', 'Data berhasil disimpan.');
		redirect(base_url('mahasiswa'));
	}

	public function delete($nim)
	{
		
		$tables = array('t_mahasiswa','t_profil_mahasiswa');
		$this->db->where('nim',$nim);
		$this->db->delete($tables);

		$this->session->set_flashdata('message', 'Hapus data berhasil...');	
        redirect(base_url('mahasiswa'));
	}

	public function update($nim)
	{
		
		$data = $this->db->get_where('t_mahasiswa', array('nim' => $nim))->row();
		$data = $this->db->get_where('t_profil_mahasiswa', array('nim' => $nim))->row();

		$this->load->view('template/header');
		$this->load->view('master/mahasiswa/vupdate',array('data'=>$data));
		$this->load->view('template/footer');
	}

	public function getupdate()
	{
		$this->db->where('nim',$data['nim']);
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'kode_prodi' => $this->input->post('kode_prodi')
			);

		
		$this->db->update('t_mahasiswa',$data);
		$this->db->where('nim',$data['nim']);
		
        $data = array(
			'nim' => $this->input->post('nim'),
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'ttl' => $this->input->post('ttl'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'jurusan' => $this->input->post('jurusan'),
			'email' => $this->input->post('email')
			);

        
        $this->db->update('t_profil_mahasiswa',$data);

        $this->session->set_flashdata('message', 'Update data berhasil disimpan...');
		redirect(base_url('mahasiswa'));
	}



}
