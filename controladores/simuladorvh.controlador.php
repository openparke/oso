<?php

require_once "modelos/simuladorvh.php";

class simuladorvhControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new simuladorvh;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/simuladorvh/index.php";
        require_once "vistas/pie.php";
    }

    
}