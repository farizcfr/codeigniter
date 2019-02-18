  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <h2>Data Mahasiswa</h2>   
                        <h5>Welcome <?php echo $this->session->userdata('username'); ?> , Kamu sedang di halaman Admin </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />







<a href="<?php echo base_url();?>mahasiswa/insert" class="btn btn-info" role="button" style="margin-bottom :1%;">Tambah Data Mahasiswa</a>

 <div class="panel panel-primary">

							<div class="alert alert-success alert-dismissable">
                             	<?php echo $this->session->flashdata('message');?>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            </div>

            <div class="panel-heading">
                Tabel Data Mahasiswa
            </div>
                <div class="panel-body">
                    <div class="table-responsive">

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">

		  	<thead>
			    <tr>
			      <th scope="col">Nim</th>
		 	      <th scope="col">Nama</th>
		 	      <th scope="col">Kode Prodi</th>
			      <th scope="col">Tanggal Lahir</th>
			      <th scope="col">Jenis Kelamin</th>
			      <th scope="col">Jurusan</th>
			      <th scope="col">Email</th>
			      <th scope="col">Aksi</th>
			    </tr>
		  	</thead>


		  	<tbody>
		  		<?php foreach ($data as $d) { ?>

			  	 	<tr>
				      <th scope="row"><?php echo $d->nim; ?></th>
				      <td><?php echo $d->nama_mahasiswa; ?></td>
				      <td><?php echo $d->kode_prodi; ?></td>
				      <td><?php echo $d->ttl; ?></td>
				      <td><?php echo $d->jenis_kelamin; ?></td>
				      <td><?php echo $d->jurusan; ?></td>
				      <td><?php echo $d->email; ?></td>
				      <td>
				       	  <a href="<?php echo base_url('mahasiswa/update/'.$d->nim) ?>" style="margin-top :1%;" class="btn btn-info"> <i class=" fa fa-refresh "></i></a>
				      	  <a href="<?php echo base_url('mahasiswa/delete/'.$d->nim) ?>"class="btn btn-danger"><i class="fa fa-trash"></i></a>
				      </td>
   				    </tr>

			    <?php } ?>

			    
			</tbody>
		</table> 

		<center><a href="<?php echo base_url('buku/cetak') ?>"class="btn btn-danger btn-lg">PDF <i class="fa fa-download"></i></a></center>

        </div>
    </div>
</div>