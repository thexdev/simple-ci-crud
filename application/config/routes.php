<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'member';
$route['member/add'] = 'member/add';
$route['member/insert'] = 'member/insert';
$route['member/edit/(:any)'] = 'member/edit/$1';
$route['member/update/(:any)'] = 'member/update/$1';
$route['member/delete/(:any)'] = 'member/delete/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
