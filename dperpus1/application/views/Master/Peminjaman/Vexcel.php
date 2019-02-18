<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title><?php echo $title ?></title>
 <style type="text/css">
 body {
 background-color: green;
 font-family: Arial;
 }
 main {
 width: 80%;
 padding: 20px;
 background-color: white;
 min-height: 300px;
 border-radius: 5px;
 margin: 30px auto;
 }
 table {
 border-top: solid thin #000;
 border-collapse: collapse;
 }
 th, td {
 border-top: border-top: solid thin #000;
 padding: 6px 12px;
 }
 </style>
</head>

<body>
 <main>
 <h1>Laporan Data Peminjaman</h1>
 <p><a href="<?php echo base_url('buku/export_excel') ?>"class="btn btn-success btn-lg" style="margin-bottom:2%" ><i class="fa fa-download"> Export ke Excel</i></a>
 <table border="1" width="100%">
 <thead>
 <tr>
 <th>No Peminjaman</th>
 <th>No Anggota</th>
 <th>Jumlah Pinjam</th>
 <th>Kode Buku</th>
 <th>Judul Buku</th>
 <th>Tanggal Pinjam</th>
 <th>Tanggal Kembali</th>
 <th>Denda</th>
 </tr>
 </thead>
 <tbody>
 <?php  foreach($data as $d) { ?>
 <tr>
  								  <th><?php echo $d->no_pinjam; ?></th>
							      <td><?php echo $d->no_anggota; ?></td>
							      <td><?php echo $d->jumlah_pinjam; ?></td>
							      <td><?php echo $d->kode_buku; ?></td>
							      <td><?php echo $d->judul_buku; ?></td>
							      <td><?php echo $d->tgl_pinjam; ?></td>
							      <td><?php echo $d->tgl_kembali; ?></td>
							      <td><?php echo $d->denda; ?></td>
							      
 </tr>
 <?php  } ?>
 </tbody>
 </table>
 </main>
</body>
</html>