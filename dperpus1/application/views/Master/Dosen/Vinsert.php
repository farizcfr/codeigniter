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
     <div class="panel panel-primary">
     
          <div class="panel-heading">
               Input Data Pendaftaran
          </div>
          
               <div class="panel-body">
                    
                    <form action="getdata" method="post">

                    <div class="form-group">
                         <label>Kode Dosen</label>
                         <input type="text" class="form-control" name="kode_dosen">
                    </div>

                    <div class="form-group">
                         <label>Nama</label>
                         <input type="text" class="form-control" name="nama_dosen">
                    </div>

                    <div class="form-group">
                         <label>Kode Prodi</label>
                         <input type="text" class="form-control" name="kode_prodi">
                    </div>

                    <div class="form-group">
                         <label>Tanggal Lahir</label>
                         <input type="date" class="form-control" name="ttl">
                    </div>

                    <div class="form-group">
                        <label for="sel1">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin">
                          <option>Pilih salah satu</option>
                          <option>Pria</option>
                          <option>Wanita</option>
                        </select>
                    </div>

                    <div class="form-group">
                         <label>Email</label>
                         <input type="text" class="form-control" name="email">
                    </div>
         
               </div>
          
               </div>
          
          <div class="panel-footer">
               <input type="submit" class="btn btn-info" value="Simpan ">
                    </form>
          </div>
     </div>
</div>