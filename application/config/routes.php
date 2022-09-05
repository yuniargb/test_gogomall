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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



// test
$route['test'] = 'TestController/index';
$route['test/create'] = 'TestController/form';
$route['test/edit/(:any)'] = 'TestController/form/$1';
$route['test/store'] = 'TestController/store';
$route['test/update/(:any)'] = 'TestController/update/$1';
$route['test/delete/(:any)'] = 'TestController/delete/$1';

// Customer
$route['customer'] = 'CustomerController/index';
$route['customer/create'] = 'CustomerController/form';
$route['customer/edit/(:any)'] = 'CustomerController/form/$1';
$route['customer/store'] = 'CustomerController/store';
$route['customer/update/(:any)'] = 'CustomerController/update/$1';
$route['customer/delete/(:any)'] = 'CustomerController/delete/$1';

// Sales
$route['sales'] = 'SalesController/index';
$route['sales/create'] = 'SalesController/form';
$route['sales/edit/(:any)'] = 'SalesController/form/$1';
$route['sales/store'] = 'SalesController/store';
$route['sales/update/(:any)'] = 'SalesController/update/$1';
$route['sales/delete/(:any)'] = 'SalesController/delete/$1';

// List
$route['list'] = 'ListController/index';