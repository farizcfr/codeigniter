  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <h2>Data Pendaftaran</h2>   
                        <h5>Welcome <?php echo $this->session->userdata('username'); ?> , Kamu sedang di halaman Admin </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />








<div class="col-md-12 col-sm-12">
	<a href="<?php echo base_url();?>pendaftaran/insert" class="btn btn-info" role="button" style="margin-bottom :1%;">Tambah Data Pendaftaran</a>
     <div class="panel panel-primary">
                        
      					<div class="alert alert-success alert-dismissable">
                             	<?php echo $this->session->flashdata('message');?>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            </div>

          <div class="panel-heading">
               Tabel Pendaftaran
          </div>

                <div class="panel-body">
                      <div class="table-responsive">

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
		  	<thead>
			    <tr>
			      <th scope="col">No Pendaftaran</th>
			      <th scope="col">Status</th>
			      <th scope="col">Nim</th>
			      <th scope="col">Kode Dosen</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Tanggal Daftar</th>
			      <th scope="col">Aksi</th>
			    </tr>
		  	</thead>
		  	<tbody>
		  		<?php foreach ($data as  $d) { ?>

			  	 	<tr>
				      <th scope="row"><?php echo $d->no_pendaftaran; ?></th>
				      <td><?php echo $d->status; ?></td>
				      <td><?php echo $d->nim; ?></td>
				      <td><?php echo $d->kode_dosen; ?></td>
				      <td><?php echo $d->nama_pendaftar; ?></td>
				      <td><?php echo $d->tgl_daftar; ?></td>
				      <td>
				      		<a href="<?php echo base_url('pendaftaran/update/'.$d->no_pendaftaran) ?>" style="margin-top :1%;" class="btn btn-info"> <i class=" fa fa-refresh "></i></a>
				      		<a href="<?php echo base_url('pendaftaran/delete/'.$d->no_pendaftaran) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
				      </td>
				    </tr>

			    <?php } ?>
			</tbody>
		</table>
                </div>
          <div class="panel-footer">
               <center>
               <a href="<?php echo base_url('pendaftaran/cetak') ?>"class="btn btn-danger btn-lg"><i class="fa fa-download"> PDF</i></a>
                <a href="<?php echo base_url('pendaftaran/cetak_excel') ?>"class="btn btn-success btn-lg"><i class="fa fa-download"> Excel</i></a>
               </center>
          </div>
    </div>
</div>