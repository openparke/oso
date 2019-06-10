<?php

require_once "modelos/simuladorcanhipo.php";

class simuladorcanhipoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new simuladorcanhipo;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/simuladorcanhipo/index.php";
        require_once "vistas/pie.php";
    }

    
}