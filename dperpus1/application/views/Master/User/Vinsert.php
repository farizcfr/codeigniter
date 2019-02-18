<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/tlogin.css');?>">
</head>
<body>



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






<div class="col-md-12 col-sm-12">
      <div class="panel panel-primary">
           <div class="panel-heading">
                Input Data User
           </div>
      
                <div class="panel-body">

                     <form action="getdata" method="post">

                           <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                            <input type="text" class="form-control" placeholder="ID User" name="id_user" readonly  />
                                        </div>

                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Username" name="username" <?php echo form_error('Username');?> />
                                        </div>

                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="email" class="form-control" placeholder="Email" name="email" <?php echo form_error('Email');?> />
                                        </div>

                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Nama" name="nama" <?php echo form_error('Nama');?> />
                                        </div>

                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Masukan Password" name="password" <?php echo form_error('Password');?> />
                                        </div>

                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Konfirmasi Password" name="konfirmasi_password" <?php echo form_error('Konfirmasi Password');?> />
                                     </div>

                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user icon"  ></i></span>
                                            <select class="form-control" name="level" placeholder="Status Keanggotaan">
                                                    <option>Anggota</option>
                                                    <option>Admin</option>
                                            </select>
                                        </div>


                     
                </div>
          
           <div class="panel-footer">
                <button type="submit" class="btn btn-info" class=" fa fa-save " value="simpan">Simpan</button>
                </form>
           </div>
      </div>
</div>

</body>
</html>







    