<?php

require_once "modelos/cancelacionpatrimonio.php";


class cancelacionpatrimonioControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new cancelacionpatrimonio;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/cancelacionpatrimonio/index.php";
        require_once "vistas/pie.php";
     
    }

    
}