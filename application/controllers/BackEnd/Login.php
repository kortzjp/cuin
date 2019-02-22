<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login/Login_model');
    }

    public function index()
    {
        $this->load->view('BackEnd/Login/LoginUser');
    }

    public function LoginValidateUser()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|callback_LoginCheckUser');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        /*Setea el nombre del mensaje a español*/
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');

        if($this->form_validation->run() == false)
        {
            $this->index();
        }
        else if($this->LoginCheckUser() == false)
        {
            $this->index();
        }
        else if($this->LoginCheckUser() == true)
        {
			if($this->session->userdata('idNivel') == '0' and $this->session->userdata('bloqueoUsuario') == 0)
            {
                redirect(base_url().'BackEnd/Invitado/home');
            }
            elseif($this->session->userdata('idNivel') == '1' and $this->session->userdata('bloqueoUsuario') == 0)
            {
				redirect(base_url().'BackEnd/SuperUsuario/home');
            }
            elseif($this->session->userdata('idNivel') == '2' and $this->session->userdata('bloqueoUsuario') == 0)
            {
                //$idUsuario = $this->session->userdata('idUsuario');
                //$idNivel   = $this->session->userdata('idNivel');
                //$this->Login_model->ModelSessionUser($idUsuario, $idNivel);

                redirect(base_url().'BackEnd/Rectoria/home');

            }
			elseif($this->session->userdata('idNivel') == '3' and $this->session->userdata('bloqueoUsuario') == 0)
            {
                //$idUsuario = $this->session->userdata('idUsuario');
                //$idNivel   = $this->session->userdata('idNivel');
                //$this->Login_model->ModelSessionUser($idUsuario, $idNivel);

                redirect(base_url().'BackEnd/Servicio/home');

            }
            elseif($this->session->userdata('idNivel') == '4' and $this->session->userdata('bloqueoUsuario') == 0)
            {
                //$idUsuario = $this->session->userdata('idUsuario');
                //$idNivel   = $this->session->userdata('idNivel');
                //$this->Login_model->ModelSessionUser($idUsuario, $idNivel);

                redirect(base_url().'BackEnd/Profesor/home');

            }
			elseif($this->session->userdata('idNivel') == '5' and $this->session->userdata('bloqueoUsuario') == 0)
            {
                //$idUsuario = $this->session->userdata('idUsuario');
                //$idNivel   = $this->session->userdata('idNivel');
                //$this->Login_model->ModelSessionUser($idUsuario, $idNivel);

                redirect(base_url().'BackEnd/Alumno/home');

            }
            else
            {
                redirect(base_url());
            }
        }
    }

    public function LoginCheckUser()
    {
        $username = $this->input->post('username');
        $password = md5(strtoupper($this->input->post('password')));

        $usuario = $this->Login_model->ModelLoginUser($username, $password);

        if($usuario != false)
        {
            foreach($usuario as $user)
            {
                $arrayUsuario = array();
                
                $arrayUsuario['idNivel']         = $user->idNivel;  
				$arrayUsuario['idUsuario']       = $user->idUsuario;	            
                $arrayUsuario['nombrePersona']   = $user->nombrePersona;
                $arrayUsuario['apPersona']       = $user->apPersona;
                $arrayUsuario['amPersona']       = $user->amPersona;


                $this->session->set_userdata($arrayUsuario);
            }
            return true;
        }
        else
        {
            $this->form_validation->set_message('LoginCheckUser', 'Usuario y/o Password incorrectos');
            return false;
        }
    }

	public function LogoutUser($idUsuario, $nivelUsuario)
    {
        $resultado = $this->Login_model->ModelLogoutUser($idUsuario, $nivelUsuario);

        if($resultado == true)
        {
            $this->session->sess_destroy();
            redirect(base_url());
        }
        else
        {

        }
    }

}
