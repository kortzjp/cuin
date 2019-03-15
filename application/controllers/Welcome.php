<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Editor/GestorSlideModel");
        $this->load->model("Editor/GestorGaleriaModel");

    }

    public function index()
    {
        $datos['sliders'] = $this->GestorSlideModel->todosSlideModel();
        $datos['imagenes'] = $this->GestorGaleriaModel->todosGaleriaModel();
        $this->load->view('HomeView',$datos);
    }
}
