<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

#CLASE Y MÉTODOS
#-------------------------------------------------------------

class GestorGaleriaController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Editor/GestorGaleriaModel");
    }

    #SUBIR LA IMAGEN DEL GALERIA
    #----------------------------------------------------------

    public function subirImagen() {
        #OBJETOS
        #-----------------------------------------------------------
        if (isset($_FILES["imagen"]["name"])) {
            list($ancho_img, $alto_img) = getimagesize($_FILES["imagen"]["tmp_name"]);
            if ($ancho_img < 1024 || $alto_img < 768) {
                echo 1;
            } else {
                $aleatorio = mt_rand(100, 999);
                $ruta = "public/images/gallery/gallery" . $aleatorio . ".jpg";
                $user_img_profile = "gallery" . $aleatorio . ".jpg";

                $config['upload_path'] = './public/images/gallery/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2000000';
                //$config['quality'] = '90%';
                $config['file_name'] = $user_img_profile;
                $this->load->library('upload', $config);

                // Aquí me refiero a "foto", el nombre que pusimos en FormData
                if (!$this->upload->do_upload('imagen')) {
                    echo 2;
                } else {

                    $CI = & get_instance();
                    $CI->load->library('image_lib');

                    $data = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $data['full_path'];
                    $config['new_image'] = './public/images/gallery/';
                    $config['maintain_ratio'] = TRUE;
                    $config['create_thumb'] = FALSE;
                    $config['width'] = 1024;
                    $config['height'] = 768;

                    $CI->image_lib->initialize($config);

                    if (!$CI->image_lib->resize()) {
                        echo $this->image_lib->display_errors('', '');
                    }

                    $enviarDatos = array("ruta" => $ruta,
                        "titulo" => "",
                        "descripcion" => "");

                    if ($this->GestorGaleriaModel->subirImagenGaleriaModel($enviarDatos))
                        echo $ruta;
                    else
                        echo 3;
                }
            }
        } else {
            echo 0;
        }
    }

    #ELIMINAR ITEM DEL GALERIA
    #-----------------------------------------------------------

    public function eliminarImagen() {

        $id = $_POST['idGaleria'];
        $ruta = $_POST['rutaGaleria'];

        $this->load->helper("file");
        //if(delete_files(base_url(). $ruta))
        if (unlink($ruta))
            $delete = $this->GestorGaleriaModel->eliminarImagenGaleriaModel($id);
        redirect(base_url() . 'backend/editor/gallery');
    }

    #ACTUALIZAR ITEM DEL GALERIA
    #-----------------------------------------------------------

    public function actualizarGaleria() {

        $datos = array(
            "id" => $_POST['enviarId'],
            "titulo" => $_POST["enviarTitulo"],
            "descripcion" => $_POST["enviarDescripcion"]);

        $this->GestorGaleriaModel->actualizarGaleriaModel($datos);
        echo json_encode($datos);
    }
    
    #ACTUALIZAR ITEM DEL GALERIA
    #-----------------------------------------------------------

    public function ordenarImagen() {

        $datos = array(
            "orden" => $_POST['actualizarOrdenItem'],
            "id" => $_POST["actualizarOrdenGaleria"]);

        $this->GestorGaleriaModel->actualizarGaleriaModel($datos);
        
    }

}