<?php
class Carreras_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listarCategorias()
    {
        $this->db->select
        (
            'PkCategoria,
             categoria'
        );

        $this->db->from('5atbl_categoria');

        $query = $this->db->get();

        if($query->num_rows()>0)
        {
            return $query->result();
        }else
        {
            return false;
        }
    }

    public function insertarCarrera($datos)
    {
        $this->db->insert('5acat_carrera',$datos);

        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}