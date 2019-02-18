  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <h2>Data Peminjaman Buku Perpustakaan</h2>   
                        <h5>Welcome <?php echo $this->session->userdata('username'); ?> , Kamu sedang di halaman Admin </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />








<div class="col-md-12 col-sm-12">
	<a href="<?php echo base_url();?>peminjaman/insert" class="btn btn-info" role="button" style="margin-bottom :1%;">Pinjam Buku</a>
      
      <div class="panel panel-primary">

      						<div class="alert alert-success alert-dismissable">
                             	<?php echo $this->session->flashdata('message');?>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            </div>
           
           <div class="panel-heading">
                Tabel Peminjaman
           </div>
           
                 <div class="panel-body">

                 		 
                      <div class="table-responsive">

           				<table class="table table-striped table-bordered table-hover" id="dataTables-example">

           				    <thead>
								    <tr>
								      <th scope="col">No Pinjam</th>
								      <th scope="col">No Anggota</th>
								      <th scope="col">Jumlah Pinjam</th>
								      <th scope="col">Kode Buku</th>
								      <th scope="col">Judul_Buku</th>
								      <th scope="col">Tanggal Pinjam</th>
								      <th scope="col">Tanggal Kembali</th>
								      <th scope="col">Denda</th>
								      
								      <th scope="col">Aksi</th>

								    </tr>
						    </thead>
							<tbody>
							  		<?php foreach ($data as  $d) { ?>

								  	 	<tr>
									      <th scope="row"><?php echo $d->no_pinjam; ?></th>
									      <td><?php echo $d->no_anggota; ?></td>
									      <td><?php echo $d->jumlah_pinjam; ?></td>
									      <td><?php echo $d->kode_buku; ?></td>
									      <td><?php echo $d->judul_buku; ?></td>
									      <td><?php echo $d->tgl_pinjam; ?></td>
									      <td><?php echo $d->tgl_kembali; ?></td>
									      <td><?php echo $d->denda; ?></td>
									     
									      <td>
									      	  <a href="<?php echo base_url('peminjaman/update/'.$d->no_pinjam) ?>" style="margin-top :1%;" class="btn btn-info"> <i class=" fa fa-refresh "></i></a>
				      	 					  <a href="<?php echo base_url('peminjaman/delete/'.$d->no_pinjam) ?>"class="btn btn-danger"><i class="fa fa-trash"></i></a>
									      </td>
									    </tr>

								    <?php } ?>
							</tbody>
						</table>	
                 </div>
           
           <div class="panel-footer">
               <center>
               			<a href="<?php echo base_url('peminjaman/cetak') ?>"class="btn btn-danger btn-lg"> PDF<i class="fa fa-download"></i></a>
               		    <a href="<?php echo base_url('peminjaman/cetak_excel') ?>"class="btn btn-success btn-lg"><i class="fa fa-download"> Excel</i></a>
               </center>
           </div>
      </div>
</div>