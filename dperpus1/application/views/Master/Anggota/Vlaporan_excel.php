<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>

<tr>

 <th>No Anggota</th>
 <th>Nama Anggota</th>
 <th>Tanggal Lahir</th>
 <th>Jenis Kelamin</th>
 <th>Email</th>
 <th>Status</th>

 </tr>

</thead>

<tbody>

<?php  foreach($data as $d) { ?>

<tr>

  								  <th><?php echo $d->no_anggota; ?></th>
							      <td><?php echo $d->nama_anggota; ?></td>
							      <td><?php echo $d->ttl; ?></td>
							      <td><?php echo $d->jenis_kelamin; ?></td>
							      <td><?php echo $d->email; ?></td>
							      <td><?php echo $d->status; ?></td>

 </tr>

<?php  } ?>

</tbody>

</table>