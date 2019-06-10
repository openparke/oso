<?php

require_once "modelos/contacto.php";

class contactoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new contacto;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/contacto/index.php";
        require_once "vistas/pie.php";
    }

    
}