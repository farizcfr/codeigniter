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



          <div class="panel-heading">
               Input Data Anda
          </div>
          
                <div class="panel-body">
               
                     <form name="f_petugas" class="form-horizontal" method="POST" action="getdata" >
                           <label>Kode Petugas</label>
                           <input type="text" class="form-control" name="kode_petugas" readonly>
                      </div>

                     <div class="form-group" style="margin-left: 0%">
                         <label>Nama Petugas</label>
                           <input type="text" class="form-control" name="nama_petugas">
                      </div>

                       <div class="form-group" style="margin-left: 0%">
                         <label>Status</label>
                           <select class="form-control" name="status" onchange="enabledisabletext()">
                                <option value="Pilih salah satu">Pilih salah satu</option>
                                <option value="Direktur">Direktur</option>
                                <option value="Staff">Staff</option>
                                <option value="Operator">Operator</option>
                            </select>
                      </div>
               <div class="panel-footer">
                    <input type="submit" class="btn btn-info" value="Simpan ">
                     </form>
               </div>
</div>
</div>
             </div>
      </div>
</div>
