<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>

<tr>

 <th>Kode Buku</th>
 <th>Judul Buku</th>
 <th>Pengarang</th>
 <th>Penerbit</th>
 <th>Tahun Terbit</th>
 <th>Lokasi</th>

 </tr>

</thead>

<tbody>

<?php  $i=1; foreach($data as $d) { ?>

<tr>

  								  <td><?php echo $d->kode_buku; ?></td>
							      <td><?php echo $d->judul_buku; ?></td>
							      <td><?php echo $d->pengarang; ?></td>
							      <td><?php echo $d->penerbit; ?></td>
							      <td><?php echo $d->tahun_terbit; ?></td>
							      <td><?php echo $d->lokasi; ?></td>

 </tr>

<?php $i++;  } ?>

</tbody>

</table>