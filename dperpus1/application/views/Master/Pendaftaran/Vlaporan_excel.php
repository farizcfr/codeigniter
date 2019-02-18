<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>

<tr>

<th>No Pendaftaran</th>
 <th>Nama</th>
 <th>Status</th>
 <th>Tanggal Daftar</th>>

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