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

     <div class="panel panel-primary">
                        
          <div class="panel-heading">
               Rubah Data Pendaftaran
          </div>

                <div class="panel-body">
                    <form action="<?php echo base_url('anggota/getupdate') ?>" method="post">
                        <form action="getdata" method="post">
                     
                     <div class="form-group">
                         <label>No Pendaftaran</label>
                           <input type="text" class="form-control" name="no_pendaftaran" readonly>
                      </div>

                       <div class="form-group">
                         <label>Status</label>
                           <select class="form-control" name="status">
                                <option>Pilih salasatu</option>
                                <option>Mahasiswa</option>
                                <option>Dosen</option>
                            </select>
                      </div>

                      <div class="form-group">
                         <label>Nim</label>
                           <input type="text" class="form-control" name="nim">
                      </div>

                      <div class="form-group">
                         <label>Kode Dosen</label>
                           <input type="text" class="form-control" name="kode_dosen">
                      </div>

                      <div class="form-group">
                         <label>nama</label>
                           <input type="text" class="form-control" name="nama_pendaftar">
                      </div>

                      <div class="form-group">
                         <label>Tanggal Daftar</label>
                           <input type="date" class="form-control" name="tgl_daftar">
                      </div>
                </div>
          <div class="panel-footer">
                      <input type="submit" class="btn btn-info" value="Simpan ">
                        </form>
                   </form>
          </div>
    </div>
</div>