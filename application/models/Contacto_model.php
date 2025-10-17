<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto_model extends CI_Model {

    public function guardar_mensaje($data) {
        return $this->db->insert('mensajes_contacto', $data);
    }
}
