<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property CI_Input $input
 * @property CI_Form_validation $form_validation
 * @property Contacto_model $Contacto_model
 */
class Contacto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Cargar modelo y librerías
        $this->load->model('Contacto_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = 'Contacto | La Anita';

        // Menú temporal o estático
        $data['menu_items'] = array(
            (object) ['titulo' => 'La Anita', 'url' => ''],
            (object) ['titulo' => 'Nosotros', 'url' => 'nosotros'],
            (object) ['titulo' => 'Productos', 'url' => 'productos'],
            (object) ['titulo' => 'Lanzamientos', 'url' => 'lanzamientos'],
            (object) ['titulo' => 'Recetas / Blogs', 'url' => 'recetas'],
            (object) ['titulo' => 'Contacto', 'url' => 'contacto']
        ); 

        // Reglas de validación
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('correo', 'Correo', 'required|valid_email');
        $this->form_validation->set_rules('mensaje', 'Mensaje', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Mostrar formulario si no pasa validación
            $this->load->view('templates/header_view', $data);
            $this->load->view('la_anita/contacto_view', $data);
            $this->load->view('templates/footer_view');
        } else {
            // Guardar mensaje si todo es correcto
            $mensaje = array(
                'nombre' => $this->input->post('nombre'),
                'correo' => $this->input->post('correo'),
                'asunto' => $this->input->post('asunto'),
                'mensaje' => $this->input->post('mensaje')
            );

            $this->Contacto_model->guardar_mensaje($mensaje);
            $data['exito'] = '¡Gracias por contactarnos! Te responderemos pronto.';

            $this->load->view('templates/header_view', $data);
            $this->load->view('la_anita/contacto_view', $data);
            $this->load->view('templates/footer_view');
        }
    }
}
