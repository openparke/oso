<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;

require_once "modelos/respuesta.php";
require_once "modelos/autorizacion.php";
//require_once "modelos/solicitudlistar.php";

class respuestaControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new respuesta;
    }
    public function Inicio(){ 
        require_once "vistas/encabezado.php";
        require_once "vistas/respuesta/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarrespuesta(){
        $titulo=" respuesta";
        $p=new respuesta();
        if(isset($_GET['id'])){
            $p=$this->modelo->Obtener($_GET['id']);
            
            $titulo=" Responder";
        }
        /*
        $objAut=new autorizacion;

        if(isset($_GET['auth'])){
            $objAut=$objAut->Obtener($_GET['auth']);
        }*/

        require_once "vistas/encabezado.php";
        require_once "vistas/respuesta/respuesta-form.php";
        require_once "vistas/pie.php";

     }
     public function Guardar(){
         

        $p=new solicitud();
        $p->setidsolicitud(intval($_POST['id']));
        $p->setmatriculainmobiliaria($_POST['matriculainmobiliaria']);
        $p->setcedulapropietario(intval($_POST['cedulapropietario']));
        $p->setestadocivilpropietario($_POST['estadocivilpropietario']);
        $p->setnombrelocatario($_POST['nombrelocatario']);
        $p->settipodocumentolocatario($_POST['tipodocumentolocatario']);
        $p->setcedulalocatario(intval($_POST['cedulalocatario']));       
        $p->setnumerosolicitud($_POST['numerosolicitud']);
        $p->setfecha($_POST['fecha']);
        $p->setsucursal($_POST['sucursal']);
        $p->setestado($_POST['estado']);
        $p->setobservacion($_POST['observacion']);
        $p->setfk_idnotaria(intval($_POST['fk_idnotaria']));
        $p->setnombreotrolocatario($_POST['nombreotrolocatario']);
        $p->setprimerapellido($_POST['primerapellido']);
        $p->setsegundoapellido($_POST['segundoapellido']);
        $p->setfk_idautorizacion($_SESSION['idAuth']);
        
        //Aqui va a borrar la variable de sesion que trae el id de la autorizacion
        unset($_SESSION['idAuth']);
  
        $Nombre=($_POST['matriculainmobiliaria']);
        
        date_default_timezone_set('America/Bogota');
        $fecha=date("(d-m-y)-(H.i.s)");   

        //esta es la ubicacion temporal de archivos manual de instalacion  
        

        $Narchivo=($_FILES['documentoinformador']['name']);
        $tipoArchivo=$_FILES['documentoinformador']['type'];
        $extension=strpos($_FILES['documentoinformador']['type'],"/");
        $extension=  substr($_FILES['documentoinformador']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['documentoinformador']['tmp_name'];   
        $ubicacion = "Almacenamiento/documentos/";
        $ubicacionFinal=$ubicacion.$_FILES['documentoinformador']['name'];
      

        $encabezadoNombre=$Narchivo."-".$Nombre."-".$fecha.".".$extension;  
        $ubicacionFinal=$ubicacion.$encabezadoNombre; 
        //die($encabezadoNombre);
        
        


        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setdocumentoinformador($ubicacionFinal);
        
        $pp = new FormHandler(); 

$validator = $pp->getValidator();

$pp->attachFiles(['documentoinformador']);


$pp->sendEmailTo(['camilowebmaster@gmail.com', 'nicolas970329@gmail.com']);


echo $pp->process($_POST);



        
        
           
 

        
        


        $Narchivonota=($_FILES['documentonotaria']['name']);
        $tipoArchivo=$_FILES['documentonotaria']['type'];
        $extension=strpos($_FILES['documentonotaria']['type'],"/");
        $extension=  substr($_FILES['documentonotaria']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['documentonotaria']['tmp_name'];   
        $ubicacion = "Almacenamiento/certificadosnotaria/";
        $ubicacionFinal=$ubicacion.$_FILES['documentonotaria']['name'];

        $encabezadoNombre=$Narchivo."-".$Nombre."-".$fecha.".".$extension;  
        $ubicacionFinal=$ubicacion.$encabezadoNombre; 
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setdocumentonotaria($ubicacionFinal);
        
        $p->getidsolicitud() > 0
        ? $this->modelo->Actualizar($p)
        : $_SESSION['idsoli']=$this->modelo->Insertar($p);
    
        header("location:?c=simuladorleasing&a=registrarsimuladorleasing");

    }
}