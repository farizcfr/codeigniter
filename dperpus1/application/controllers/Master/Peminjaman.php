<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

	public function __construct() 
	{
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->helper('url');
      $this->load->model('mpeminjaman'); 
      //$this->load->model('mautoa)';
      $this->load->model('mautop');
      $this->load->helper('form');        
    }


	public function index()
	{
		$data['data']=$this->mpeminjaman->tampil();

		$this->load->view('template/header');
		$this->load->view('master/peminjaman/vselect',$data);
		$this->load->view('template/footer');
	}

		public function insert()
	{
		//$data['data']=$this->mpeminjaman->tampil();
		$data['kode']=$this->mpeminjaman->buat_kode();

		$this->load->view('template/header');
		$this->load->view('master/peminjaman/vinsert',$data);
		$this->load->view('template/footer');


	}

	public function getdata()
	{

		$data['data']=$this->mpeminjaman->tampil();
		$data = array(
			'no_pinjam' => $this->input->post('no_pinjam'),
			'no_anggota' => $this->input->post('no_anggota'),
			'jumlah_pinjam' => $this->input->post('jumlah_pinjam'),
			'id_user' => $this->input->post('id_user')
			);

		
		$this->db->insert('t_peminjaman',$data);

		$data = array(
			'no_pinjam' => $this->input->post('no_pinjam'),
			'kode_buku' => $this->input->post('kode_buku'),
			'judul_buku' => $this->input->post('judul_buku'),
			'tgl_pinjam' => $this->input->post('tgl_pinjam'),
			'tgl_kembali' => $this->input->post('tgl_kembali'),
			'denda' => $this->input->post('denda')
			);
		$this->db->insert('t_detailpeminjaman',$data);
		
		$this->session->set_flashdata('message', 'anda berhasil menginput data');
		
		$this->session->set_flashdata('message', 'Data berhasil disimpan.');
		redirect(base_url('peminjaman'));


	}

	public function delete($no_pinjam)
	{
		
		$tables = array('t_peminjaman','t_detailpeminjaman');
		$this->db->where('no_pinjam',$no_pinjam);
		$this->db->delete($tables);
	//	$this->db->where('nim', $nim);
     //   $this->db->delete('t_mahasiswa','t_profil_mahasiswa');
    //    $this->db->delete('t_profil_mahasiswa');
		$this->session->set_flashdata('message', 'Hapus data berhasil...');
        redirect(base_url('peminjaman'));
	}

	public function update($no_pinjam)
	{
		
		$data = $this->db->get_where('t_peminjaman', array('no_pinjam' => $no_pinjam))->row();
		$data = $this->db->get_where('t_detailpeminjaman', array('no_pinjam' => $no_pinjam))->row();


		$this->load->view('template/header');
		$this->load->view('master/peminjaman/vupdate',array('data'=>$data));
		$this->load->view('template/footer');
	}

	public function getupdate()
	{
		$data = array(
			'no_pinjam' => $this->input->post('no_pinjam'),
			'no_anggota' => $this->input->post('no_anggota'),
			'jumlah_pinjam' => $this->input->post('jumlah_pinjam'),
		//	'id_user' => $this->input->post('id_user')
			);

		
		$this->db->update('t_peminjaman',$data);
		$this->db->where('no_pinjam',$data['no_pinjam']);

        $data = array(
			'no_pinjam' => $this->input->post('no_pinjam'),
			'kode_buku' => $this->input->post('kode_buku'),
			'judul_buku' => $this->input->post('judul_buku'),
			'no_anggota' => $this->input->post('no_anggota'),
			'tgl_pinjam' => $this->input->post('tgl_pinjam'),
			'tgl_kembali' => $this->input->post('tgl_kembali'),
			'denda' => $this->input->post('denda')
			);

      //  $this->db->where('no_pinjam',$data['no_pinjam']);
        $this->db->update('t_detailpeminjaman',$data);


        $this->session->set_flashdata('message', 'Update data berhasil disimpan...');
		redirect(base_url('peminjaman'));
	}

	public function cetak()
	{
		$data['data']=$this->mpeminjaman->tampil();
	 
	    $this->load->view('template/header');
		$this->load->view('master/peminjaman/vcetak',$data);
		$this->load->view('template/footer');
	}

	public function cetak_excel()
	{
		$data['data'] = $this->mpeminjaman->tampil();
					    $this->load->view('template/header');
						$this->load->view('master/peminjaman/vexcel',$data);
						$this->load->view('template/footer');
	}

	public function export_excel(){
 			
 			$data = array( 'title' => 'Laporan Data Peminjaman',
				           't_buku' => $this->mpeminjaman->tampil());
 							$this->load->view('master/peminjaman/vlaporan_excel',$data);
 }



}
