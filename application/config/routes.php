<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home'; // Página principal (Inicio)
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* ============================
   RUTAS PERSONALIZADAS
============================ */

// Página de inicio
$route['la_anita'] = 'home/index';

// Página "Nosotros"
$route['nosotros'] = 'nosotros/index';

// Página "Productos"
$route['productos'] = 'productos/index';

// Página "Lanzamientos"
$route['lanzamientos'] = 'lanzamientos/index';

// Página "Recetas / Blogs"
$route['recetas'] = 'recetas/index';

// Página "Contacto"
$route['contacto'] = 'contacto/index';

$route['admin'] = 'admin/admin';