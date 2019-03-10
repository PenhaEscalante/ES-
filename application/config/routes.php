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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//rutas para empresa
$route['Empresas']['get'] = 'Empresas/index';
$route['Empresas/(:num)']['get'] = 'Empresas/find/$l';
$route['Empresas']['post'] = 'Empresas/index';
$route['Empresas/(:num)']['put'] = 'Empresas/index/$l';
$route['Empresas/(:num)']['delete'] = 'Empresas/index/$l';

//rutas para podcast
$route['Podcast']['get'] = 'Podcast/index';
$route['Podcast/(:num)']['get'] = 'Podcast/find/$l';
$route['Podcast']['post'] = 'Podcast/index';
$route['Podcast/(:num)']['put'] = 'Podcast/index/$l';
$route['Podcast/(:num)']['delete'] = 'Podcast/index/$l';

//rutas para productos
$route['Productos']['get'] = 'Productos/index';
$route['Productos/(:num)']['get'] = 'Productos/find/$l';
$route['Productos']['post'] = 'Productos/index';
$route['Productos/(:num)']['put'] = 'Productos/index/$l';
$route['Productos/(:num)']['delete'] = 'Productos/index/$l';

//rutas para usuarios
$route['Usuarios']['get'] = 'Usuarios/index';
$route['Usuarios/(:num)']['get'] = 'Usuarios/find/$l';
$route['Usuarios']['post'] = 'Usuarios/index';
$route['Usuarios/(:num)']['put'] = 'Usuarios/index/$l';
$route['Usuarios/(:num)']['delete'] = 'Usuarios/index/$l';