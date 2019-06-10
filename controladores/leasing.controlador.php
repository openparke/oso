<?php

require_once "modelos/leasing.php";


class leasingControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new leasing;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/leasing/index.php";
        require_once "vistas/pie.php";
     
    }

    
}