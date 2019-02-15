<?php
/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 2/1/2019
 * Time: 3:03 PM
 */
class Course_model extends CI_Model
{
 public function __construct()
 {
     parent::__construct();
 }
    public function listarCarreras()
 {
      $this->db->select
      (
          ' 5acat_carrera.clave,
            5acat_carrera.FkCategoria,
            5acat_carrera.carrera,
            5atbl_detallecarrera.presentacion,
            5atbl_detallecarrera.colegiatura,
            5atbl_detallecarrera.apertura,
            5atbl_detallecarrera.duracion,
            5atbl_detallecarrera.imagen,
            5atbl_categoria.PkCategoria,
            5atbl_categoria.categoria'
      );

     $this->db->from('5acat_carrera');
     $this->db->join('5atbl_categoria','5acat_carrera.FkCategoria = 5atbl_categoria.PkCategoria');
     $this->db->join('5atbl_detallecarrera','5acat_carrera.PkCarrera = 5atbl_detallecarrera.FkCarrera');

     //$this->db->where('campo','condicion');
     //$this->db->order_by('campo');
    // $this->db->limit();
     $query = $this->db->get();

     if($query->num_rows()>0)
     {
         return $query->result();
     }else
         {
             return false;
         }
 }
    public function listarUltimasTres()
    {
        $this->db->select
        (
            ' 5acat_carrera.clave,
            5acat_carrera.FkCategoria,
            5acat_carrera.carrera,
            5atbl_detallecarrera.presentacion,
            5atbl_detallecarrera.colegiatura,
            5atbl_detallecarrera.apertura,
            5atbl_detallecarrera.duracion,
            5atbl_detallecarrera.imagen,
            5atbl_categoria.PkCategoria,
            5atbl_categoria.categoria'
        );

        $this->db->from('5acat_carrera');
        $this->db->join('5atbl_categoria','5acat_carrera.FkCategoria = 5atbl_categoria.PkCategoria');
        $this->db->join('5atbl_detallecarrera','5acat_carrera.PkCarrera = 5atbl_detallecarrera.FkCarrera');

        //$this->db->where('campo','condicion');
        $this->db->order_by('PKCarrera','DESC');
        $this->db->limit(3);

        $query = $this->db->get();

        if($query->num_rows()>0)
        {
            return $query->result();
        }else
        {
            return false;
        }
    }
    public function detalleCurso($clave)
 {
     $this->db->select
     (
         '  5acat_carrera.PkCarrera,
            5acat_carrera.clave,
            5acat_carrera.FkCategoria,
            5acat_carrera.carrera,
            5atbl_detallecarrera.presentacion,
            5atbl_detallecarrera.perfilEgreso,
            5atbl_detallecarrera.perfilIngreso,
            5atbl_detallecarrera.descripcion,
            5atbl_detallecarrera.colegiatura,
            5atbl_detallecarrera.apertura,
            5atbl_detallecarrera.duracion,
            5atbl_detallecarrera.imagen,
            5atbl_categoria.PkCategoria,
            5atbl_categoria.categoria'
     );

     $this->db->from('5acat_carrera');
     $this->db->join('5atbl_categoria','5acat_carrera.FkCategoria = 5atbl_categoria.PkCategoria');
     $this->db->join('5atbl_detallecarrera','5acat_carrera.PkCarrera = 5atbl_detallecarrera.FkCarrera');

     $this->db->where('5acat_carrera.clave',$clave);
     //$this->db->order_by('campo');
     $query = $this->db->get();

     if($query->num_rows()>0)
     {
         return $query->result();
     }else
     {
         return false;
     }
 }
    public function listarOpiniones($clave)
    {
        $this->db->select
        (
            'nombre,
             puntuacion,
             opinion,
             imagen
            '
        );

        $this->db->from('5atbl_opiniones');
        $this->db->where('FkCarrera',$clave);
        $query = $this->db->get();

        if($query->num_rows()>0)
        {
            return $query->result();
        }else
        {
            return false;
        }
    }
    public function menuGlobalCursos()
    {
        $this->db->select
        (
            ' 5acat_carrera.clave,
            5acat_carrera.carrera,
            5acat_carrera.FkCategoria'
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
    public function menuGlobalCategoria()
    {
        $this->db->select
        ('5atbl_categoria.PkCategoria,
            5atbl_categoria.categoria'
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
    public function listarCarrerasCategoria($categoria)
    {
        $this->db->select
        (
           '5acat_carrera.clave,
            5acat_carrera.carrera,
            5acat_carrera.FkCategoria,
            5atbl_detallecarrera.presentacion,
            5atbl_detallecarrera.colegiatura,
            5atbl_detallecarrera.apertura,
            5atbl_detallecarrera.duracion,
            5atbl_detallecarrera.imagen,
            5atbl_categoria.PkCategoria,
            5atbl_categoria.categoria '
        );
        $this->db->from('5acat_carrera');
        $this->db->join('5atbl_categoria','5acat_carrera.FkCategoria = 5atbl_categoria.PkCategoria');
        $this->db->join('5atbl_detallecarrera','5acat_carrera.PkCarrera = 5atbl_detallecarrera.FkCarrera');

        $this->db->where('PkCategoria',$categoria);
        //$this->db->order_by('campo');

        $query = $this->db->get();

        if($query->num_rows()>0)
        {
            return $query->result();
        }else
        {
            return false;
        }
    }
    public  function num_Rows()
    {
        return $this->db->get('5acat_carrera')->num_rows();
    }

}