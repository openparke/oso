<?php

require_once "modelos/cancelacionafectacion.php";


class cancelacionafectacionControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new cancelacionafectacion;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/cancelacionafectacion/index.php";
        require_once "vistas/pie.php";
     
    }

    
}