<?php
class Carreras_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listarCarrera()
    {
        $this->db->select
        (
            'PkCarrera,
             carrera'
        );

        $this->db->from('5acat_carrera');

        $query = $this->db->get();

        if($query->num_rows()>0)
        {
            return $query->result();
        }else
        {
            return false;
        }
    }
    public function carreraNoRepetida($clave)
    {

        $this->db->select(
            'clave'
        );
        $this->db->from('5acat_carrera');
        $this->db->where('clave',$clave);
        $query = $this->db->get();

        if(!$query->num_rows()>0)
        {
            return true;
        }else
        {
            return false;
        }
    }
    public function categoriaNoRepetida($categoria)
    {

        $this->db->select(
            'categoria'
        );
        $this->db->from('5atbl_categoria');
        $this->db->where('categoria',$categoria);
        $query = $this->db->get();

        if(!$query->num_rows()>0)
        {
            return true;
        }else
        {
            return false;
        }
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
    public function listarAllCarrerras()
    {


        $this->db->from('5acat_carrera');
        //$this->db->where();
        $this->db->join('5atbl_detalleCarrera','5acat_carrera.pkCarrera = 5atbl_detalleCarrera.fkCarrera');
        $query = $this->db->get();

        if($query->num_rows()>0)
        {
            return $query->result();
        }else
        {
            return false;
        }
    }
    public function listarPorCategoria($dato,$categoria)
    {


        $this->db->from('5acat_carrera');
        //$this->db->where();
        $this->db->join('5atbl_detalleCarrera', '5acat_carrera.pkCarrera = 5atbl_detalleCarrera.fkCarrera');
        if ($categoria != ''){
            $this->db->where('FkCategoria', $categoria);
    }
        $this->db->like('carrera',$dato);
        $query = $this->db->get();

        if($query->num_rows()>0)
        {
            return $query->result();
        }else
        {
            return false;
        }
    }
    public function listarPorCategoriaSelect($categoria)
    {


        $this->db->from('5acat_carrera');
        //$this->db->where();
        $this->db->join('5atbl_detalleCarrera', '5acat_carrera.pkCarrera = 5atbl_detalleCarrera.fkCarrera');
        if($categoria != "")
        {
            $this->db->where('FkCategoria', $categoria);
        }

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
            return $this->db->insert_id();
        }
        else
        {
            return false;
        }
    }
    public function updateCarrera($datosCarrera,$clave)
    {
        $this->db->where('clave',$clave);

        if( $this->db->update('5acat_carrera',$datosCarrera))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function insertarOpinion($datos)
    {
        $this->db->insert('5atbl_opiniones',$datos);


        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function updateDetalleCarrera($detalleCarrera,$PkCarrera)
    {
        $this->db->where('FkCarrera',$PkCarrera);

        if($this->db->update('5atbl_detallecarrera',$detalleCarrera))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function insertarDetalleCarrera($datos)
    {
        $this->db->insert('5atbl_detallecarrera',$datos);

        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function insertarCategoria($categoria)
    {
        $this->db->insert('5atbl_categoria',$categoria);

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