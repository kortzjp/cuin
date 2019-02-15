<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');
        $this->load->model("Course_model");

    }

    public function index()
    {
/*
        $config['base_url'] = base_url().'Courses/index/';
        $config['total_rows'] = $this->Course_model->num_Rows();
        $config['per_page'] = 1;
        $config['num_links'] = 5;
        $config['first_link'] = 'Primero';
        $config['last_link'] = 'Ultimo';
        $config['next_link'] = 'Siguiente';
        $config['prev_link'] = 'Anterior';
        $config['full_tag_open'] = '<nav aria-label="Page navigation"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['num_tag_open'] = '<li class="page-item"><a>';
        $config['num_tag_close'] = '  </a></li>';


        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';


        $this->pagination->initialize($config);

*/
        $carreras['carreras'] = $this->Course_model->listarCarreras();
        $carreras['categorias'] = $this->Course_model->menuGlobalCategoria();


        $this->load->view('courses/CoursesHome',$carreras);
    }
    public function detalle($clave)
    {
        $curso['curso'] = $this->Course_model->detalleCurso($clave);
        $curso['opiniones'] = $this->Course_model->listarOpiniones($curso['curso'][0] -> PkCarrera);
        $curso['ultimas'] = $this->Course_model->listarUltimasTres();
        $curso['categorias'] = $this->Course_model->menuGlobalCategoria();
        $curso['carreras'] = $this->Course_model->listarCarrerasCategoria($curso['curso'][0]->FkCategoria);

        $this->load->view('courses/cursos',$curso);

    }




        
}
