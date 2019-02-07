<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
    
    public function index(){
        	$this->load->view('courses/CoursesHome');
    }

	public function uno()
	{
		$this->load->view('cursos/CursoUno');
                
	}
        
        public function dos()
	{
		$this->load->view('cursos/CursoDos');
                
	}
        
        public function tres()
	{
		$this->load->view('cursos/CursoTres');
                
	}
        
}
