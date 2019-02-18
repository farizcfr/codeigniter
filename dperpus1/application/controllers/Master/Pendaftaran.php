<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {


	public function __construct() 
	{
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->helper('url');
      $this->load->model('mpendaftaran');
      
      $this->load->helper('form');

    }


	public function index()
	{
		$data['data']=$this->mpendaftaran->tampil();

		$this->load->view('template/header');
		$this->load->view('master/pendaftaran/vselect',$data);
		$this->load->view('template/footer');
	}

		public function insert()
	{
		$data['kode']=$this->mpendaftaran->buat_kode();

		$this->load->view('template/header');
		$this->load->view('master/pendaftaran/vinsert',$data);
		$this->load->view('template/footer');
	}

	public function getdata()
	{

		$data = array(
			'no_pendaftaran' => $this->input->post('no_pendaftaran'),
			'status' => $this->input->post('status'),
			'nim' => $this->input->post('nim'),
			'kode_dosen' => $this->input->post('kode_dosen'),
			'nama_pendaftar' => $this->input->post('nama_pendaftar'),
			'tgl_daftar' => $this->input->post('tgl_daftar')
			);

		
		$this->db->insert('t_pendaftaran',$data);

		$this->session->set_flashdata('message', 'Data berhasil disimpan...');
		redirect(base_url('pendaftaran'));
	}

	public function delete($no_pendaftaran)
	{
		
		$this->db->where('no_pendaftaran', $no_pendaftaran);
        $this->db->delete('t_pendaftaran');

        $this->session->set_flashdata('message', 'Hapus data berhasil...');
        redirect(base_url('pendaftaran'));
	}

	public function update($no_pendaftaran)
	{
		
		$data = $this->db->get_where('t_pendaftaran', array('no_pendaftaran' => $no_pendaftaran))->row();

		$this->load->view('template/header');
		$this->load->view('master/pendaftaran/vupdate',array('data'=>$data));
		$this->load->view('template/footer');
	}

	public function getupdate()
	{
		$data = array(
			'no_pendaftaran' => $this->input->post('no_pendaftaran'),
			'status' => $this->input->post('status'),
			'nim' => $this->input->post('nim'),
			'kode_dosen' => $this->input->post('kode_dosen'),
			'nama_pendaftar' => $this->input->post('nama_pendaftar'),
			'tgl_daftar' => $this->input->post('tgl_daftar')
			);

		
		$this->db->where('no_pendaftaran',$data['no_pendaftaran']);
        $this->db->update('t_pendaftaran',$data);

        $this->session->set_flashdata('message', 'Update data berhasil disimpan...');
		redirect(base_url('pendaftaran'));
	}

		public function cetak()
	{
		$data['data']=$this->mpendaftaran->tampil();
	 
	    $this->load->view('template/header');
		$this->load->view('master/pendaftaran/vcetak',$data);
		$this->load->view('template/footer');
	}

	public function cetak_excel()
	{
		$data['data'] = $this->mpendaftaran->tampil();
					    $this->load->view('template/header');
						$this->load->view('master/pendaftaran/vexcel',$data);
						$this->load->view('template/footer');
	}

	public function export_excel(){
 			
 			$data = array( 'title' => 'Laporan Data Pendaftaran',
				           't_buku' => $this->mpendaftaran->tampil());
 							$this->load->view('master/pendaftaran/vlaporan_excel',$data);
 }
}
