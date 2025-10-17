<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property Menu_model $Menu_model
 * @property Carrusel_model $Carrusel_model
 * @property Productos_model $Productos_model
 */

class Nosotros extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['titulo_pagina'] = 'Nosotros';

        // Menú temporal o estático
        $data['menu_items'] = array(
            (object) ['titulo' => 'La Anita', 'url' => ''],
            (object) ['titulo' => 'Nosotros', 'url' => 'nosotros'],
            (object) ['titulo' => 'Productos', 'url' => 'productos'],
            (object) ['titulo' => 'Lanzamientos', 'url' => 'lanzamientos'],
            (object) ['titulo' => 'Recetas/Blogs', 'url' => 'recetas'],
            (object) ['titulo' => 'Contacto', 'url' => 'contacto']
        );

        $this->load->view('templates/header_view', $data);
        $this->load->view('la_anita/nosotros_view');
        $this->load->view('templates/footer_view');
    }

}
