<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('Login/Login_model');
    }

    public function home()
    {
        $this->load->view('BackEnd/Servicio/ServicioHomeView');
    }
	public function asignatura()
    {
        $this->load->view('BackEnd/Servicio/ServicioAsignaturaView');
    }
}