<?php

require_once "modelos/preguntas.php";

class preguntasControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new preguntas;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/preguntas/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarpreguntas(){
        $titulo=" Registrar";
        $p=new preguntas();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo=" Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/preguntas/preguntas-form.php";
        require_once "vistas/pie.php";

     }
     public function Guardar(){

        $p=new preguntas();
        $p->setidpreguntas(intval($_POST['id']));
        $p->setpreguntas($_POST['preguntas']);
        $p->setrespuestas($_POST['respuestas']);

      
       
        $p->getidpreguntas() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);
    
        header("location:?c=preguntas");
    }
}