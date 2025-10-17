<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recetas_model extends CI_Model {

  public function get_recetas() {
    
    return [
      (object)[
        'titulo' => 'Cochinita Pibil',
        'descripcion' => 'Tradicional receta yucateca con achiote y naranja agria.',
        'imagen' => 'assets/img/recetas/cochinita.png'
      ],
      (object)[
        'titulo' => 'Pollo al Achiote',
        'descripcion' => 'Delicioso pollo marinado con condimentos naturales La Anita.',
        'imagen' => 'assets/img/recetas/pollo_achiote.png'
      ],
      (object)[
        'titulo' => 'Salsa Habanera Verde',
        'descripcion' => 'Salsa fresca con el auténtico sabor del chile habanero.',
        'imagen' => 'assets/img/recetas/habanera_verde.png'
      ]
    ];
  }
}
