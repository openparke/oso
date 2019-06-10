<?php

require_once "modelos/listassimuladores.php";

class listassimuladoresControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new listassimuladores;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/listassimuladores/index.php";
        require_once "vistas/pie.php";
    }

    
}