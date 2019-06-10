<?php

require_once "modelos/escriconstrucprueba.php";

class escriconstrucpruebaControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new escriconstrucprueba;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/escriconstrucprueba/index.php";
        require_once "vistas/pie.php";
    }

    
}