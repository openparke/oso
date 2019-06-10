<?php

class respuesta{


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


    






    
    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "solicitud" JOIN "notaria" ON "solicitud"."fk_idnotaria" = "notaria"."idnotaria" JOIN "autorizacion" ON "solicitud"."fk_idautorizacion" = "autorizacion"."idautorizacion"');
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

    public function ListarNotarias(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "notaria";');
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

            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

   

   public function Insertar(respuesta $p){
         

    try{
    

    $consulta=('INSERT INTO "solicitud"(
         "matriculainmobiliaria","cedulapropietario","estadocivilpropietario","nombrelocatario","tipodocumentolocatario","cedulalocatario","numerosolicitud","fecha","sucursal","estado","observacion","fk_idnotaria","nombreotrolocatario","primerapellido","segundoapellido","documentoinformador","documentonotaria","fk_idautorizacion")
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);');
        
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
  
    ));

    $id = $this->pdo->lastInsertId();
    return $id;

     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Actualizar(respuesta $p){

    try{
        $consulta=('UPDATE "solicitud" SET
        "matriculainmobiliaria"=?,"cedulapropietario"=?,"estadocivilpropietario"=?,"nombrelocatario"=?,"tipodocumentolocatario"=?,"cedulalocatario"=?,"numerosolicitud"=?,"fecha"=?,"sucursal"=?,"estado"=?,"observacion"=?,"fk_idnotaria"=?,"nombreotrolocatario"=?,"primerapellido"=?,"segundoapellido"=?,"documentoinformador"=?,"documentonotaria"=?
        WHERE "idsolicitud"=?,"fk_idautorizacion"=?;');
    
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
    $p->getidsolicitud()
       
            
    ));

    if((substr($p->getdocumentoinformador(),(strlen($p->getdocumentoinformador()))-4)) == ".pdf"){
    $consulta1=('UPDATE "solicitud" SET
    "documentoinformador"=?
   WHERE "idsolicitud"=?;');

$this->pdo->prepare($consulta1)->execute(array($p->documentoinformador(),$p->getidsolicitud()));
   }else{

   }

    
     }catch(Exeception $e){
    die($e->getMessage());
}


}


}