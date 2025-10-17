<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property CI_Loader $load
 * @property CI_Input $input
 * @property CI_Form_validation $form_validation
 * @property Contacto_model $Contacto_model
 */

class Recetas extends CI_Controller {

  public function __construct() {
    parent::__construct();
    // Carga del modelo con alias
    $this->load->model('Recetas_model', 'recetasModel');
  }

  public function index() {
    $data['title'] = 'Recetas y Blogs | La Anita';

    // Menú de navegación
    $data['menu_items'] = array(
      (object) ['titulo' => 'La Anita', 'url' => ''],
      (object) ['titulo' => 'Nosotros', 'url' => 'nosotros'],
      (object) ['titulo' => 'Productos', 'url' => 'productos'],
      (object) ['titulo' => 'Lanzamientos', 'url' => 'lanzamientos'],
      (object) ['titulo' => 'Recetas / Blogs', 'url' => 'recetas'],
      (object) ['titulo' => 'Contacto', 'url' => 'contacto']
    );

    // Obtiene las recetas del modelo
    $data['recetas'] = $this->recetasModel->get_recetas();

    // Carga de vistas
    $this->load->view('templates/header_view', $data);
    $this->load->view('la_anita/recetas_view', $data);
    $this->load->view('templates/footer_view');
  }
}
