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

        $data = array('ruta' => $datos['ruta']);

        return $this->db->insert('slide', $data);
    }

    #MOSTRAR IMAGEN EN LA VISTA
    #---------------------------------------------------------

    public function todosSlideModel() {
        $this->db->order_by("orden", "ASC");
        $query = $this->db->get('slide');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    #ELIMINAR ITEM DEL SLIDE
    #-----------------------------------------------------------

    public function eliminarSlideModel($id) {

        $this->db->where('id', $id);
        return $this->db->delete('slide');
    }

    #ACTUALIZAR ITEM DEL SLIDE
    #-----------------------------------------------------------

    public function actualizarSlideModel($data) {

        $this->db->where('id', $data['id']);
        return $this->db->update('slide', $data);
    }

}
