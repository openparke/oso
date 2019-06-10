<?php

require_once "modelos/perfil.php";
require_once "modelos/Usuario.php";
require_once "modelos/notaria.php";


class PerfilControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Perfil;
        
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
       
        require_once "vistas/pie.php";
    }

     public function registrarPerfil(){//Formulario para modificar el perfil
        
        $titulo=" Modificar";
        //$p=new Perfil();
        $u=new Usuario();
        $u->setRol($_SESSION['Rol']);
        $i=new notaria();
        $p=$i->ObtenerUsuId(intval($_SESSION["idUsuario"]));
            require_once "vistas/encabezado.php";
            require_once "vistas/Perfil/perfil-form.php";
            require_once "vistas/pie.php";

        // if(isset($_GET['id'])){
        //     $p=$this->modelo->Obtener($_SESSION["idUsuario"]);
        //     $u=$u->Obtener($p->getfk_idUsuario());
        //     $titulo=" Modificar";
        // }

        // require_once "vistas/encabezado.php";
        // require_once "vistas/Perfil/perfil-form.php";
        // require_once "vistas/pie.php";

     }
     public function Guardar(){
        $u=new Usuario();
        $u->setUsuario($_POST['Usuario']);
        $u->setContrasena($_POST['Contrasena']);
        $u->setRol($_POST['Rol']);
        $p=new notaria();

        if(intval($_POST['id'])>0){
            $p=$p->Obtener(intval($_POST['id']));
            $u->setIdUsuario($p->getfk_idUsuario());
            $idusu=$p->getfk_idUsuario();
            $u->Actualizar($u);
        }else{
            $idusu=$u->Insertar($u);
        }
        
        $p->setidnotaria(intval($_POST['id']));
        $p->setNombresnotaria($_POST['Nombres']);
        // $p->setApellidosnotaria($_POST['Apellidos']);
        // $p->setTipoDocumentonotaria($_POST['TipoDocumento']);
        $p->setNumeroDocumentonotaria(intval($_POST['NumeroDocumento']));
        $p->setCorreoElectroniconotaria($_POST['CorreoElectronico']);
        // $p->setCorreoInstitucionalnotaria($_POST['CorreoInstitucional']);
        $p->setfk_idUsuario(intval($idusu));
       
        $p->getidnotaria() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);
    
        header("location:index.php");
    }
}