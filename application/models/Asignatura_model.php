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
}