<?php
class contacto{ 
        public $nombre;
        public $correoelectronico;
        public $asunto;
        public $mensaje;

        public function __construct($nombre, $correoelectronico, $asunto, $mensaje){
            $this->nombre = $nombre;
            $this->correoelectronico = $correoelectronico;
            $this->asunto = $asunto;
            $this->mensaje = $mensaje;
        }

            public function getNombre(){return $this->nombre;}
            public function getCorreoelectronico(){return $this->correoelectronico;}
            public function getAsunto(){return $this->asunto;}
            public function getmensaje(){return $this->mensaje;}      
    } 

    $contact = new contacto($_POST['nombre'], $_POST['correoelectronico'], $_POST['asunto'], $_POST['mensaje']);
    echo $contact->getNombre();
    echo $contact->getCorreoelectronico();
    echo $contact->getAsunto();
    echo $contact->getmensaje();
    
    class registro{
        public $nombreregistro;
        public $apellidoregistro;
        public $correoregistro;
        public $claveregistro;
        public $confirmaciondeclave;

        public function __construct($nombreregistro, $apellidoregistro, $correoregistro, $claveregistro, $confirmaciondeclave){
            $this->nombreregistro = $nombreregistro;
            $this->apellidoregistro = $apellidoregistro;
            $this->correoregistro = $correoregistro;
            $this->claveregistro = $claveregistro;
            $this->confirmaciondeclave = $confirmaciondeclave;
        }

        public function getNombreregistro(){return $this->nombreregistro;}
        public function getApellidoregistro(){return $this->apellidoregistro;}
        public function getCorreoregistro(){return $this->correoregistro;}
        public function getClaveregistro(){return $this->claveregistro;}
        public function getConfirmaciondeclave(){return $this->confirmaciondeclave;}
    }
    
    $registro = new registro($_POST['nombreregistro'], $_POST['apellidoregistro'], $_POST['correoregistro'], 
    $_POST['claveregistro'], $_POST['confirmaciondeclave']);
    echo $registro->getNombreregistro();
    echo $registro->getApellidoregistro();
    echo $registro->getCorreoregistro();
    echo $registro->getClaveregistro();
    echo $registro->getConfirmaciondeclave();

