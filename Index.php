<?php 
require("Modelo.php");
require("Controlador.php");
require("Vista.php");

$Controlador = new Controlador;

$Controlador->get_contact();
$Controlador->get_registro();