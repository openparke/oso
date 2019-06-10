<?php

require_once "modelos/simuladorleasing.php";
require_once "modelos/solicitud.php";

class simuladorleasingControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new simuladorleasing;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/simuladorleasing/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarsimuladorleasing(){
        $titulo=" Registrar";
        $p=new simuladorleasing();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo=" Modificar";
        }
        include "modelos/autorizacion.php";

        $objsoli=new solicitud;
        $correo=$objsoli->ObtenerCorreoAut(intval($_SESSION['idsoli']));
        


        require_once "vistas/encabezado.php";
        require_once "vistas/simuladorleasing/simuladorleasing-form.php";
        require_once "vistas/pie.php";

     }
     public function Guardar(){

        $p=new simuladorleasing();
        $p->setidsimuladorleasing(intval($_POST['id']));
        $p->setvalorleasing($_POST['valorleasing']);
        $p->setfechaleasing($_POST['fechaleasing']);
        $p->setfk_idsolicitud($_SESSION['idsoli']);

      
       
        $p->getidsimuladorleasing() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);
    
        header("location:?c=solicitud");
    }
}