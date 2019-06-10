<?php

require_once "modelos/solicitudnatural.php";

class solicitudnaturalControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new solicitudnatural;
    }
    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/solicitudnatural/index.php";
        require_once "vistas/pie.php";
    }


}
