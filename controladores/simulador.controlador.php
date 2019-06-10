<?php

require_once "modelos/simulador.php";

class simuladorControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new simulador;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/simulador/index.php";
        require_once "vistas/pie.php";
    }

    
}