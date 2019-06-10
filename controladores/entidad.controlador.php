<?php

require_once "modelos/entidad.php";

class entidadControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new entidad;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/entidad/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarentidad(){
        $titulo=" Registrar";
        $p=new entidad();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo=" Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/entidad/entidad-form.php";
        require_once "vistas/pie.php";

     }
     public function Guardar(){

        $p=new entidad();
        $p->setidentidad(intval($_POST['id']));
        $p->setnombreentidad($_POST['nombreentidad']);
        $p->settipo($_POST['tipo']);

      
       
        $p->getidentidad() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);
    
        header("location:?c=entidad");
    }
}