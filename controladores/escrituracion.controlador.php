<?php

require_once "modelos/escrituracion.php";

class escrituracionControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new escrituracion;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/escrituracion/index.php";
        require_once "vistas/pie.php";
    }

    
}