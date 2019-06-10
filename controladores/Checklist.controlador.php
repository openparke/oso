<?php

require_once "modelos/Checklist.php";


class ChecklistControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Checklist;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/Checklist/index.php";
        require_once "vistas/pie.php";
     
    }

    
}