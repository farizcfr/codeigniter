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
 <h1>Laporan Data Pendaftaran</h1>
 <p><a href="<?php echo base_url('pendaftaran/export_excel') ?>"class="btn btn-success btn-lg" style="margin-bottom:2%" ><i class="fa fa-download"> Export ke Excel</i></a>
 <table border="1" width="100%">
 <thead>
 <tr>
 <th>No Pendaftaran</th>
 <th>Nama</th>
 <th>Status</th>
 <th>Tanggal Daftar</th>
 </tr>
 </thead>
 <tbody>
 <?php  foreach($data as $d) { ?>
 <tr>
  								  <th><?php echo $d->no_pendaftaran; ?></th>
							      <td><?php echo $d->nama_pendaftar; ?></td>
							      <td><?php echo $d->status; ?></td>
							      <td><?php echo $d->tgl_daftar; ?></td>
							      
 </tr>
 <?php  } ?>
 </tbody>
 </table>
 </main>
</body>
</html>