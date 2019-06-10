<?php

require_once "modelos/autorizacion.php";

class autorizacionControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new autorizacion;
    }
    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/autorizacion/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarautorizacion(){
        $titulo=" para el uso de datos ";
        $p=new autorizacion();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo="( Modificar )";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/autorizacion/autorizacion-form.php";
        require_once "vistas/pie.php";

     }
     public function Guardar(){

        $p=new autorizacion();
        $p->setidautorizacion(intval($_POST['id']));
        $p->setaceptaprimer($_POST['aceptaprimer']);
        $p->setaceptasegundo($_POST['aceptasegundo']);
        $p->setnombre($_POST['nombre']);
        $p->setapellido($_POST['apellido']);
        $p->setcorreo($_POST['correo']);
        $p->settelefono($_POST['telefono']);



        $p->getidautorizacion() > 0
        ? $this->modelo->Actualizar($p)
        : $_SESSION['idAuth']=$this->modelo->Insertar($p);

        header("location:?c=solicitud&a=registrarsolicitud");
    }
}
