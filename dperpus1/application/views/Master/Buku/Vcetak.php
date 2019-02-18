<?php
 $pdf = new FPDF('l','mm','A4');

 		// set document informatio

        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->image('assets/img/logo.jpg',34,2,28,25);        
        $pdf->Cell(240,7,'PERPUSTAKAAN POLITEKNIK PERDANA MANDIRI',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(240,7,'Alamat : Jl Veteran Oesman Singawinata Blok A1 9-10 Purwakarta 41115',0,1,'C');
        $pdf->Cell(240,7,'Telp(0264)207430,fax (0264)209585',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(240,15,'LAPORAN DATA BUKU',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(40,6,'Kode Buku',1,0);
        $pdf->Cell(70,6,'Judul Buku',1,0);
        $pdf->Cell(31,6,'Pengarang',1,0);
        $pdf->Cell(31,6,'Penerbit',1,0);
        $pdf->Cell(31,6,'Tahun Terbit',1,0);
        $pdf->Cell(31,6,'Lokasi',1,0);
        $pdf->Cell(31,6,'Image',1,0);
       
   	
        $pdf->SetFont('Arial','',10);
        $anggota = $this->db->get('t_buku')->result();
        foreach ($data as $d){

            $pdf->Cell(40,6,$d->kode_buku,1,0);
            $pdf->Cell(70,6,$d->judul_buku,1,0);
            $pdf->Cell(31,6,$d->pengarang,1,0);
            $pdf->Cell(40,6,$d->penerbit,1,0);
            $pdf->Cell(70,6,$d->tahun_terbit,1,0);
            $pdf->Cell(70,6,$d->lokasi,1,0);
            $pdf->Cell(31,6,$d->image,1,0);
            
            
        }
        
        $pdf->Output('Laporan Data Buku.pdf', 'I');