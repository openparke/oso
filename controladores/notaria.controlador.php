<?php

require_once "modelos/notaria.php";
require_once "modelos/Usuario.php";

class notariaControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new notaria;
        
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/notaria/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarnotaria(){
        $titulo=" Registrar";
        $p=new notaria();
        $u=new Usuario();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            $u=$u->Obtener($p->getfk_idUsuario());
            $titulo=" Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/notaria/notaria-form.php";
        require_once "vistas/pie.php";

     }
     public function Guardar(){
        $u=new Usuario();
        $u->setUsuario($_POST['Usuario']);
        $u->setContrasena(md5(sha1($_POST['Contrasena'])));
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
        $p->setfk_idsucursal(intval($_POST['fk_idsucursal']));
       
        $p->getidnotaria() > 0
        ? $this->modelo->Actualizar($p)
        : $this->modelo->Insertar($p);
    
        header("location:?c=notaria");
    }
    public function Borrar(){
        $idUsuario = $_SESSION['idUsuario'];
		$this->modelo->Eliminar($idUsuario);
		header("location:?c=notaria");
	}
	public function Bloquear(){
        $idUsuario = $_GET['id'];
        $objUsuario=new Usuario();
		$objUsuario->Bloquear($idUsuario);
        
		//$this->modelo->Bloquear($_GET["id"]);
		header("location:?c=notaria");
	}
	public function Activo(){
        $idUsuario = $_GET['id'];
        $objUsuario=new Usuario();
		$objUsuario->Activo($idUsuario);
		header("location:?c=notaria");
	}
    
}