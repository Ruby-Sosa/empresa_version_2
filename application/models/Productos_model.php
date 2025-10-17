<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {

    public function get_productos() {
        $query = $this->db->get('productos');  
        return $query->result();
    }

    public function get_random_lanzamientos() {
    $sql = "SELECT TOP 6 * FROM productos WHERE es_lanzamiento = 1 ORDER BY NEWID()";
    $query = $this->db->query($sql);
    return $query->result();
}


}
