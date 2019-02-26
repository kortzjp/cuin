<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

#CLASE Y MÉTODOS
#-------------------------------------------------------------

class GestorSlideController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Editor/GestorSlideModel");
    }

    #SUBIR LA IMAGEN DEL SLIDE
    #----------------------------------------------------------

    public function subirImagen() {
        #OBJETOS
        #-----------------------------------------------------------
        if (isset($_FILES["imagen"]["name"])) {

            $imagenTemporal = $_FILES["imagen"]["tmp_name"];
            $tipo = $_FILES["imagen"]["type"];

            $aleatorio = mt_rand(100, 999);
            $ruta = "./public/images/slider/slide" . $aleatorio . ".jpg";
            $user_img_profile = "slide" . $aleatorio . ".jpg";

            $config['upload_path'] = './public/images/slider/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '5000000';
            //$config['quality'] = '90%';
            $config['file_name'] = $user_img_profile;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('imagen')) { #Aquí me refiero a "foto", el nombre que pusimos en FormData
                echo 0;
            } else {

                $enviarDatos = array("ruta" => "ruta",
                    "titulo" => "titulo",
                    "descripcion" => "descripcion");

                echo json_encode($enviarDatos);
            }
        } else {
            echo 0;
        }
    }

}
