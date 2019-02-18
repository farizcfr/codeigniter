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
 
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            
        </nav>   
           <!-- /. NAV TOP  -->
               


 <div class="container">
          <ul class="nav" id="main-menu">
                
                    <img src="<?php echo base_url();?>assets/img/polbis.jpg" class="user-image img-responsive"/>
                    
          </ul>




                <div class="row">
                    <div class="col-md-12">
                    <center> <h2>Digital Perpustakaan Politeknik Perdana Mandiri Purwakarta</h2> </center>
                       
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <hr />
               <h5>Silahkan daftar dan ikuti prosesnya untuk menjadi anggota perpustakaan</h5>

<div class="col-md-12 col-sm-12" >
     <div class="panel panel-primary">

                          
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" name="pesan">×</button>
                                <?php echo $this->session->flashdata('message'); ?>
                            </div>
                        
          <div class="panel-heading">
               Input Data Anda
          </div>
          <?php echo validation_errors();?> 

                <div class="panel-body">
               
                     <form name="registerf" class="form-horizontal" method="POST" action="<?php echo site_url('register/proses_register')?>" >

                     <div class="form-group" style="margin-left: 0%">
                           <label>No Pendaftaran</label>
                           <input type="text" class="form-control" name="no_pendaftaran" value="<?php echo "$kode";?>" readonly>
                      </div>

                     <div class="form-group" style="margin-left: 0%">
                         <label>Nama</label>
                           <input type="text" class="form-control" name="nama_pendaftar" value="<?php echo set_value('nama_pendaftar'); ?>">
                           <?php echo form_error('Nama Pendaftar');?>
                      </div>

                       <div class="form-group" style="margin-left: 0%">
                         <label>Status</label>
                           <select class="form-control" name="status" onchange="enabledisabletext()">
                                <option value="Pilih salah satu">Pilih salah satu</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Dosen">Dosen</option>
                            </select>
                      </div>

                      <div class="form-group" style="margin-left: 0%">
                         <label>Nim</label>
                           <input type="text" class="form-control" name="nim" disabled="true">
                      </div>

                      <div class="form-group" style="margin-left: 0%">
                         <label>Kode Dosen</label>
                           <input type="text" class="form-control" name="kode_dosen" disabled="true">
                      </div>

                      <script type="text/javascript">

                       
                        function enabledisabletext()
                        {
                          if(document.registerf.status.value=='Pilih salah satu')
                                {
                                  document.registerf.nim.disabled=true;
                                  document.registerf.kode_dosen.disabled=true;
                                }

                               if(document.registerf.status.value=='Mahasiswa')
                                {
                                  document.registerf.nim.disabled=false;
                                  document.registerf.kode_dosen.disabled=true;
                                }
                                    if(document.registerf.status.value=='Dosen')
                                    {
                                      document.registerf.nim.disabled=true;
                                      document.registerf.kode_dosen.disabled=false;
                                    }
                       }

                      </script>

                      <div class="form-group" style="margin-left: 0%">
                         <label>Tanggal Daftar</label>
                           <input type="date" class="form-control" name="tgl_daftar" value="<?php echo set_value('tgl_daftar'); ?>">
                      </div>

                </div>
          <div class="panel-footer">
            <input type="submit" class="btn btn-info" value="Daftar" <?php echo $this->session->flashdata('message');?>>
               
               </form>
          </div>
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
