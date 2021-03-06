  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <h2>Data Dosen</h2>   
                        <h5>Welcome <?php echo $this->session->userdata('username'); ?> , Kamu sedang di halaman Admin </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />








<div class="col-md-12 col-sm-12">
<a href="<?php echo base_url();?>dosen/insert" class="btn btn-info" role="button" style="margin-bottom :1%;">Tambah Data Dosen</a>
     <div class="panel panel-primary">
     
     						<div class="alert alert-success alert-dismissable">
                             	<?php echo $this->session->flashdata('message');?>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            </div>

          <div class="panel-heading">
               Tabel Dosen
          </div>
          
               <div class="panel-body">

                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          			  		<thead>
							    <tr>
							      <th scope="col">Kode Dosen</th>
							      <th scope="col">Nama</th>
							      <th scope="col">Kode Prodi</th>
							      <th scope="col">Tanggal Lahir</th>
							      <th scope="col">Jenis Kelamin</th>
			      				  <th scope="col">Email</th>
							      <th scope="col">Aksi</th>
							    </tr>
						  	</thead>

						  	<tbody>
						  		<?php foreach ($data as  $d) { ?>

							  	 	<tr>
								      <th scope="row"><?php echo $d->kode_dosen; ?></th>
								      <td><?php echo $d->nama_dosen; ?></td>
								      <td><?php echo $d->kode_prodi; ?></td>
								      <td><?php echo $d->ttl; ?></td>
								      <td><?php echo $d->jenis_kelamin; ?></td>
								      <td><?php echo $d->email; ?></td>
								      <td>
								      		<a href="<?php echo base_url('dosen/update/'.$d->kode_dosen) ?>" style="margin-top :1%;" class="btn btn-info"> <i class=" fa fa-refresh "></i></a>
								      		<a href="<?php echo base_url('dosen/delete/'.$d->kode_dosen) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								      </td>
								    </tr>

							    <?php } ?>
							</tbody>
					  </table>	


               </div>
          
          <div class="panel-footer">
                <center><a href="<?php echo base_url('dosen/cetak') ?>"class="btn btn-danger btn-lg"><i class="fa fa-download"> PDF</i></a></center>
          </div>
     </div>
</div>