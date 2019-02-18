<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Digital Library Of Politeknik Perdana Mandiri Purwakarta</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
         <!-- FONTAWESOME STYLES-->
        <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
         <!-- MORRIS CHART STYLES-->
        <link href="<?php echo base_url();?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
            <!-- CUSTOM STYLES-->
        <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
         <!-- GOOGLE FONTS-->
       <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

        <link href="<?php echo base_url();?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>
<body>

<div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                            <div class="alert alert-success alert-dismissable">
                             <?php echo $this->session->flashdata('message');?>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <a href="<?php echo base_url();?>auth/register" class="alert-link">Kembali</a>.
                            </div>

            


                <br /><br />
                <h2> Digital Perpustakaan Politeknik Perdana Mandiri Purwakarta</h2>
               
                <h5>( Belum punya akun ? Silahkan Buat )</h5>
                 <br />
                 <hr/>
            </div>
        </div>
         <div class="row">
               
               


                <div class="col-md-6 col-md-offset8 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                      
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="<?php echo site_url('auth/proses_buatakun')?>">
<br/>
                                        <div class="form-group input-group">
                                         
                                            <input type="hidden" class="form-control" placeholder="ID User" name="id_user" readonly  />
                                            
                                        </div>

                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control"  name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" > 
                                            <?php echo form_error('username'); ?>
                                        </div>

                                         <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" name="email" placeholder="Email">
                                            <?php echo form_error('email'); ?>
                                        </div>

                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" value="<?php echo set_value('nama'); ?>" placeholder="Nama" name="nama">
                                            <?php echo form_error('nama'); ?>
                                        </div>

                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Masukan Password" name="password" >
                                            <?php echo form_error('password'); ?>
                                        </div>

                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Konfirmasi Password" name="konfirmasi_password">
                                            <?php echo form_error('konfirmasi_password'); ?>
                                     </div>

                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user icon"  ></i></span>
                                            <select class="form-control" name="level" placeholder="Status Keanggotaan">
                                                    <option>Anggota</option>
                                                    </select>
                                        </div>
                                     
                                     <input type="submit" class="btn btn-success" value="Buat Akun"></button>

                                     <script type="text/javascript"></script>

                                    <hr />
                                    Sudah Punya Akun ?  <a href="<?php echo site_url('auth')?>">Login</a>
                                    </form>
                            
                           
                        </div>
                    </div>
                
                
        </div>
    </div>











 <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url();?>assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
       <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>

         <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    
   
</body>
</html>