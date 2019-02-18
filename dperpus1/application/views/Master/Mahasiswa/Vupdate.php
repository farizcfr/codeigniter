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








<div class="col-md-12 col-sm-12">
     <div class="panel panel-primary">

          <div class="panel-heading">
               Rubah Data Mahasiswa
          </div>

              <div class="panel-body">
                   <form action="<?php echo base_url('mahasiswa/getupdate') ?>" method="post">
                         <form action="getdata" method="post">

                   <div class="form-group">
                       <label>Nim</label>
                       <input type="text" class="form-control" name="nim" value="<?php echo $data->nim; ?>">
                   </div>

                   <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_mahasiswa" value="<?php echo $data->nama_mahasiswa; ?>">
                   </div>

                   <div class="form-group">
                        <label>Kode Prodi</label>
                        <input type="text" class="form-control" name="kode_prodi">
                   </div>

                   <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="ttl" value="<?php echo $data->ttl; ?>">
                   </div>

                   <div class="form-group">
                        <label for="sel1">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" value="<?php echo $data->jenis_kelamin; ?>">
                            <option>Pilih salah satu</option>
                            <option>Pria</option>
                            <option>Wanita</option>
                        </select>
                    </div>

                    <div class="form-group">
                          <label for="sel1">Jurusan</label>
                            <select class="form-control" name="jurusan" value="<?php echo $data->jurusan; ?>">
                                <option>Pilih salasatu</option>
                                <option>S1 Managemen Bisnis</option>
                                <option>S1 Akuntansi</option>
                                <option>D3 Managemen Informatika</option>
                                <option>D3 Sekertaris</option>
                                <option>D3 Administrasi Bisnis</option>
                            </select>
                      </div>


                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $data->email; ?>">
                    </div>

              </div>

          <div class="panel-footer">
               <input type="submit" class="btn btn-info" value="Simpan ">
                          </form>
                   </form>
          </div>

    </div>
</div>