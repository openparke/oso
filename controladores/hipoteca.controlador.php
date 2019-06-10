<?php

require_once "modelos/hipoteca.php";


class hipotecaControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new hipoteca;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/hipoteca/index.php";
        require_once "vistas/pie.php";
     
    }

    
}