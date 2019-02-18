  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                       <h2>Data User Account</h2>   
                        <h5>Welcome <?php echo $this->session->userdata('username'); ?> , Kamu sedang di halaman Admin </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />
	<a href="<?php echo base_url();?>user/insert" class="btn btn-info" role="button" style="margin-bottom :1%;">Tambah Data User</a>


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
			    <th scope="col">ID User</th>
			      <th scope="col">Username</th>
			      <th scope="col">Password</th>
			      <th scope="col">Level</th>
			    </tr>
		  	</thead>
		  	<tbody>
		  		<?php foreach ($data as  $d) { ?>

			  	 	<tr class="table-light">
				      <th scope="row"><?php echo $d->id_user; ?></th>
				      <td><?php echo $d->username; ?></td>
				      <td><?php echo $d->password; ?></td>
				      <td><?php echo $d->level; ?></td>
				    </tr>

			    <?php } ?>
			</tbody>
		</table>	

		<center><a href="<?php echo base_url('user/cetak') ?>"class="btn btn-danger btn-lg"><i class="fa fa-download"></i></a></center>
           </div>
                </div>
        </div>