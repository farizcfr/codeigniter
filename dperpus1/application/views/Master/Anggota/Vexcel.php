  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <h2>Data Buku Perpustakaan</h2>   
                        <h5>Welcome <?php echo $this->session->userdata('username'); ?> ,Kamu sedang di halaman Admin </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />



 <h1>Laporan Data Anggota</h1>
 <a href="<?php echo base_url('Anggota/export_excel') ?>" class="btn btn-success btn-lg" style="margin-bottom:2%" ><i class="fa fa-download"> Export ke Excel</i></a>
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
