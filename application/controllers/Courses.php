<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model("Course_model");

    }


    public function detalle($clave)
    {
            $curso['curso'] = $this->Course_model->detalleCurso($clave);
        $this->load->view('courses/cursos',$curso);

    }


    public function index()
    {
        $carreras['carreras'] = $this->Course_model->listarCarreras();

        	$this->load->view('courses/CoursesHome',$carreras);
    }

        
}
