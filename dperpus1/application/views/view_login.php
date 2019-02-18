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




<div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />

                
               <h2> Digital Perpustakaan Politeknik Perdana Mandiri Purwakarta</h2>
               
                <h5>Silahkan Login</h5>
                 <br />
                 <hr/>
                  <div class="row ">
                
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                      
                            <div class="panel-body">


				<form class="form-horizontal" name="login-form" method="post" action="<?php echo base_url();?>login">

					<div class="form-group input-group">
			             <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                         <input type="text" name="username" class="form-control" placeholder="Username" >
                   		 <?= form_error('username') ?>
                    </div>	
                    
                    <div class="form-group input-group">
			             <span class="input-group-addon"><i class="fa fa-key"  ></i></span>
                         <input type="password" name="password" class="form-control" placeholder="password" >
                         <?= form_error('password') ?>
                   		
                    </div>
  					
		

					<input type="submit" class="btn btn-success" value="Login"></button>
<hr />
                    belum daftar ? <a href="<?php echo base_url();?>register" >klik disini </a> <br>
                    
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
