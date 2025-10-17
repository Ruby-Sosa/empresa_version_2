<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property CI_Loader $load
 * @property Menu_model $Menu_model
 * @property Carrusel_model $Carrusel_model
 * @property Productos_model $Productos_model
 * 
 */
class Lanzamientos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Productos_model'); // Usamos los mismos productos
    }

    public function index() {
        $data['titulo_pagina'] = 'Lanzamientos';
        
        // Menú temporal
        $data['menu_items'] = array(
            (object) ['titulo' => 'La Anita', 'url' => ''],
            (object) ['titulo' => 'Nosotros', 'url' => 'nosotros'],
            (object) ['titulo' => 'Productos', 'url' => 'productos'],
            (object) ['titulo' => 'Lanzamientos', 'url' => 'lanzamientos'],
            (object) ['titulo' => 'Recetas / Blogs', 'url' => 'recetas'],
            (object) ['titulo' => 'Contacto', 'url' => 'contacto']
        );

        // Aquí podrías usar un campo extra en la tabla productos (por ejemplo "es_lanzamiento")
        // pero si no lo tienes, mostraremos algunos productos al azar
        $data['lanzamientos'] = $this->Productos_model->get_random_lanzamientos();

        $this->load->view('templates/header_view', $data);
        $this->load->view('la_anita/lanzamientos_view', $data);
        $this->load->view('templates/footer_view');
    }
}
