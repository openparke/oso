<?php

require_once "modelos/autorizaciones.php";

class autorizacionesControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new autorizaciones;
    }
    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/autorizaciones/index.php";
        require_once "vistas/pie.php";
    }


}
