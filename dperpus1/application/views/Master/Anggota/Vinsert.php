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
    <div class="panel panel-primary">
      
      <div class="panel-heading">
          Input Data Anggota
      </div>
      
          <div class="panel-body">
            
            <form action="getdata" method="post">

                  <div class="form-group">
                     <label>No Anggota</label>
                       <input type="text" class="form-control" name="no_anggota" value="<?php echo "$kode";?>" readonly>
                  </div>

                  <div class="form-group">
                     
                       <input type="hidden" class="form-control" name="no_pendaftaran" >
                  </div>

                  <div class="form-group">
                     <label>Nama Anggota</label>
                       <input type="text" class="form-control" name="nama_anggota" aria-describedby="emailHelp" placeholder="Isi nama anggota">
                  </div>

                  <div class="form-group">
                     <label>Tanggal Lahir</label>
                       <input type="date" class="form-control" name="ttl">
                  </div>

                  <div class="form-group">
                      <label for="sel1">Jenis Kelamin</label>
                      <select class="form-control" name="jenis_kelamin" placeholder="Pilih Jenis Kelamin">
                        <option>Pilih salah satu</option>
                        <option>Pria</option>
                        <option>Wanita</option>
                      </select>
                  </div>


                  <div class="form-group">
                     <label for="exampleInputEmail1">Email</label>
                       <input type="text" class="form-control" name="email">
                  </div>

                 <div class="form-group">
                    <label for="sel1">Status</label>
                    <select class="form-control" name="status">
                      <option>Pilih salah satu</option>
                      <option>Mahasiswa</option>
                      <option>Dosen</option>
                    </select>
                </div>

                <div class="form-group">
                  <label width="100">File Foto</label>
                  <input type="file" name="image">
                </div>
                       
          </div>
      
          <div class="panel-footer">
               <input type="submit" class="btn btn-info fa fa-save" value="Simpan ">
               </form> 
          </div>
      
      </div>
</div>