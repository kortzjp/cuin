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

    public function subirSlide() {
        #OBJETOS
        #-----------------------------------------------------------
        if (isset($_FILES["imagen"]["name"])) {
            list($ancho_img, $alto_img) = getimagesize($_FILES["imagen"]["tmp_name"]);
            if ($ancho_img < 1920 || $alto_img < 820) {
                echo 0;
            } else {
                $aleatorio = mt_rand(100, 999);
                $ruta = "public/images/slider/slide" . $aleatorio . ".jpg";
                $user_img_profile = "slide" . $aleatorio . ".jpg";

                $config['upload_path'] = './public/images/slider/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2000000';
                //$config['quality'] = '90%';
                $config['file_name'] = $user_img_profile;
                $this->load->library('upload', $config);

                // Aquí me refiero a "foto", el nombre que pusimos en FormData
                if (!$this->upload->do_upload('imagen')) {
                    echo 0;
                } else {

                    $CI = & get_instance();
                    $CI->load->library('image_lib');

                    $data = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $data['full_path'];
                    $config['new_image'] = './public/images/slider/';
                    $config['maintain_ratio'] = TRUE;
                    $config['create_thumb'] = FALSE;
                    $config['width'] = 1920;
                    $config['height'] = 820;

                    $CI->image_lib->initialize($config);

                    if (!$CI->image_lib->resize()) {
                        echo $this->image_lib->display_errors('', '');
                    }

                    $enviarDatos = array("ruta" => $ruta,
                        "titulo" => "",
                        "descripcion" => "");

                    if ($this->GestorSlideModel->subirImagenSlideModel($enviarDatos))
                        echo json_encode($enviarDatos);
                    else
                        echo 0;
                }
            }
        } else {
            echo 0;
        }
    }

    #ELIMINAR ITEM DEL SLIDE
    #-----------------------------------------------------------

    public function eliminarSlide() {

        $id = $_POST['idSlide'];
        $ruta = $_POST['rutaSlide'];

        $this->load->helper("file");
        //if(delete_files(base_url(). $ruta))
        if (unlink($ruta))
            $delete = $this->GestorSlideModel->eliminarSlideModel($id);
        redirect(base_url() . 'backend/editor/slider');
    }

    #ACTUALIZAR ITEM DEL SLIDE
    #-----------------------------------------------------------

    public function actualizarSlide() {

        $datos = array(
            "id" => $_POST['enviarId'],
            "titulo" => $_POST["enviarTitulo"],
            "descripcion" => $_POST["enviarDescripcion"]);

        $this->GestorSlideModel->actualizarSlideModel($datos);
        echo json_encode($datos);
    }
    
    #ACTUALIZAR ITEM DEL SLIDE
    #-----------------------------------------------------------

    public function ordenarSlide() {

        $datos = array(
            "orden" => $_POST['actualizarOrdenItem'],
            "id" => $_POST["actualizarOrdenSlide"]);

        $this->GestorSlideModel->actualizarSlideModel($datos);
        
    }

}
