  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Buku Perpustakaan</h2>   
                        <h5>Welcome <?php echo $this->session->userdata('username'); ?> , Kamu sedang di halaman Admin </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />








<div class="col-md-12 col-sm-12">

<a href="<?php echo base_url();?>buku/insert" class="btn btn-info" role="button" style="margin-bottom :1%;"> Tambah Data Buku</a>

    <div class="panel panel-primary">

    						<div class="alert alert-success alert-dismissable">
                             	<?php echo $this->session->flashdata('message');?>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            </div>

        <div class="panel-heading">
             Tabel Buku
        </div>

              <div class="panel-body">
              	 <div class="table-responsive">
					
              	 	<table class="table table-striped table-bordered table-hover" id="dataTables-example">

              	 		<thead>
						    <tr>
						      <th scope="col">Kode Buku</th>
					 	      <th scope="col">Judul Buku</th>
						      <th scope="col">Pengarang</th>
						      <th scope="col">Penerbit</th>
						      <th scope="col">Tahun Terbit</th>
						      <th scope="col">Lokasi</th>
						      <th scope="col">Image</th>
						      <th scope="col">Aksi</th>
						    </tr>
					  	</thead>
					  	<tbody>
					  		<?php foreach ($data as $d) { ?>

						  	 	<tr>
							      <th scope="row"><?php echo $d->kode_buku; ?></th>
							      <td><?php echo $d->judul_buku; ?></td>
							      <td><?php echo $d->pengarang; ?></td>
							      <td><?php echo $d->penerbit; ?></td>
							      <td><?php echo $d->tahun_terbit; ?></td>
							      <td><?php echo $d->lokasi; ?></td>
							      <td><?php echo $d->image; ?></td>
							      <td>
							      	  <a href="<?php echo base_url('buku/update/'.$d->kode_buku) ?>" style="margin-top :1%;" class="btn btn-info"> <i class=" fa fa-refresh "></i></a>
							      	  <a href="<?php echo base_url('buku/delete/'.$d->kode_buku) ?>"class="btn btn-danger"><i class="fa fa-trash"></i></a>
							      </td>
			   				    </tr>

						    <?php } ?>

			    
						</tbody>
					</table> 

									       
                 </div>
        	  </div>

        	  <div class="panel-footer">
                   <center>
                  		 <a href="<?php echo base_url('buku/cetak') ?>"class="btn btn-danger btn-lg"><i class="fa fa-download"> PDF</i></a>
                  		 <a href="<?php echo base_url('buku/cetak_excel') ?>"class="btn btn-success btn-lg"><i class="fa fa-download"> Excel</i></a>
                   </center>
              </div>
    </div>
</div>

