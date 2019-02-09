<?php
/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 2/1/2019
 * Time: 3:03 PM
 */
class Home_model extends CI_Model
{
 public function __construct()
 {
     parent::__construct();
 }

 public function listarCatCar()
 {
      $this->db->select
      (
          ' 5atbl_carrera.PKCarrera,
            5atbl_carrera.nombre as curso,
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

}