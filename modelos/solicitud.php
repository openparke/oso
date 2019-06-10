<?php

class solicitud{


    private $pdo;

    private $idsolicitud;
    private $matriculainmobiliaria;
    private $cedulapropietario;
    private $estadocivilpropietario;
    private $nombrelocatario;
    private $tipodocumentolocatario;
    private $cedulalocatario;
    private $numerosolicitud;
    private $fecha;
    private $sucursal;
    private $estado;
    private $observacion;
    private $fk_idnotaria;
    private $nombreotrolocatario;
    private $primerapellido;
    private $segundoapellido;
    private $documentoinformador;
    private $documentonotaria;
    private $fk_idautorizacion;

    private $terceramatricula;
    private $tercerdocumento;
    private $cuartamatricula;
    private $cuartodocumento;
    private $quintamatricula;
    private $quintodocumento;

    private $tipopersona;
    private $tipoacto;
    private $ValEscritura;
    private $ValHipoteca;
    private $ValVenta;

    private $docprimernotaria;
    private $docsegundonotaria;
    private $docterceronotaria;
    private $doccuartonotaria;
    private $docquintonotaria;

    private $checkprimero;
    private $checksegundo;
    private $checktercero;
    private $checkcuarto;
    private $checkquinto;

    private $viabilidad;
    private $observacionesnotaria;
    private $fechanotaria;




    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }


    public function getidsolicitud() : ?int{
        return $this->idsolicitud;
    }
    public function setidsolicitud(int $id){
        $this->idsolicitud=$id;
    }


    public function getmatriculainmobiliaria() : ?string{
        return $this->matriculainmobiliaria;
    }
    public function setmatriculainmobiliaria(string $matriculainmobiliaria){
        $this->matriculainmobiliaria=$matriculainmobiliaria;
    }




    public function getcedulapropietario() : ?int{
        return $this->cedulapropietario;
    }
    public function setcedulapropietario(int $cedulapropietario){
        $this->cedulapropietario=$cedulapropietario;
    }



    public function getestadocivilpropietario() : ?string{
        return $this->estadocivilpropietario;
    }
    public function setestadocivilpropietario(string $estadocivilpropietario){
        $this->estadocivilpropietario=$estadocivilpropietario;
    }

    public function getnombrelocatario() : ?string{
        return $this->nombrelocatario;
    }
    public function setnombrelocatario(string $nombrelocatario){
        $this->nombrelocatario=$nombrelocatario;
    }

    public function gettipodocumentolocatario() : ?string{
        return $this->tipodocumentolocatario;
    }
    public function settipodocumentolocatario(string $tipodocumentolocatario){
        $this->tipodocumentolocatario=$tipodocumentolocatario;
    }

    public function getcedulalocatario() : ?int{
        return $this->cedulalocatario;
    }
    public function setcedulalocatario(int $cedulalocatario){
        $this->cedulalocatario=$cedulalocatario;
    }

    public function getnumerosolicitud() : ?string{
        return $this->numerosolicitud;
    }
    public function setnumerosolicitud(string $numerosolicitud){
        $this->numerosolicitud=$numerosolicitud;
    }

    public function getfecha() : ?string{
        return $this->fecha;
    }
    public function setfecha(string $fecha){
        $this->fecha=$fecha;
    }
    public function getsucursal() : ?string{
        return $this->sucursal;
    }
    public function setsucursal(string $sucursal){
        $this->sucursal=$sucursal;
    }
    public function getestado() : ?string{
        return $this->estado;
    }
    public function setestado(string $estado){
        $this->estado=$estado;
    }
    public function getobservacion() : ?string{
        return $this->observacion;
    }
    public function setobservacion(string $observacion){
        $this->observacion=$observacion;
    }

 public function getfk_idnotaria() : ?int{
        return $this->fk_idnotaria;
    }
    public function setfk_idnotaria(int $fk_idnotaria){
        $this->fk_idnotaria=$fk_idnotaria;
    }

 public function getnombreotrolocatario() : ?string{
        return $this->nombreotrolocatario;
    }
    public function setnombreotrolocatario(string $nombreotrolocatario){
        $this->nombreotrolocatario=$nombreotrolocatario;
    }
     public function getprimerapellido() : ?string{
        return $this->primerapellido;
    }
    public function setprimerapellido(string $primerapellido){
        $this->primerapellido=$primerapellido;
    }

     public function getsegundoapellido() : ?string{
        return $this->segundoapellido;
    }
    public function setsegundoapellido(string $segundoapellido){
        $this->segundoapellido=$segundoapellido;
    }

     public function getdocumentoinformador() : ?string{
        return $this->documentoinformador;
    }
    public function setdocumentoinformador(string $documentoinformador){
        $this->documentoinformador=$documentoinformador;
    }

     public function getdocumentonotaria() : ?string{
        return $this->documentonotaria;
    }
    public function setdocumentonotaria(string $documentonotaria){
        $this->documentonotaria=$documentonotaria;
    }

    public function getfk_idautorizacion() : ?int{
        return $this->fk_idautorizacion;
    }
    public function setfk_idautorizacion(int $fk_idautorizacion){
        $this->fk_idautorizacion=$fk_idautorizacion;
    }



   public function getterceramatricula() : ?string{
       return $this->terceramatricula;
   }
   public function setterceramatricula(string $terceramatricula){
       $this->terceramatricula=$terceramatricula;
   }

   public function gettercerdocumento() : ?string{
       return $this->tercerdocumento;
   }
   public function settercerdocumento(string $tercerdocumento){
       $this->tercerdocumento=$tercerdocumento;
   }

   public function getcuartamatricula() : ?string{
       return $this->cuartamatricula;
   }
   public function setcuartamatricula(string $cuartamatricula){
       $this->cuartamatricula=$cuartamatricula;
   }

   public function getcuartodocumento() : ?string{
       return $this->cuartodocumento;
   }
   public function setcuartodocumento(string $cuartodocumento){
       $this->cuartodocumento=$cuartodocumento;
   }

   public function getquintamatricula() : ?string{
       return $this->quintamatricula;
   }
   public function setquintamatricula(string $quintamatricula){
       $this->quintamatricula=$quintamatricula;
   }

   public function getquintodocumento() : ?string{
       return $this->quintodocumento;
   }
   public function setquintodocumento(string $quintodocumento){
       $this->quintodocumento=$quintodocumento;
   }



   public function gettipopersona() : ?string{
       return $this->tipopersona;
   }
   public function settipopersona(string $tipopersona){
       $this->tipopersona=$tipopersona;
   }

   public function gettipoacto() : ?string{
       return $this->tipoacto;
   }
   public function settipoacto(string $tipoacto){
       $this->tipoacto=$tipoacto;
   }

   public function getValEscritura() : ?string{
       return $this->ValEscritura;
   }
   public function setValEscritura(string $ValEscritura){
       $this->ValEscritura=$ValEscritura;
   }

   public function getValHipoteca() : ?string{
       return $this->ValHipoteca;
   }
   public function setValHipoteca(string $ValHipoteca){
       $this->ValHipoteca=$ValHipoteca;
   }

   public function getValVenta() : ?string{
       return $this->ValVenta;
   }
   public function setValVenta(string $ValVenta){
       $this->ValVenta=$ValVenta;
   }







   public function getdocprimernotaria() : ?string{
       return $this->docprimernotaria;
   }
   public function setdocprimernotaria(string $docprimernotaria){
       $this->docprimernotaria=$docprimernotaria;
   }

   public function getdocsegundonotaria() : ?string{
       return $this->docsegundonotaria;
   }
   public function setdocsegundonotaria(string $docsegundonotaria){
       $this->docsegundonotaria=$docsegundonotaria;
   }

   public function getdocterceronotaria() : ?string{
       return $this->docterceronotaria;
   }
   public function setdocterceronotaria(string $docterceronotaria){
       $this->docterceronotaria=$docterceronotaria;
   }

   public function getdoccuartonotaria() : ?string{
       return $this->doccuartonotaria;
   }
   public function setdoccuartonotaria(string $doccuartonotaria){
       $this->doccuartonotaria=$doccuartonotaria;
   }

   public function getdocquintonotaria() : ?string{
       return $this->docquintonotaria;
   }
   public function setdocquintonotaria(string $docquintonotaria){
       $this->docquintonotaria=$docquintonotaria;
   }




   

    





   public function getcheckprimero() : ?string{
       return $this->checkprimero;
   }
   public function setcheckprimero(string $checkprimero){
       $this->checkprimero=$checkprimero;
   }

   public function getchecksegundo() : ?string{
       return $this->checksegundo;
   }
   public function setchecksegundo(string $checksegundo){
       $this->checksegundo=$checksegundo;
   }

   public function getchecktercero() : ?string{
       return $this->checktercero;
   }
   public function setchecktercero(string $checktercero){
       $this->checktercero=$checktercero;
   }

   public function getcheckcuarto() : ?string{
       return $this->checkcuarto;
   }
   public function setcheckcuarto(string $checkcuarto){
       $this->checkcuarto=$checkcuarto;
   }

   public function getcheckquinto() : ?string{
       return $this->checkquinto;
   }
   public function setcheckquinto(string $checkquinto){
       $this->checkquinto=$checkquinto;
   }



   public function getviabilidad() : ?string{
       return $this->viabilidad;
   }
   public function setviabilidad(string $viabilidad){
       $this->viabilidad=$viabilidad;
   }

   public function getobservacionesnotaria() : ?string{
       return $this->observacionesnotaria;
   }
   public function setobservacionesnotaria(string $observacionesnotaria){
       $this->observacionesnotaria=$observacionesnotaria;
   }

   public function getfechanotaria() : ?string{
       return $this->fechanotaria;
   }
   public function setfechanotaria(string $fechanotaria){
       $this->fechanotaria=$fechanotaria;
   }



















    public function ListarDocumento($idsolicitud){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "solicitud" JOIN "notaria" ON "solicitud"."fk_idnotaria" = "notaria"."idnotaria"  
                JOIN "sucursal" ON "notaria"."fk_idsucursal" = "sucursal"."idsucursal"
                WHERE "solicitud"."idsolicitud" = :id;');
            $consulta->execute(['id'=>$idsolicitud]);
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Listarsinresponer(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "solicitud" JOIN "notaria" ON "solicitud"."fk_idnotaria" = "notaria"."idnotaria"  JOIN "sucursal" ON "notaria"."fk_idsucursal" = "sucursal"."idsucursal" 
              WHERE "fechanotaria"=?;');
            $consulta->execute(array('Sin Responder'));
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }







    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "solicitud" JOIN "notaria" ON "solicitud"."fk_idnotaria" = "notaria"."idnotaria"  JOIN "sucursal" ON "notaria"."fk_idsucursal" = "sucursal"."idsucursal" ORDER BY "solicitud"."fecha" ASC;');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Listarporusuario(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "solicitud" JOIN "notaria" ON "solicitud"."fk_idnotaria" = "notaria"."idnotaria" JOIN "Usuario" ON "fk_idUsuario"= "idUsuario" WHERE "idUsuario"=?;');
            $consulta->execute(array($_SESSION['idUsuario']));
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Listarporsucursal(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "solicitud" JOIN "notaria" ON "solicitud"."fk_idnotaria" = "notaria"."idnotaria" JOIN "Usuario" ON "notaria"."fk_idUsuario"= "Usuario"."idUsuario" JOIN "sucursal" ON "notaria"."fk_idsucursal"= "sucursal"."idsucursal" WHERE "idsucursal"=?;');
            $consulta->execute(array($_SESSION['idsucursal']));
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function ListarNotarias(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "notaria";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

     public function Listarsucursales(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "sucursal";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }


     public function Listarnombresnotaria(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "notaria" JOIN "Usuario" ON "notaria"."fk_idUsuario" = "Usuario"."idUsuario"
WHERE "idUsuario"=?; ');
            $consulta->execute(array($_SESSION['idUsuario']));
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }


 public function Listarsucursal(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "notaria" JOIN "Usuario" ON "notaria"."fk_idUsuario" = "Usuario"."idUsuario"
JOIN "sucursal" ON "notaria"."fk_idsucursal" = "sucursal"."idsucursal"
WHERE "idUsuario"=?; ');
            $consulta->execute(array($_SESSION['idUsuario']));
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }



    public function Listarsucursalnotaria(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM  "sucursal" ;');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }






    public function Listarautorizacion(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "autorizacion";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }



    public function Obtener($id){
        try{

            $consulta=$this->pdo->prepare('SELECT * FROM "solicitud" WHERE "idsolicitud"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new solicitud();

            $p->setidsolicitud($r->idsolicitud);
            $p->setmatriculainmobiliaria($r->matriculainmobiliaria);
            $p->setcedulapropietario($r->cedulapropietario);
            $p->setestadocivilpropietario($r->estadocivilpropietario);
            $p->setnombrelocatario($r->nombrelocatario);
            $p->settipodocumentolocatario($r->tipodocumentolocatario);
            $p->setcedulalocatario($r->cedulalocatario);
            $p->setnumerosolicitud($r->numerosolicitud);
            $p->setfecha($r->fecha);
            $p->setsucursal($r->sucursal);
            $p->setestado($r->estado);
            $p->setobservacion($r->observacion);
            $p->setfk_idnotaria($r->fk_idnotaria);
            $p->setnombreotrolocatario($r->nombreotrolocatario);
            $p->setprimerapellido($r->primerapellido);
            $p->setsegundoapellido($r->segundoapellido);
            $p->setdocumentoinformador($r->documentoinformador);
            $p->setdocumentonotaria($r->documentonotaria);
            $p->setfk_idautorizacion($r->fk_idautorizacion);
            $p->setterceramatricula($r->terceramatricula);
            $p->settercerdocumento($r->tercerdocumento);
            $p->setcuartamatricula($r->cuartamatricula);
            $p->setcuartodocumento($r->cuartodocumento);
            $p->setquintamatricula($r->quintamatricula);
            $p->setquintodocumento($r->quintodocumento);
            $p->settipopersona($r->tipopersona);
            $p->settipoacto($r->tipoacto);
            $p->setValEscritura($r->ValEscritura);
            $p->setValHipoteca($r->ValHipoteca);
            $p->setValVenta($r->ValVenta);

            $p->setdocprimernotaria($r->docprimernotaria);
            $p->setdocsegundonotaria($r->docsegundonotaria);
            $p->setdocterceronotaria($r->docterceronotaria);
            $p->setdoccuartonotaria($r->doccuartonotaria);
            $p->setdocquintonotaria($r->docquintonotaria);

            $p->setcheckprimero($r->checkprimero);
            $p->setchecksegundo($r->checksegundo);
            $p->setchecktercero($r->checktercero);
            $p->setcheckcuarto($r->checkcuarto);
            $p->setcheckquinto($r->checkquinto);
            $p->setviabilidad($r->viabilidad);
            $p->setobservacionesnotaria($r->observacionesnotaria);
            $p->setfechanotaria($r->fechanotaria);

            

            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function ObtenerCorreoAut($id) //Id de Solicitud, este metodo devuleve el correo guardado en la tabla Autorizacion
    {
        $consulta=$this->pdo->prepare(
                'SELECT correo FROM "solicitud"
                    JOIN "autorizacion"
                    ON "solicitud"."fk_idautorizacion" = "autorizacion"."idautorizacion"
                    WHERE "idsolicitud"=?;');
        $consulta->execute(array($id));
        $r=$consulta->fetch(PDO::FETCH_OBJ);

        return $r->correo;//solo se devuelve el string del
    }



   public function Insertar(solicitud $p){


    try{



    $consulta=('INSERT INTO "solicitud"(
         "matriculainmobiliaria","cedulapropietario","estadocivilpropietario","nombrelocatario","tipodocumentolocatario","cedulalocatario","numerosolicitud",
         "fecha","sucursal","estado","observacion","fk_idnotaria","nombreotrolocatario","primerapellido","segundoapellido","documentoinformador",
         "documentonotaria","fk_idautorizacion","terceramatricula","tercerdocumento","cuartamatricula","cuartodocumento","quintamatricula","quintodocumento",
         "tipopersona","tipoacto","ValEscritura","ValHipoteca","ValVenta",
         "docprimernotaria","docsegundonotaria","docterceronotaria","doccuartonotaria","docquintonotaria","checkprimero","checksegundo","checktercero","checkcuarto","checkquinto","viabilidad","observacionesnotaria","fechanotaria")
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);');

   $this->pdo->prepare($consulta)->execute(array(
    $p->getmatriculainmobiliaria(),
    $p->getcedulapropietario(),
    $p->getestadocivilpropietario(),
    $p->getnombrelocatario(),
    $p->gettipodocumentolocatario(),
    $p->getcedulalocatario(),
    $p->getnumerosolicitud(),
    $p->getfecha(),
    $p->getsucursal(),
    $p->getestado(),
    $p->getobservacion(),
    $p->getfk_idnotaria(),
    $p->getnombreotrolocatario(),
    $p->getprimerapellido(),
    $p->getsegundoapellido(),
    $p->getdocumentoinformador(),
    $p->getdocumentonotaria(),
    $p->getfk_idautorizacion(),
    $p->getterceramatricula(),
    $p->gettercerdocumento(),
    $p->getcuartamatricula(),
    $p->getcuartodocumento(),
    $p->getquintamatricula(),
    $p->getquintodocumento(),
    $p->gettipopersona(),
    $p->gettipoacto(),
    $p->getValEscritura(),
    $p->getValHipoteca(),
    $p->getValVenta(),

    $p->getdocprimernotaria(),
    $p->getdocsegundonotaria(),
    $p->getdocterceronotaria(),
    $p->getdoccuartonotaria(),
    $p->getdocquintonotaria(),
    $p->getcheckprimero(),
    $p->getchecksegundo(),
    $p->getchecktercero(),
    $p->getcheckcuarto(),
    $p->getcheckquinto(),
    $p->getviabilidad(),
    $p->getobservacionesnotaria(),
    $p->getfechanotaria(),


    ));

    $id = $this->pdo->lastInsertId();
    return $id;

     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Actualizar(solicitud $p){

    try{
        $consulta=('UPDATE "solicitud" SET
        "matriculainmobiliaria"=?,"cedulapropietario"=?,"estadocivilpropietario"=?,"nombrelocatario"=?,"tipodocumentolocatario"=?,"cedulalocatario"=?,"numerosolicitud"=?,
        "fecha"=?,"sucursal"=?,"estado"=?,"observacion"=?,"fk_idnotaria"=?,"nombreotrolocatario"=?,"primerapellido"=?,"segundoapellido"=?,"fk_idautorizacion"=?,
        "terceramatricula"=?,"cuartamatricula"=?,"quintamatricula"=?,
        "tipopersona"=?,"tipoacto"=?,"ValEscritura"=?,"ValHipoteca"=?,"ValVenta"=?,
        "docprimernotaria"=?,"docsegundonotaria"=?,"docterceronotaria"=?,"doccuartonotaria"=?,"docquintonotaria"=?,"checkprimero"=?,"checksegundo"=?,"checktercero"=?,"checkcuarto"=?,"checkquinto"=?,"viabilidad"=?,"observacionesnotaria"=?,"fechanotaria"=?
        WHERE "idsolicitud"=?;');


    $this->pdo->prepare($consulta)->execute(array(
    $p->getmatriculainmobiliaria(),
    $p->getcedulapropietario(),
    $p->getestadocivilpropietario(),
    $p->getnombrelocatario(),
    $p->gettipodocumentolocatario(),
    $p->getcedulalocatario(),
    $p->getnumerosolicitud(),
    $p->getfecha(),
    $p->getsucursal(),
    $p->getestado(),
    $p->getobservacion(),
    $p->getfk_idnotaria(),
    $p->getnombreotrolocatario(),
    $p->getprimerapellido(),
    $p->getsegundoapellido(),

    $p->getfk_idautorizacion(),
    $p->getterceramatricula(),

    $p->getcuartamatricula(),

    $p->getquintamatricula(),


    $p->gettipopersona(),
    $p->gettipoacto(),
    $p->getValEscritura(),
    $p->getValHipoteca(),
    $p->getValVenta(),
    
    $p->getdocprimernotaria(),
    $p->getdocsegundonotaria(),
    $p->getdocterceronotaria(),
    $p->getdoccuartonotaria(),
    $p->getdocquintonotaria(),
    $p->getcheckprimero(),
    $p->getchecksegundo(),
    $p->getchecktercero(),
    $p->getcheckcuarto(),
    $p->getcheckquinto(),
    $p->getviabilidad(),
    $p->getobservacionesnotaria(),
    $p->getfechanotaria(),

    $p->getidsolicitud()


    ));
              //Ver Primer Documento
                  if((substr($p->getdocumentoinformador(),(strlen($p->getdocumentoinformador()))-4)) == ".pdf"){
                  $consulta1=('UPDATE "solicitud" SET
                  "documentoinformador"=?
                  WHERE "idsolicitud"=?;');

                  $this->pdo->prepare($consulta1)->execute(array($p->documentoinformador(),$p->getidsolicitud()));
                  }else{
                  }
              //Fin Ver Primer Documento


              //Ver Segundo Documento
                  if((substr($p->getdocumentonotaria(),(strlen($p->getdocumentonotaria()))-4)) == ".pdf"){
                  $consulta2=('UPDATE "solicitud" SET
                  "documentonotaria"=?
                  WHERE "idsolicitud"=?;');

                  $this->pdo->prepare($consulta2)->execute(array($p->documentonotaria(),$p->getidsolicitud()));
                  }else{
                  }
              //Fin Ver Segundo Documento


              //Ver Tercer Documento
                  if((substr($p->gettercerdocumento(),(strlen($p->gettercerdocumento()))-4)) == ".pdf"){
                  $consulta3=('UPDATE "solicitud" SET
                  "tercerdocumento"=?
                  WHERE "idsolicitud"=?;');

                  $this->pdo->prepare($consulta3)->execute(array($p->tercerdocumento(),$p->getidsolicitud()));
                  }else{
                  }
              //Fin Ver Tercer Documento


              //Ver Cuarto Documento
                  if((substr($p->getcuartodocumento(),(strlen($p->getcuartodocumento()))-4)) == ".pdf"){
                  $consulta4=('UPDATE "solicitud" SET
                  "cuartodocumento"=?
                  WHERE "idsolicitud"=?;');

                  $this->pdo->prepare($consulta4)->execute(array($p->cuartodocumento(),$p->getidsolicitud()));
                  }else{
                  }
              //Fin Ver Cuarto Documento


              //Ver Quinto Documento
                  if((substr($p->getquintodocumento(),(strlen($p->getquintodocumento()))-4)) == ".pdf"){
                  $consulta5=('UPDATE "solicitud" SET
                  "quintodocumento"=?
                  WHERE "idsolicitud"=?;');

                  $this->pdo->prepare($consulta5)->execute(array($p->quintodocumento(),$p->getidsolicitud()));
                  }else{
                  }
              //Fin Ver Quinto Documento





     }catch(Exeception $e){
    die($e->getMessage());
}


}


}
