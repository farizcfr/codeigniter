  

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
    <div class="panel panel-primary">
        <div class="panel-heading">
            Input Data Buku
        </div>
            <div class="panel-body">
               <?php echo validation_errors();?> 
     					   <div class="alert alert-success alert-dismissable">
                             	<?php echo $this->session->flashdata('message');?>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            </div>
          
            	<form action="getdata" method="post">
            		
					<div class="form-group">
					<?php echo form_error('kode_buku'); ?>
			    		 <label>Kode Buku</label>
			      		 <input type="text" class="form-control" name="kode_buku" value="<?php echo "$kode";?>" readonly>
			    		

			    	</div>

			    	<div class="form-group">
			    		 <label>Judul Buku</label>
			      		 <input type="text" class="form-control" name="judul_buku">
			      		 <?php echo form_error('judul_buku'); ?>
			    	</div>

			        <div class="form-group">
			           <label>Pengarang</label>
			           <input type="text" class="form-control" name="pengarang">
			            <?= form_error('pengarang') ?>
			        </div>

				      <div class="form-group">
				         <label>Penerbit</label>
				           <input type="text" class="form-control" name="penerbit">
				               <?= form_error('penerbit') ?>
				      </div>

				      <div class="form-group">
				        <label>Tahun Terbit</label>
				       <input type="text" class="form-control" name="tahun_terbit">
				        <?= form_error('tahun_terbit') ?>
				      </div>

				      <div class="form-group">
				          <label for="sel1">Lokasi Buku</label>
				          <select class="form-control" name="lokasi" placeholder="Pilih Jenis Kelamin">>
				            <option>Pilih salah satu</option>
				            <option>Rak 1</option>
				            <option>Rak 2</option>
				            <option>Rak 3</option>
				            <option>Rak 4</option>
				            <option>Rak 5</option>
				          </select>
				           <?= form_error('lokasi') ?>
				      </div>


				      <div class="form-group">
				        <label width="100">File Foto</label>
				        <input type="file" name="image">
				      </div>
      
				
			</div>

        <div class="panel-footer">
           <input type="submit" class="btn btn-info" value="Simpan ">
            </form>
        </div>
    </div>
</div>