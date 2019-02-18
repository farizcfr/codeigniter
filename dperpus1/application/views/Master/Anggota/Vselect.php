  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Anggota Perpustakaan</h2>   
                        <h5>Welcome <?php echo $this->session->userdata('username'); ?> , Kamu sedang di halaman Admin </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />





                  
<div class="col-md-12 col-sm-12">
<a href="<?php echo base_url();?>anggota/insert" class="btn btn-info" role="button" style="margin-bottom :1%;">Tambah Anggota</a>

      <div class="panel panel-primary">

      						<div class="alert alert-success alert-dismissable">
                             	<?php echo $this->session->flashdata('message');?>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            </div>

           <div class="panel-heading">
                Tabel Anggota
           </div>

                 <div class="panel-body">
                      <div class="table-responsive">

                      		 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
								  	<thead>
									    <tr>
									      <th scope="col">No Anggota</th>
									      
									      <th scope="col">Nama</th>
									      <th scope="col">Tanggal Lahir</th>
									      <th scope="col">Jenis Kelamin</th>
									      <th scope="col">Email</th>
									      <th scope="col">Status</th>
									      <th scope="col">Image</th>
									      <th scope="col">Aksi</th>
									    </tr>
								  	</thead>
								  	<tbody>
								  		<?php foreach ($data as  $d) { ?>

									  	 	<tr>
										      <th scope="row"><?php echo $d->no_anggota; ?></th>
										     
										      <td><?php echo $d->nama_anggota; ?></td>
										      <td><?php echo $d->ttl; ?></td>
										      <td><?php echo $d->jenis_kelamin; ?></td>
										      <td><?php echo $d->email; ?></td>
										      <td><?php echo $d->status; ?></td>
										      <td><?php echo $d->image; ?></td>
										      <td>
										      		<a href="<?php echo base_url('anggota/update/'.$d->no_anggota) ?>"  style="margin-top :1%;" class="btn btn-info"><i class=" fa fa-refresh "></i></a>
										      		<a href="<?php echo base_url('anggota/delete/'.$d->no_anggota) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
										      </td>
										    </tr>

									    <?php } ?>
									</tbody>
								</table>

                      </div>
                 </div>

                 <div class="panel-footer">
                       <center>
                     		  <a href="<?php echo base_url('anggota/cetak') ?>"class="btn btn-danger btn-lg"><i class="fa fa-download"> PDF</i></a>
                     		  <a href="<?php echo base_url('anggota/cetak_excel') ?>"class="btn btn-success btn-lg"><i class="fa fa-download"> Excel</i></a>
                       </center>
                 </div>
      </div>
</div>

                   

           

		

