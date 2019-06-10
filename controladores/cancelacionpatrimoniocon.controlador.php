<?php

require_once "modelos/cancelacionpatrimoniocon.php";


class cancelacionpatrimonioconControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new cancelacionpatrimoniocon;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/cancelacionpatrimoniocon/index.php";
        require_once "vistas/pie.php";
     
    }

    
}