<?php

require_once "modelos/chat.php";

class chatControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new chat;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/chat/index.php";
        require_once "vistas/pie.php";
    }

    
}