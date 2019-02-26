<?php

class GestorSlideModel extends CI_Model {

    public $id;
    public $ruta;
    public $titulo;
    public $descripcion;
    public $orden;

    public function __construct() {
        parent::__construct();
    }

    #SUBIR LA RUTA DE LA IMAGEN
    #------------------------------------------------------------

    public function subirImagenSlideModel($datos) {

        $data = array('ruta' => $datos);

        return $this->db->insert('slide', $data);
    }

    #MOSTRAR IMAGEN EN LA VISTA
    #---------------------------------------------------------

    public function todosSlideModel() {

        $query = $this->db->get('slide');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

}
