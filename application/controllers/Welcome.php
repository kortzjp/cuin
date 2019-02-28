<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Editor/GestorSlideModel");

    }

    public function index()
    {
        $datos['sliders'] = $this->GestorSlideModel->todosSlideModel();
        $this->load->view('HomeView',$datos);
    }
}
