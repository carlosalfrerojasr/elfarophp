<?php
    class controlador{
        public $contact;
        public $registro;

        function set_contact($contact) {
            $this->contact = $contact;
          }
          function get_contact() {
            return $this->contact;
          }     
          function set_registro($registro) {
            $this->registro = $registro;
          }
          function get_registro() {
            return $this->registro;
          }  
    }

    require("Modelo.php");