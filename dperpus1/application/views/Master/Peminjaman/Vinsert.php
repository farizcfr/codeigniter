  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Data Peminjaman Buku Perpustakaan</h2>   
                        <h5>Welcome <?php echo $this->session->userdata('username'); ?> , Kamu sedang di halaman Admin </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />








 <div class="col-md-12 col-sm-12">
      <div class="panel panel-primary">
           
           <div class="panel-heading">
                Input Data Peminjaman
           </div>
           
                 <div class="panel-body">
                    <form action="getdata" method="post">

                      <div class="form-group">
                         <label>No Peminjaman</label>
                         <input type="text" class="form-control" name="no_pinjam" value="<?php echo "$kode";?>"  readonly>
                      </div>

                      <div class="form-group">
                             <label>No Anggota</label>
                             <input type="text" class="form-control" name="no_anggota">
                      </div>

                      <div class="form-group">
                         <label>Jumlah Pinjam</label>
                         <input type="text" class="form-control" name="jumlah_pinjam">
                      </div>


                      <div class="form-group">
                         <label>User ID</label>
                         <input type="text" class="form-control" name="id_user">
                      </div>

                       <div class="form-group">
                             <label>Kode Buku</label>
                             <input type="text" class="form-control" name="kode_buku" >
                       </div>

                        <div class="form-group">
                             <label>Judul Buku</label>
                             <input type="text" class="form-control" name="judul_buku">
                        </div>

                        <div class="form-group">
                             <label>Tanggal Pinjam</label>
                             <input type="date" class="form-control" name="tgl_pinjam">
                        </div>

                        <div class="form-group">
                             <label>Tanggal Kembali</label>
                             <input type="date" class="form-control" name="tgl_kembali">
                        </div>

                        <div class="form-group">
                             <label>Denda</label>
                             <input type="text" class="form-control" name="denda">
                        </div>

                   



                 </div>
           
           <div class="panel-footer">
                <input type="submit" class="btn btn-info" value="Simpan ">
                    </form>
           </div>
      </div>
</div>