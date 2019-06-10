<?php

require_once "modelos/escriconstrucprueba2.php";

class escriconstrucprueba2Controlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new escriconstrucprueba2;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/escriconstrucprueba2/index.php";
        require_once "vistas/pie.php";
    }

    
}