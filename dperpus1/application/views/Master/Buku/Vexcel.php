  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
             		    <h2>Laporan Data Buku</h2>   
                        <h5>Welcome <?php echo $this->session->userdata('username'); ?> , Kamu sedang di halaman Admin </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />


 <p><a href="<?php echo base_url('buku/export_excel') ?>"class="btn btn-success btn-lg" style="margin-bottom:2%" ><i class="fa fa-download"> Export ke Excel</i></a>
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
 <?php  foreach($data as $d) { ?>
 <tr>
  								  <th><?php echo $d->kode_buku; ?></th>
							      <td><?php echo $d->judul_buku; ?></td>
							      <td><?php echo $d->pengarang; ?></td>
							      <td><?php echo $d->penerbit; ?></td>
							      <td><?php echo $d->tahun_terbit; ?></td>
							      <td><?php echo $d->lokasi; ?></td>
							      
 </tr>
 <?php  } ?>
 </tbody>
 </table>
