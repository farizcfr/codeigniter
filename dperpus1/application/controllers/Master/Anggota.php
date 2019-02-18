<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {


	public function __construct() 
	{
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->helper('url');
      $this->load->model('manggota');  
      $this->load->model('mautoa');
      $this->load->helper('form');
      $this->load->library('pdf');


    }


	public function index()
	{
		$data['data']=$this->manggota->tampil();

		$this->load->view('template/header');
		$this->load->view('master/anggota/vselect',$data);
		$this->load->view('template/footer');
	}

		public function insert()
	{
		$data['kode']=$this->mautoa->buat_kode();

		$this->load->view('template/header');
		$this->load->view('master/anggota/vinsert',$data);
		$this->load->view('template/footer');

		
	}

	public function getdata()
	{

		$data = array(
			'no_anggota' => $this->input->post('no_anggota'),
			'no_pendaftaran' => $this->input->post('no_pendaftaran'),
			'nama_anggota' => $this->input->post('nama_anggota'),
			'ttl' => $this->input->post('ttl'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'email' => $this->input->post('email'),
			'status' => $this->input->post('status'),
			'image' => $this->input->post('image')
			);

		
		$this->db->insert('t_anggota',$data);

		$this->session->set_flashdata('message', 'Data berhasil disimpan.');
		redirect(base_url('anggota'));
	}

	public function delete($no_anggota)
	{
		
		$this->db->where('no_anggota', $no_anggota);
        $this->db->delete('t_anggota');

        $this->session->set_flashdata('message', 'Hapus data berhasil disimpan.');
        redirect(base_url('anggota'));
	}

	public function update($no_anggota)
	{
		
		$data = $this->db->get_where('t_anggota', array('no_anggota' => $no_anggota))->row();

		$this->load->view('template/header');
		$this->load->view('master/anggota/vupdate',array('data'=>$data));
		$this->load->view('template/footer');
	}

	public function getupdate()
	{
		$data = array(
			'no_anggota' => $this->input->post('no_anggota'),
			'no_pendaftaran' => $this->input->post('no_pendaftaran'),
			'nama_anggota' => $this->input->post('nama_anggota'),
			'ttl' => $this->input->post('ttl'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'email' => $this->input->post('email'),
			'status' => $this->input->post('status'),
			'image' => $this->input->post('image')
			);

		
		$this->db->where('no_anggota',$data['no_anggota']);
        $this->db->update('t_anggota',$data);

        $this->session->set_flashdata('message', 'Update data berhasil disimpan.');
		redirect(base_url('anggota'));
	}

	public function cetak()
	{
		$data['data']=$this->manggota->tampil();
	 
	    $this->load->view('template/header');
		$this->load->view('master/anggota/vcetak',$data);
		$this->load->view('template/footer');
	}

	public function cetak_excel()
	{
		$data['data'] = $this->manggota->tampil();
						$this->load->view('template/header');
						$this->load->view('master/anggota/vexcel',$data);
						$this->load->view('template/footer');
	}

	public function export_excel(){
 			
 			$data = array( 'title' => 'Laporan Data Anggota',
				           't_buku' => $this->manggota->tampil());
 							$this->load->view('master/anggota/vlaporan_excel',$data);
 }

 public function upload(){
			$config['upload_path']         = 'assets/img/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                   echo 'anda gagal upload';
            }
            else
            {
            	//tampung data dari form
            	$nama = $this->input->post('nama');
            	$harga = $this->input->post('harga');
            	$file = $this->upload->data();
            	$gambar = $file['file_name'];
 
                $this->product_m->insert(array(
			        'nama' => $nama,
			        'harga' => $harga,
			        'gambar' => $gambar
				));
				$this->session->set_flashdata('msg','data berhasil di upload');
				redirect('product');
 
            }
		}

		 function Laporan(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->image('assets/img/logo.jpg',34,2,28,25);        
        $pdf->Cell(190,7,'PERPUSTAKAAN POLITEKNIK PERDANA MANDIRI',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Alamat : Jl Veteran Oesman Singawinata Blok A1 9-10 Purwakarta 41115',0,1,'C');
        $pdf->Cell(190,7,'Telp(0264)207430,fax (0264)209585',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,15,'LAPORAN DATA BUKU',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,6,'No anggota',1,0);
        $pdf->Cell(70,6,'Nama Anggota',1,0);
        $pdf->Cell(31,6,'ttl',1,0);
        $pdf->Cell(31,6,'Jenis Kelamin',1,0);
        $pdf->Cell(31,6,'Email',1,0);
        $pdf->Cell(31,6,'Status',1,0);
        $pdf->Cell(31,6,'Image',1,0);
       
        
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('t_anggota')->result();
        foreach ($anggota as $row){
            $pdf->Cell(40,6,$row->no_anggota,1,0);
            $pdf->Cell(70,6,$row->nama_anggota,1,0);
            $pdf->Cell(31,6,$row->ttl,1,0);
            $pdf->Cell(40,6,$row->jenis_kelamin,1,0);
            $pdf->Cell(70,6,$row->email,1,0);
            $pdf->Cell(31,6,$row->image,1,0);
            
            
        }
        
        $pdf->Output();
    }

}
