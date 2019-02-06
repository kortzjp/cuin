<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

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
