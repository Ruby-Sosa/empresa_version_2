<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home'; // Página principal (Inicio)
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['la_anita'] = 'home/index';

$route['nosotros'] = 'nosotros/index';

$route['productos'] = 'productos/index';

$route['lanzamientos'] = 'lanzamientos/index';

$route['recetas'] = 'recetas/index';

$route['contacto'] = 'contacto/index';

$route['admin'] = 'admin/admin';