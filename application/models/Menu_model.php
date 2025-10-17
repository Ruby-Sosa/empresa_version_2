<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    
    public function obtener_items_nav() {
        $this->db->select('nombre_item AS titulo, href AS url');
        $this->db->from('cat_menu');
        $this->db->where('estatus', 1);
        $this->db->order_by('orden', 'ASC');

        $query = $this->db->get();

        // Retornar resultados o arreglo vacío
        return ($query && $query->num_rows() > 0) ? $query->result() : [];
    }
}
