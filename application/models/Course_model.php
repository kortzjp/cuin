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
          ' 5atbl_carrera.PKCarrera,
            5atbl_carrera.nombre as curso,
            5atbl_carrera.presentacion,
            5atbl_carrera.colegiatura,
            5atbl_carrera.apertura,
            5atbl_carrera.duracion,
            5atbl_carrera.imagen,
            5atbl_carrera.FkCategoria,
            5atbl_categoria.PkCategoria,
            5atbl_categoria.nombre'
      );

     $this->db->from('5atbl_carrera');
     $this->db->join('5atbl_categoria','5atbl_carrera.FkCategoria = 5atbl_categoria.PkCategoria');

     //$this->db->where('campo','condicion');
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



 public function detalleCurso($clave)
 {
     $this->db->select
     (
         ' 5atbl_carrera.PKCarrera,
            5atbl_carrera.nombre as curso,
            5atbl_carrera.presentacion,
            5atbl_carrera.colegiatura,
            5atbl_carrera.apertura,
            5atbl_carrera.duracion,
            5atbl_carrera.imagen,
            5atbl_categoria.nombre'
     );

     $this->db->from('5atbl_carrera');
     $this->db->join('5atbl_categoria','5atbl_carrera.FkCategoria = 5atbl_categoria.PkCategoria');

     $this->db->where('PKCarrera',$clave);
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

}