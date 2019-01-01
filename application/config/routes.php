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
$route['default_controller'] = 'EndUser_Controller/homepage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*--------------ROUTE USER------------------------------------*/
$route['homepage'] ='EndUser_Controller/homepage';
$route['homepage/(:any)'] ='EndUser_Controller/homepage/$1';

$route ['daftar'] = 'EndUser_Controller/daftar';
$route['proses_daftar'] = 'EndUser_Controller/proses_daftar';
$route['daftarBerhasil/(:any)'] = 'EndUser_Controller/daftarBerhasil/$1';

$route['list'] = 'EndUser_Controller/list';

$route['verifikasi'] = 'EndUser_Controller/verifikasi';
$route['verifikasi/(:any)'] = 'EndUser_Controller/verifikasi/$1';
$route['api/cekUser/(:any)'] = 'EndUser_Controller/apiCekUser/$1';
$route['verifikasiUpload'] = 'EndUser_Controller/uploadBukti';
$route['materi'] = 'EndUser_Controller/materi';
/*------------------------------------------------------------*/


/*------------ROUTE ADMIN-------------------------------------*/
$route['admin/dashboard'] = 'Admin_Controller/index';

$route['admin'] = 'Login_Controller/index';
$route['admin/login'] = 'Login_Controller/index';
$route['admin/auth'] = 'Login_Controller/auth';
$route['admin/logout'] = 'Login_Controller/logout';

$route['admin/akun'] = 'Admin_Controller/akun';
$route['admin/tambahAkun'] = 'Admin_Controller/tambahAkun';
$route['admin/editAkun'] = 'Admin_Controller/editAkun';
$route['admin/editAkunPass'] = 'Admin_Controller/editAkunPass';

$route['registrasi'] = 'Admin_Controller/registrasi';
$route['api/registrasi/statusPembayaran/(:any)/(:any)'] = 'Admin_Controller/apiStatusVerif/$1/$2';

$route['editpendaftar/(:num)'] = 'Admin_Controller/editPendaftar/$1';
$route['api/deleteBukti/(:num)'] = 'Admin_Controller/apiHapusBukti/$1';
$route['editPendaftarSimpan/(:num)'] = 'Admin_Controller/editPendaftarSimpan/$1';

/*$route['detailPeserta'] = 'Admin_Controller/detailPeserta';*/
$route['dataseminarlama'] = 'Admin_Controller/dataseminarlama';
$route['tambahpeserta'] = 'Admin_Controller/tambahPeserta';
$route['editdatalama'] = 'Admin_Controller/editdatalama';

$route['admin/cetakKwitansi/(:num)'] = 'Admin_Controller/cetak/$1';

/*------------------------------------------------------------*/
