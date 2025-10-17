<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property Menu_model $Menu_model
 * @property Carrusel_model $Carrusel_model
 * @property Recetas_model $Recetas_model
 */
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->model('Carrusel_model');
        $this->load->model('Recetas_model'); 
    }

    public function index() {
        $data['titulo_pagina'] = 'Inicio | La Anita';

     
        $data['menu_items'] = $this->Menu_model->obtener_items_nav();
        $data['carrusel'] = $this->Carrusel_model->obtener_slides();

        $data['recetas'] = $this->Recetas_model->get_recetas();

        $this->load->view('templates/header_view', $data);
        $this->load->view('la_anita/inicio_view', $data); 
        $this->load->view('templates/footer_view');
    }
}
