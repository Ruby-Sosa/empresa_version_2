<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrusel_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function obtener_slides() {
        $this->db->select('c.id, c.href, c.orden, i.imagen_url');
        $this->db->from('carousel c');
        $this->db->join('cat_imagenes i', 'i.id = c.id_imagen', 'inner');
        $this->db->order_by('c.orden', 'ASC');
        
        $query = $this->db->get();
        return ($query && $query->num_rows() > 0) ? $query->result() : [];
    }
}
