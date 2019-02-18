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
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>home"><?php echo $this->session->userdata('username'); ?></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  

&nbsp;  <a href="<?php echo base_url();?>login" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">

                    <img src="<?php echo base_url();?>assets/img/logo.jpg" >
                    </li>
                
                   
                    <li>
                        <a class="active-menu"  href="<?php echo base_url();?>home"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>   
   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Master Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>buku">Data Buku</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>anggota">Data Anggota Perpustakaan</a>
                            </li>
                            <li>
                                <a href="#">Master Data Akademik<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="<?php echo base_url();?>pendaftaran">Data Pendaftaran</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>mahasiswa">Data Mahasiswa</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>dosen">Data Dosen</a>
                                    </li>

                                </ul>
                            </li>

                        </ul>

                            <li>
                                 <a   href="<?php echo base_url();?>peminjaman"><i class="fa fa-laptop fa-3x"></i>Peminjaman</a>
                            </li> 

                            <li>
                               <a   href="<?php echo base_url();?>user"><i class="fa fa-user fa-3x"></i>User</a>
                            </li> 

                      </li>   
                </ul>
               
            </div>
            
        </nav>  