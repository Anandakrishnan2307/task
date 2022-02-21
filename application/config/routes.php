<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['check_login'] = 'Login/check_login';
$route['home'] = 'Home';
$route['category'] = 'Category/view_category';
$route['add_category'] = 'Category/add_category';
$route['save_category'] = 'Category/save_category';
$route['edit_category/(:num)'] ='Category/edit_category/$1';
$route['update_category'] = 'Category/update_category';
$route['delete_category/(:num)'] ='Category/delete_category/$1';
$route['sub_category'] = 'SubCategory/view_sub_category';
$route['add_sub_category'] = 'SubCategory/add_sub_category';
$route['save_sub_category'] = 'SubCategory/save_sub_category';
$route['edit_sub_category/(:num)'] ='SubCategory/edit_sub_category/$1';
$route['update_sub_category'] = 'SubCategory/update_sub_category';
$route['delete_sub_category/(:num)'] ='SubCategory/delete_sub_category/$1';
