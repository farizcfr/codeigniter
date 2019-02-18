<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() 
    {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->helper('url');
      $this->load->model('mauth');
      $this->load->model('mpendaftaran');
      $this->load->model('mautoa');
      $this->load->model('mpendaftaran');

      
    
    }


    public function index()
    { 
        $data['kode']=$this->mpendaftaran->buat_kode();
        $this->load->view('vregister',$data); 
    }

    public function proses_register()
  {


    $this->form_validation->set_rules('no_pendaftaran', 'No Pendaftaran', 'required|is_unique[t_pendaftaran.no_pendaftaran]');
    $this->form_validation->set_rules('nama_pendaftar', 'Nama Pendaftar', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('tgl_daftar', 'Tanggal Daftar', 'required');
    
    if ($this->form_validation->run() === FALSE) {
      $this->session->set_flashdata('message', 'Maaf data gagal disimpan.');
      redirect(base_url('register'));
   //   $this->load->view('vregister');
    }else{

      $data = array(
      'no_pendaftaran' => $this->input->post('no_pendaftaran'),
      'nama_pendaftar' => $this->input->post('nama_pendaftar'),
      'status' => $this->input->post('status'),
      'nim' => $this->input->post('nim'),
      'kode_dosen' => $this->input->post('kode_dosen'),
      'tgl_daftar' => $this->input->post('tgl_daftar')
    );

    $insert = $this->mauth->register_daftar($data);

      if ($insert) {
        $this->session->set_flashdata('message', 'Data berhasil disimpan.');
              redirect(base_url('auth/akun_baru'));
      }else{
        $this->session->set_flashdata('message', 'Maaf data gagal disimpan ke database.');
        redirect(base_url('register'));
      }
    }

    
  }
}