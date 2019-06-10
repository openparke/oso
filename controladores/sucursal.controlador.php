<?php

require_once "modelos/sucursal.php";

class sucursalControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new sucursal;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/sucursal/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarsucursal(){
        $titulo=" Registrar";
        $p=new sucursal();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $titulo=" Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/sucursal/sucursal-form.php";
        require_once "vistas/pie.php";

     }
     public function Guardar(){

        $p=new sucursal();
        $p->setidsucursal(intval($_POST['id']));
        $p->setnombre($_POST['nombre']);
        $p->setdireccion($_POST['direccion']);
        $p->setfk_identidad($_POST['fk_identidad']);

      
       
        $p->getidsucursal() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);
    
        header("location:?c=sucursal");
    }
}