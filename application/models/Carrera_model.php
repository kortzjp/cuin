<?php
class Carrera_model extends CI_Model
{
     public function __construct()
     {
         parent::__construct();
     }

     function ModelAllCarreras()
     {
         $this->db->from('5acat_carrera');
         $this->db->order_by('PkCarrera');

         $result = $this->db->get();

         $carreras = array();

         if($result->num_rows() > 0)
         {
             $carreras['PkCarrera'] = 'Seleccione';

             foreach($result->result_array() as $row)
             {
                 $carreras[$row['PkCarrera']] = $row['carrera'];
             }
         }
         return $carreras;
     }
}