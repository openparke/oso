<?php

require_once "modelos/compraventa.php";


class compraventaControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new compraventa;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/compraventa/index.php";
        require_once "vistas/pie.php";
     
    }

    
}