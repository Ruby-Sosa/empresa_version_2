<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property CI_Loader $load
 * @property Menu_model $Menu_model
 * @property Productos_model $Productos_model
 * @property Carrusel_model $Carrusel_model
 */
class Productos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Productos_model');
    }

    public function index() {
        // Título de la página
        $data['titulo_pagina'] = 'Productos';

        // Menú temporal o estático
        $data['menu_items'] = array(
            (object) ['titulo' => 'La Anita', 'url' => ''],
            (object) ['titulo' => 'Nosotros', 'url' => 'nosotros'],
            (object) ['titulo' => 'Productos', 'url' => 'productos'],
            (object) ['titulo' => 'Lanzamientos', 'url' => 'lanzamientos'],
            (object) ['titulo' => 'Recetas / Blogs', 'url' => 'recetas'],
            (object) ['titulo' => 'Contacto', 'url' => 'contacto']
        ); // ← AQUÍ FALTABA EL CIERRE DEL ARREGLO

        // Obtiene los productos desde el modelo
        $data['productos'] = $this->Productos_model->get_productos();

        // Carga las vistas
        $this->load->view('templates/header_view', $data);
        $this->load->view('la_anita/productos_view', $data);
        $this->load->view('templates/footer_view');
    }
}
