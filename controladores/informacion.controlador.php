<?php

require_once "modelos/informacion.php";

class informacionControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new informacion;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/informacion/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarinformacion(){
        $titulo=" Registrar";
        $p=new informacion();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo=" Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/informacion/informacion-form.php";
        require_once "vistas/pie.php";

     }
     public function Guardar(){

        $p=new informacion();
        $p->setidinformacion(intval($_POST['id']));
        $p->setmatricula($_POST['matricula']);
        $p->setestadocivil($_POST['estadocivil']);
        $p->settipodocumento($_POST['tipodocumento']);
        $p->setnumerodocumento(intval($_POST['numerodocumento']));
        $p->setsolicitud($_POST['solicitud']);

       
        $p->getidinformacion() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);
    
        header("location:?c=informacion");
    }
}