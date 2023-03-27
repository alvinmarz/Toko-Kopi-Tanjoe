<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['hapus/(:any)'] = 'admin/data_barang/hapus/$1';




$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
