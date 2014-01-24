<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['admin'] = "admin/user";

$route['default_controller'] = "home";
$route['404_override'] = '';
$route['la_empresa'] = "home/about";

$route['novedades'] = "home/novedades";
$route['social_media'] = "home/novedades";
$route['ventas_especiales'] = "home/ventas_especiales";
$route['postventa'] = "home/postventa";
$route['postventa/(:any)'] = "home/postventa/$1";
$route['concesionarios'] = "home/concesionarios";
$route['concesionarios/(:any)'] = "home/concesionarios/$1";
$route['contacto'] = "home/contacto";
$route['aviso-de-recall'] = "home/aviso_de_recall";

$route['usados'] = "home/usados";
$route['usado/(:num)/(:any)'] = "home/usado_detalle/$1/$2";
$route['filtrar_usados'] = "home/filter_used";


$route['modelos'] = "home/products";
$route['vehiculo/(:num)/(:any)'] = "home/product_detail/$1";
$route['vehiculo/interior/(:num)/(:any)'] = "home/product_interior/$1";
$route['vehiculo/exterior/(:num)/(:any)'] = "home/product_exterior/$1";
$route['vehiculo/colores/(:num)/(:any)'] = "home/product_colors/$1";
$route['vehiculo/performance-seguridad/(:num)/(:any)'] = "home/product_performance/$1";

$route['admin/olvide-la-clave'] = "admin/user/forgot_password/";
$route['admin/generame-la-clave/(:any)'] = "admin/user/recover_password/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */