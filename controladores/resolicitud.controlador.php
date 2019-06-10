<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;

require_once "modelos/resolicitud.php";
require_once "modelos/autorizacion.php";
//require_once "modelos/solicitudlistar.php";

class resolicitudControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new resolicitud;
    }
    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/resolicitud/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarresolicitud(){
        $titulo=" resolicitud";
        $p=new resolicitud();
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
        require_once "vistas/resolicitud/resolicitud-form.php";
        require_once "vistas/pie.php";

     }
     public function Guardar(){


        $p=new resolicitud();
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
        $p->setdocumentoinformador($_POST['documentoinformador']);
        $p->setdocumentonotaria($_POST['documentonotaria']);
        $p->setfk_idautorizacion(intval($_POST['fk_idautorizacion']));
        $p->setterceramatricula($_POST['terceramatricula']);
        $p->settercerdocumento($_POST['tercerdocumento']);
        $p->setcuartamatricula($_POST['cuartamatricula']);
        $p->setcuartodocumento($_POST['cuartodocumento']);
        $p->setquintamatricula($_POST['quintamatricula']);
        $p->setquintodocumento($_POST['quintodocumento']);
        $p->settipopersona($_POST['tipopersona']);
        $p->settipoacto($_POST['tipoacto']);
        $p->setValEscritura($_POST['ValEscritura']);
        $p->setValHipoteca($_POST['ValHipoteca']);
        $p->setValVenta($_POST['ValVenta']);
        
        $p->setcheckprimero($_POST['checkprimero']);
        $p->setchecksegundo($_POST['checksegundo']);
        $p->setchecktercero($_POST['checktercero']);
        $p->setcheckcuarto($_POST['checkcuarto']);
        $p->setcheckquinto($_POST['checkquinto']);
        $p->setviabilidad($_POST['viabilidad']);
        $p->setobservacionesnotaria($_POST['observacionesnotaria']);
        $p->setfechanotaria($_POST['fechanotaria']);


        //Aqui va a borrar la variable de sesion que trae el id de la autorizacion
        unset($_SESSION['idAuth']);



        date_default_timezone_set('America/Bogota');
        $fecha=date("(d-m-y)-(H.i.s)");



        //Primer Documento
        $Nombrearchivoprimero=($_POST['matriculainmobiliaria']);
        $N=($_FILES['docprimernotaria']['name']);
        $tipoArchivo=$_FILES['docprimernotaria']['type'];
        $extension=strpos($_FILES['docprimernotaria']['type'],"/");
        $extension=  substr($_FILES['docprimernotaria']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['docprimernotaria']['tmp_name'];
        $ubicacion = "Almacenamiento/CertificadoscargadosNotaria/";
        $ubicacionFinal=$ubicacion.$_FILES['docprimernotaria']['name'];

        $encabezadoNombre=$Nombrearchivoprimero."-".$fecha.".".$extension;
        $ubicacionFinal=$ubicacion.$encabezadoNombre;
        //die($encabezadoNombre);

        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setdocprimernotaria($ubicacionFinal);

        //Fin Primer Documento










        //Segundo Documento
        $Nombrearchivosegundo=($_POST['estado']);
        $Narchivosegundo=($_FILES['docsegundonotaria']['name']);
        $tipoArchivo=$_FILES['docsegundonotaria']['type'];
        $extension=strpos($_FILES['docsegundonotaria']['type'],"/");
        $extension=  substr($_FILES['docsegundonotaria']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['docsegundonotaria']['tmp_name'];
        $ubicacion = "Almacenamiento/CertificadoscargadosNotaria/";
        $ubicacionFinal=$ubicacion.$_FILES['docsegundonotaria']['name'];

        $encabezadoNombre=$Nombrearchivosegundo."-".$fecha.".".$extension;
        $ubicacionFinal=$ubicacion.$encabezadoNombre;
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setdocsegundonotaria($ubicacionFinal);

        //Fin Segundo Documento



        //Tercer Documento
        $Nombrearchivotercero=($_POST['terceramatricula']);
        $Narchivotercero=($_FILES['docterceronotaria']['name']);
        $tipoArchivo=$_FILES['docterceronotaria']['type'];
        $extension=strpos($_FILES['docterceronotaria']['type'],"/");
        $extension=  substr($_FILES['docterceronotaria']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['docterceronotaria']['tmp_name'];
        $ubicacion = "Almacenamiento/CertificadoscargadosNotaria/";
        $ubicacionFinal=$ubicacion.$_FILES['docterceronotaria']['name'];

        $encabezadoNombre=$Nombrearchivotercero."-".$fecha.".".$extension;
        $ubicacionFinal=$ubicacion.$encabezadoNombre;
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setdocterceronotaria($ubicacionFinal);
        //Fin Tercer Documento




        //Cuarto Documento
        $Nombrearchivocuarto=($_POST['cuartamatricula']);
        $Narchivocuarto=($_FILES['doccuartonotaria']['name']);
        $tipoArchivo=$_FILES['doccuartonotaria']['type'];
        $extension=strpos($_FILES['doccuartonotaria']['type'],"/");
        $extension=  substr($_FILES['doccuartonotaria']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['doccuartonotaria']['tmp_name'];
        $ubicacion = "Almacenamiento/CertificadoscargadosNotaria/";
        $ubicacionFinal=$ubicacion.$_FILES['doccuartonotaria']['name'];

        $encabezadoNombre=$Nombrearchivocuarto."-".$fecha.".".$extension;
        $ubicacionFinal=$ubicacion.$encabezadoNombre;
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setdoccuartonotaria($ubicacionFinal);
       
        //Fin Cuarto Documento




        //Quinto Documento
        $Nombrearchivoquinto=($_POST['quintamatricula']);
        $Narchivoquinto=($_FILES['docquintonotaria']['name']);
        $tipoArchivo=$_FILES['docquintonotaria']['type'];
        $extension=strpos($_FILES['docquintonotaria']['type'],"/");
        $extension=  substr($_FILES['docquintonotaria']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['docquintonotaria']['tmp_name'];
        $ubicacion = "Almacenamiento/CertificadoscargadosNotaria/";
        $ubicacionFinal=$ubicacion.$_FILES['docquintonotaria']['name'];

        $encabezadoNombre=$Nombrearchivoquinto."-".$fecha.".".$extension;
        $ubicacionFinal=$ubicacion.$encabezadoNombre;
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setdocquintonotaria($ubicacionFinal);

        //Fin Quinto Documento



      



        $p->getidsolicitud() > 0
        ? $this->modelo->Actualizar($p)
        : $_SESSION['idsoli']=$this->modelo->Insertar($p);
header("location:?c=resolicitud");

    }
}
?>
