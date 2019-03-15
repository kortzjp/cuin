<?php

class GestorGaleriaModel extends CI_Model {

    public $id;
    public $ruta;
    // public $titulo;
    // public $descripcion;
    public $orden;

    public function __construct() {
        parent::__construct();
    }

    #SUBIR LA RUTA DE LA IMAGEN
    #------------------------------------------------------------

    public function subirImagenGaleriaModel($datos) {

        $data = array('ruta' => $datos['ruta']);

        return $this->db->insert('galeria', $data);
    }

    #MOSTRAR IMAGEN EN LA VISTA
    #---------------------------------------------------------

    public function todosGaleriaModel() {
        $this->db->order_by("orden", "ASC");
        $query = $this->db->get('galeria');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    #ELIMINAR ITEM DEL GALERIA
    #-----------------------------------------------------------

    public function eliminarImagenGaleriaModel($id) {

        $this->db->where('id', $id);
        return $this->db->delete('galeria');
    }

    #ACTUALIZAR ITEM DEL GALERIA
    #-----------------------------------------------------------

    public function actualizarGaleriaModel($data) {

        $this->db->where('id', $data['id']);
        return $this->db->update('galeria', $data);
    }

}
