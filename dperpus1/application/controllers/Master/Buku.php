<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct() 
	{
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->helper('url');
      $this->load->model('mbuku');
      $this->load->model('mauto');
      $this->load->library('pdf_report','upload');
    
    }


	public function index()
	{
		$data['data']=$this->mbuku->tampil();
		
		
		$this->load->view('template/header');
		$this->load->view('master/buku/vselect',$data);
		$this->load->view('template/footer');
		
	}


	public function insert()
	{
     	$data['kode']=$this->mauto->buat_kode();

		$this->load->view('template/header');
		$this->load->view('master/buku/vinsert',$data);
		$this->load->view('template/footer');
	}

	
	public function getdata()
	{

		$this->form_validation->set_rules('kode_buku', 'Kode Buku', 'required|is_unique[t_buku.kode_buku]');
	    $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'trim|required');
	    $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
	    $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
	    $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required');
	    $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');

	    $this->form_validation->set_error_delimiters(' <div class="alert alert-warning alert-dismissable">
														 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>',
														  '</div>');
	   
	    if ($this->form_validation->run() == TRUE) 

	    {
	    	$config = array(
	      		'upload_path' => './assets/upload',
	      		'allowed_types' => 'gif|jpg|JPG|png',
	     		 'max_size' => '2048',);
	   
	  		 $this->load->library('upload', $config);  
	   		 $this->upload->do_upload('file_upload');
	    	  $upload_data = $this->upload->data();
	     	 $file_name = $upload_data['file_name'];

				$data = array(
				'kode_buku' => $this->input->post('kode_buku'),
				'judul_buku' => $this->input->post('judul_buku'),
				'pengarang' => $this->input->post('pengarang'),
				'penerbit' => $this->input->post('penerbit'),
				'tahun_terbit' => $this->input->post('tahun_terbit'),
				'lokasi' => $this->input->post('lokasi'),
				'image' => $file_name);
	
				$simpan = $this->mbuku->simpan_buku($data);
		 

      			if ($simpan) 
      			{
       				 $this->session->set_flashdata('message', 'Data berhasil disimpan.');
             			 redirect(base_url('buku'));
      			}else
      					{
        				$this->session->set_flashdata('message', 'Maaf data gagal disimpan ke database.');
        				redirect(base_url('buku/insert'));
      					}
      
	    } 		else {
	    				
	    				$this->session->set_flashdata('message', 'Maaf data gagal disimpan.');
	     				 redirect(base_url('buku/insert'));
  								//$this->session->set_flashdata('message', 'Data berhasil disimpan.');
						//redirect(base_url('buku'));
	 				 }
	}

	public function delete($kode_buku)
	{
		
		$this->db->where('kode_buku', $kode_buku);
        $this->db->delete('t_buku');

        $this->session->set_flashdata('message', 'Hapus data berhasil...');
        redirect(base_url('buku'));
	}

	public function update($kode_buku)
	{
		
		$data = $this->db->get_where('t_buku', array('kode_buku' => $kode_buku))->row();

		$this->load->view('template/header');
		$this->load->view('master/buku/vupdate',array('data'=>$data));
		$this->load->view('template/footer');
	}

	public function getupdate()
	{
		$data = array(
			'kode_buku' => $this->input->post('kode_buku'),
			'judul_buku' => $this->input->post('judul_buku'),
			'pengarang' => $this->input->post('pengarang'),
			'penerbit' => $this->input->post('penerbit'),
			'tahun_terbit' => $this->input->post('tahun_terbit'),
			'lokasi' => $this->input->post('lokasi'),
			'image' => $this->input->post('image')
			);

		
		$this->db->where('kode_buku',$data['kode_buku']);
        $this->db->update('t_buku',$data);

        $this->session->set_flashdata('message', 'Update data berhasil disimpan...');
		redirect(base_url('buku'));
	}

	public function cetak()
	{
		$data['data']=$this->mbuku->tampil();
	 
	    $this->load->view('template/header');
		$this->load->view('master/buku/vcetak',$data);
		$this->load->view('template/footer');
	}

	public function cetak_excel()
	{
		$data['data'] = $this->mbuku->tampil();
					    $this->load->view('template/header');
						$this->load->view('master/buku/vexcel',$data);
						$this->load->view('template/footer');
	}

	public function export_excel(){
 			
 			$data = array( 'title' => 'Laporan Data Buku',
				           't_buku' => $this->mbuku->tampil());
 							$this->load->view('master/buku/vlaporan_excel',$data);
 }

	
}