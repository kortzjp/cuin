<?php
class Login_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function ModelLoginUser($idUsuario, $passwordUsuario)
    {
    	$query = $this->db->query
    	("
	    	SELECT
	    	5acat_nivel_usuario.idNivel,
	    	5atbl_usuario.idUsuario,
	    	5atbl_usuario.sessionUsuario,
	    	5atbl_usuario.bloqueoUsuario,
            5atbl_persona.nombrePersona,
            5atbl_persona.apPersona,
            5atbl_persona.amPersona
            FROM
            5acat_nivel_usuario
            INNER JOIN 5atbl_usuario ON 5atbl_usuario.nivelUsuario = 5acat_nivel_usuario.idNivel
            INNER JOIN 5atbl_persona ON 5atbl_usuario.curpUsuario = 5atbl_persona.curpPersona
            WHERE (idUsuario = '".$idUsuario."' AND passwordUsuario = '".$passwordUsuario."');
	    ");


        if($query->num_rows() == 1)
        {
            //return  $query->row();

            return $query->result();
        }
        else
        {
            return false;
        }
    }

    public function ModelLogoutUser($idUsuario, $nivelUsuario)
    {

        $query = $this->db->query
        ("
        UPDATE 5atbl_usuario SET sessionUsuario = '0'
		WHERE (idUsuario = '".$idUsuario."' AND nivelUsuario = '".$nivelUsuario."');
	    ");

        if($query == true)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function ModelSessionUser($idUsuario, $nivelUsuario)
    {

        $query = $this->db->query
        ("
        UPDATE 5atbl_usuario SET sessionUsuario = '1'
		WHERE (idUsuario = '".$idUsuario."' AND nivelUsuario = '".$nivelUsuario."');
	    ");

        if($query == true)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}