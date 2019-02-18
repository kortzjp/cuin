<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //$this->load->model("Home_model");
    }

    public function index() {
        //$carreras['carreras'] = $this->Home_model->listarCatCar();
        $this->load->view('contact/ContactHome');
    }

    public function send() {

        //Cargamos la librería email
        $this->load->library('email');

        //Establecemos esta configuración
        //$this->email->initialize();
        //Ponemos la dirección de correo que enviará el email y un nombre
        $this->email->from('comentarios@ejemplo.com', 'Comentarios Página');

        /*
         * Ponemos el o los destinatarios para los que va el email
         * en este caso al ser un formulario de contacto te lo enviarás a ti
         * mismo
         */
        $this->email->to('informes@cuisaacnewton.com', 'Informes CUIN');

        //Definimos el asunto del mensaje
        $this->email->subject($this->input->post("subject"));

        $mensaje = "\n\rEmail: " . $this->input->post("email")
                . "\n\rNombre: " . $this->input->post("fname")
                . "\n\rApellido: " . $this->input->post("lname")
                . "\n\rMensaje: " . $this->input->post("message");

        //Definimos el mensaje a enviar
        $this->email->message($mensaje);

        //Enviamos el email y si se produce bien o mal que avise con una flasdata
        if ($this->email->send()) {
            $this->session->set_flashdata('envio', '<strong>¡Correcto!</strong> comentario enviado');
            //echo "Mensaje enviado correctamente";
        } else {
            $this->session->set_flashdata('error', '<strong>¡Error!</strong> comentario no enviado');
            //echo "Erro al enviar el mensaje";
        }
        redirect(base_url() . "contact#form-messages");
    }

}
