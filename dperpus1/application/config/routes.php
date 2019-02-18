<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']   = 'login/index';
$route['auth']   = 'login/cek_akun';

$route['anggota']   				 = 'master/anggota';
$route['anggota/insert']     		 = 'master/anggota/insert';
$route['anggota/getdata']   		 = 'master/anggota/getdata';
$route['anggota/delete/(:any)']      = 'master/anggota/delete/$1';
$route['anggota/update/(:any)']      = 'master/anggota/update/$1';
$route['anggota/getupdate']       	 = 'master/anggota/getupdate';
$route['anggota/cari']		       	 = 'master/anggota/cari';
$route['anggota/cetak']  		    	 = 'master/anggota/cetak';
$route['anggota/cetak_excel']  		    	 = 'master/anggota/cetak_excel';
$route['anggota/export_excel']  		    	 = 'master/anggota/export_excel';


$route['buku']  		    		 = 'master/buku';
$route['buku/insert']   		     = 'master/buku/insert';
$route['buku/getdata']       		 = 'master/buku/getdata';
$route['buku/delete/(:any)']         = 'master/buku/delete/$1';
$route['buku/update/(:any)']         = 'master/buku/update/$1';
$route['buku/getupdate']      	 	 = 'master/buku/getupdate';;
$route['buku/cari']		       	     = 'master/buku/cari';
$route['buku/cetak']  		    	 = 'master/buku/cetak';
$route['buku/cetak_excel']  		    	 = 'master/buku/cetak_excel';
$route['buku/export_excel']  		    	 = 'master/buku/export_excel';


$route['peminjaman']					     = 'master/peminjaman';
$route['peminjaman/insert'] 	       	     = 'master/peminjaman/insert';
$route['peminjaman/getdata'] 			     = 'master/peminjaman/getdata';
$route['peminjaman/delete/(:any)']           = 'master/peminjaman/delete/$1';
$route['peminjaman/update/(:any)']           = 'master/peminjaman/update/$1';
$route['peminjaman/getupdate']       	     = 'master/peminjaman/getupdate';
$route['peminjaman/cari']	       			 = 'master/peminjaman/cari';
$route['peminjaman/cetak']  		    	 = 'master/peminjaman/cetak';
$route['peminjaman/cetak_excel']  		    	 = 'master/peminjaman/cetak_excel';
$route['peminjaman/export_excel']  		    	 = 'master/peminjaman/export_excel';


$route['pendaftaran']					     = 'master/pendaftaran';
$route['pendaftaran/insert'] 	       	     = 'master/pendaftaran/insert';
$route['pendaftaran/getdata'] 			     = 'master/pendaftaran/getdata';
$route['pendaftaran/delete/(:any)']          = 'master/pendaftaran/delete/$1';
$route['pendaftaran/update/(:any)']          = 'master/pendaftaran/update/$1';
$route['pendaftaran/getupdate']       	     = 'master/pendaftaran/getupdate';
$route['pendaftaran/cari']			       	 = 'master/pendaftaran/cari';
$route['pendaftaran/cetak']  		    	 = 'master/pendaftaran/cetak';
$route['pendaftaran/cetak_excel']  		    	 = 'master/pendaftaran/cetak_excel';
$route['pendaftaran/export_excel']  		    	 = 'master/pendaftaran/export_excel';


$route['mahasiswa']					 = 'master/mahasiswa';
$route['mahasiswa/insert'] 	       	 = 'master/mahasiswa/insert';
$route['mahasiswa/getdata'] 		 = 'master/mahasiswa/getdata';
$route['mahasiswa/delete/(:any)']    = 'master/mahasiswa/delete/$1';
$route['mahasiswa/update/(:any)']    = 'master/mahasiswa/update/$1';
$route['mahasiswa/getupdate']        = 'master/mahasiswa/getupdate';
$route['mahasiswa/cari']		   	 = 'master/mahasiswa/cari';

$route['dosen']					     = 'master/dosen';
$route['dosen/insert'] 	       	     = 'master/dosen/insert';
$route['dosen/getdata'] 			 = 'master/dosen/getdata';
$route['dosen/delete/(:any)']        = 'master/dosen/delete/$1';
$route['dosen/update/(:any)']        = 'master/dosen/update/$1';
$route['dosen/getupdate']       	 = 'master/dosen/getupdate';
$route['dosen/cari']		       	 = 'master/dosen/cari';

$route['user']  		    		 = 'master/user';
$route['user/insert']   		     = 'master/user/insert';
$route['user/getdata']       		 = 'master/user/getdata';
$route['user/cari']		        	 = 'master/user/cari';




//tampilan user
$route['anggota_u']   				 = 'user_p/anggota_u';
$route['anggota_u/insert']     		 = 'user_p/anggota_u/insert';
$route['anggota_u/getdata']   		 = 'user_p/anggota_u/getdata';
$route['anggota_u/delete/(:any)']      = 'user_p/anggota_u/delete/$1';
$route['anggota_u/update/(:any)']      = 'user_p/anggota_u/update/$1';
$route['anggota_u/getupdate']       	 = 'user_p/anggota_u/getupdate';
$route['anggota_u/cari']		       	 = 'user_p/anggota_u/cari';


$route['buku_u']  		    		 = 'user_p/buku_u';
$route['buku_u/insert']   		     = 'user_p/buku_u/insert';
$route['buku_u/getdata']       		 = 'user_p/buku_u/getdata';
$route['buku_u/delete/(:any)']         = 'user_p/buku_u/delete/$1';
$route['buku_u/update/(:any)']         = 'user_p/buku_u/update/$1';
$route['buku_u/getupdate']      	 	 = 'user_p/buku_u/getupdate';;
$route['buku_u/cari']		       	     = 'user_p/buku_u/cari';
$route['buku_u/cetak']  		    	 = 'user_p/buku_u/cetak';

$route['peminjaman_u']					     = 'user_p/peminjaman_u';
$route['peminjaman_u/insert'] 	       	     = 'user_p/peminjaman_u/insert';
$route['peminjaman_u/getdata'] 			     = 'user_p/peminjaman_u/getdata';
$route['peminjaman_u/delete/(:any)']           = 'user_p/peminjaman_u/delete/$1';
$route['peminjaman_u/update/(:any)']           = 'user_p/peminjaman_u/update/$1';
$route['peminjaman_u/getupdate']       	     = 'user_p/peminjaman_u/getupdate';
$route['peminjaman_u/cari']	       			 = 'user_p/peminjaman_u/cari';


$route['pendaftaran_u']					     = 'user_p/pendaftaran_u';
$route['pendaftaran_u/insert'] 	       	     = 'user_p/pendaftaran_u/insert';
$route['pendaftaran_u/getdata'] 			     = 'user_p/pendaftaran_u/getdata';
$route['pendaftaran_u/delete/(:any)']          = 'user_p/pendaftaran_u/delete/$1';
$route['pendaftaran_u/update/(:any)']          = 'user_p/pendaftaran_u/update/$1';
$route['pendaftaran_u/getupdate']       	     = 'user_p/pendaftaran_u/getupdate';
$route['pendaftaran_u/cari']			       	 = 'user_p/pendaftaran_u/cari';




$route['auth']					     = 'auth/cekakun';
$route['auth']					     = 'auth/login';


$route['petugas']					    		 = 'master/petugas';
$route['petugas/insert']					     = 'master/petugas/insert';
$route['petugas/getdata']					     = 'master/petugas/getdata';