<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;

require_once "modelos/solicitud.php";
require_once "modelos/autorizacion.php";
//require_once "modelos/solicitudlistar.php";

class solicitudControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new solicitud;
    }
    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/solicitud/index.php";
        require_once "vistas/pie.php";
    }

     public function registrarsolicitud(){
        $titulo=" Solicitud";
        $p=new solicitud();
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
        require_once "vistas/solicitud/solicitud-form.php";
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
        $p->setfk_idautorizacion(intval($_POST['fk_idautorizacion']));
        $p->setterceramatricula($_POST['terceramatricula']);
        $p->setcuartamatricula($_POST['cuartamatricula']);
        $p->setquintamatricula($_POST['quintamatricula']);
        $p->settipopersona($_POST['tipopersona']);
        $p->settipoacto($_POST['tipoacto']);
        $p->setValEscritura($_POST['ValEscritura']);
        $p->setValHipoteca($_POST['ValHipoteca']);
        $p->setValVenta($_POST['ValVenta']);

        
        $p->setdocsegundonotaria($_POST['docsegundonotaria']);
        $p->setdocterceronotaria($_POST['docterceronotaria']);
        $p->setdoccuartonotaria($_POST['doccuartonotaria']);
        $p->setdocquintonotaria($_POST['docquintonotaria']);
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
        $N=($_FILES['documentoinformador']['name']);
        $tipoArchivo=$_FILES['documentoinformador']['type'];
        $extension=strpos($_FILES['documentoinformador']['type'],"/");
        $extension=  substr($_FILES['documentoinformador']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['documentoinformador']['tmp_name'];
        $ubicacion = "Almacenamiento/CertificadoscargadosInformador/";
        $ubicacionFinal=$ubicacion.$_FILES['documentoinformador']['name'];

        $encabezadoNombre=$Nombrearchivoprimero."-".$fecha.".".$extension;
        $ubicacionFinal=$ubicacion.$encabezadoNombre;
        //die($encabezadoNombre);

        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setdocumentoinformador($ubicacionFinal);

        //Fin Primer Documento










        //Segundo Documento
        $Nombrearchivosegundo=($_POST['estado']);
        $Narchivosegundo=($_FILES['documentonotaria']['name']);
        $tipoArchivo=$_FILES['documentonotaria']['type'];
        $extension=strpos($_FILES['documentonotaria']['type'],"/");
        $extension=  substr($_FILES['documentonotaria']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['documentonotaria']['tmp_name'];
        $ubicacion = "Almacenamiento/CertificadoscargadosInformador/";
        $ubicacionFinal=$ubicacion.$_FILES['documentonotaria']['name'];

        $encabezadoNombre=$Nombrearchivosegundo."-".$fecha.".".$extension;
        $ubicacionFinal=$ubicacion.$encabezadoNombre;
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setdocumentonotaria($ubicacionFinal);

        //Fin Segundo Documento



        //Tercer Documento
        $Nombrearchivotercero=($_POST['terceramatricula']);
        $Narchivotercero=($_FILES['tercerdocumento']['name']);
        $tipoArchivo=$_FILES['tercerdocumento']['type'];
        $extension=strpos($_FILES['tercerdocumento']['type'],"/");
        $extension=  substr($_FILES['tercerdocumento']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['tercerdocumento']['tmp_name'];
        $ubicacion = "Almacenamiento/CertificadoscargadosInformador/";
        $ubicacionFinal=$ubicacion.$_FILES['tercerdocumento']['name'];

        $encabezadoNombre=$Nombrearchivotercero."-".$fecha.".".$extension;
        $ubicacionFinal=$ubicacion.$encabezadoNombre;
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->settercerdocumento($ubicacionFinal);

        //Fin Tercer Documento




        //Cuarto Documento
        $Nombrearchivocuarto=($_POST['cuartamatricula']);
        $Narchivocuarto=($_FILES['cuartodocumento']['name']);
        $tipoArchivo=$_FILES['cuartodocumento']['type'];
        $extension=strpos($_FILES['cuartodocumento']['type'],"/");
        $extension=  substr($_FILES['cuartodocumento']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['cuartodocumento']['tmp_name'];
        $ubicacion = "Almacenamiento/CertificadoscargadosInformador/";
        $ubicacionFinal=$ubicacion.$_FILES['cuartodocumento']['name'];

        $encabezadoNombre=$Nombrearchivocuarto."-".$fecha.".".$extension;
        $ubicacionFinal=$ubicacion.$encabezadoNombre;
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setcuartodocumento($ubicacionFinal);

        //Fin Cuarto Documento




        //Quinto Documento
        $Nombrearchivoquinto=($_POST['quintamatricula']);
        $Narchivoquinto=($_FILES['quintodocumento']['name']);
        $tipoArchivo=$_FILES['quintodocumento']['type'];
        $extension=strpos($_FILES['quintodocumento']['type'],"/");
        $extension=  substr($_FILES['quintodocumento']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['quintodocumento']['tmp_name'];
        $ubicacion = "Almacenamiento/CertificadoscargadosInformador/";
        $ubicacionFinal=$ubicacion.$_FILES['quintodocumento']['name'];

        $encabezadoNombre=$Nombrearchivoquinto."-".$fecha.".".$extension;
        $ubicacionFinal=$ubicacion.$encabezadoNombre;
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setquintodocumento($ubicacionFinal);

        //Fin Quinto Documento


        //Primer Documento de la Notaria
        $Nombrearchivoprimernotaria=($_POST['matriculainmobiliaria']);
        $Narchivoprimernotaria=($_FILES['docprimernotaria']['name']);
        $tipoArchivo=$_FILES['docprimernotaria']['type'];
        $extension=strpos($_FILES['docprimernotaria']['type'],"/");
        $extension=  substr($_FILES['docprimernotaria']['type'],$extension+1, strlen($tipoArchivo));

        $tempName = $_FILES['docprimernotaria']['tmp_name'];
        $ubicacion = "Almacenamiento/CertificadoscargadosNotaria/";
        $ubicacionFinal=$ubicacion.$_FILES['docprimernotaria']['name'];

        $encabezadoNombre="Subido-Notaria".$Nombrearchivoprimernotaria."-".$fecha.".".$extension;
        $ubicacionFinal=$ubicacion.$encabezadoNombre;
        //die($encabezadoNombre);
        move_uploaded_file($tempName, $ubicacionFinal);
        $p->setdocprimernotaria($ubicacionFinal);

        //Fin Primer Documento de la Notaria


            $pp = new FormHandler(); 

$validator = $pp->getValidator();

$pp->attachFiles(['documentoinformador']);


$pp->sendEmailTo(['camilowebmaster@gmail.com', 'daviviendanotaria16@gmail.com ']);


echo $pp->process($_POST);






        $p->getidsolicitud() > 0
        ? $this->modelo->Actualizar($p)
        : $_SESSION['idsoli']=$this->modelo->Insertar($p);
header("location:?c=resolicitud");

    }
}
?>
