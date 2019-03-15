<?php
class Asignatura_model extends CI_Model
{
     public function __construct()
     {
         parent::__construct();
     }

     function ModelInsertAsignatura($asignatura)
     {
        $status = $this->db->insert('5acat_asignatura', $asignatura);
        return $status;
     }

    public function ModelGetAsignatura()
    {

        $this->db->select
        (
           '5acat_asignatura.idAsignatura,
            5acat_asignatura.asignatura,
            5acat_asignatura.abreviatura,
            5acat_asignatura.cuatrimestre,
            5acat_asignatura.hrsCuatrimestre,
            5acat_asignatura.hrsSemana,
            5acat_asignatura.creditos, 
            5acat_carrera.carrera'
        );

        $this->db->from('5acat_asignatura');
        $this->db->join('5acat_carrera', '5acat_asignatura.FkCarrera = 5acat_carrera.PkCarrera');

        //$this->db->order_by('cat_asignatura.idAsignatura', 'asc');

        $query = $this->db->get();

        if($query->num_rows() >= 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}