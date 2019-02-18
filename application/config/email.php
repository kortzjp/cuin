<?php

        /*
         * Cuando cargamos una librería
         * es similar a hacer en PHP puro esto:
         * require_once("libreria.php");
         * $lib=new Libreria();
         */


        /*
         * Configuramos los parámetros para enviar el email,
         * las siguientes configuraciones es recomendable
         * hacerlas en el fichero email.php dentro del directorio config,
         * en este caso para hacer un ejemplo rápido lo hacemos
         * en el propio controlador
         */

        //Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';

        //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'mail.cuisaacnewton.com';

        //Nuestro usuario
        $config["smtp_user"] = 'informes@cuisaacnewton.com';

        //Nuestra contraseña
        $config["smtp_pass"] = 'CentrouniversitarioCUIN2304';

        //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '587';

        //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';

        //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;

        //El email debe ser valido 
        $config['validate'] = true;

