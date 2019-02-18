<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

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