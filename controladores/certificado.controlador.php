<?php

require_once "modelos/certificado.php";

class certificadoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new certificado;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/certificado/index.php";
        require_once "vistas/pie.php";
    }

    
}