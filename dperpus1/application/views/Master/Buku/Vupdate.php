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
               Rubah Data Buku
          </div>
          
               <div class="panel-body">
                    <form action="<?php echo base_url('buku/getupdate') ?>" method="post">

    <div class="form-group">
         <label>Kode Buku</label>
           <input type="text" value="<?php echo $data->kode_buku; ?>" class="form-control" name="kode_buku">
      </div>

      <div class="form-group">
         <label>Judul Buku</label>
           <input type="text" value="<?php echo $data->judul_buku; ?>" class="form-control" name="judul_buku">
      </div>

      <div class="form-group">

      <div class="form-group">
         <label>Pengarang</label>
           <input type="text" value="<?php echo $data->pengarang; ?>" class="form-control" name="pengarang">
      </div>

      <div class="form-group">
         <label>Penerbit</label>
           <input type="text" value="<?php echo $data->penerbit; ?>" class="form-control" name="penerbit">
      </div>

     <div class="form-group">
         <label>Tahun Terbit</label>
           <input type="text" value="<?php echo $data->tahun_terbit; ?>" class="form-control" name="tahun_terbit">
      </div>
      <div class="form-group">
          <label for="sel1">Lokasi Buku</label>
          <select class="form-control" value="<?php echo $data->lokasi; ?>" name="lokasi">
            <option>Pilih salah satu</option>
            <option>Rak 1</option>
            <option>Rak 2</option>
            <option>Rak 3</option>
            <option>Rak 4</option>
            <option>Rak 5</option>
          </select>
      </div>

      <div class="form-group">
        <label width="100">File Foto</label>
        <input type="file" value="<?php echo $data->image; ?>" name="image">
      </div>
               </div>
          
               <div class="panel-footer">
                    <input type="submit" class="btn btn-info" value="Simpan ">
                    </form>
               </div>
     </div>
</div>