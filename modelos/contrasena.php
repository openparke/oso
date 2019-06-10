<?php

class contrasena{

    private $pdo;

    private $idnotaria;
    private $Nombres;
    // private $Apellidos;
    private $TipoDocumento;
    private $NumeroDocumento;
    private $CorreoElectronico;
    private $Usuario;
    
    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getidnotaria() : ?int{
        return $this->idnotaria;
    }
    public function setidnotaria(int $id){
        $this->idnotaria=$id;
    }
    public function getNombresnotaria() : ?string{
        return $this->Nombres;
    }
    public function setNombresnotaria(string $Nombres){
        $this->Nombres=$Nombres;
    }

    // public function getApellidosnotaria() : ?string{
    //     return $this->Apellidos;
    // }
    // public function setApellidosnotaria(string $Apellidos){
    //     $this->Apellidos=$Apellidos;
    // }

    // public function getTipoDocumentonotaria() : ?string{
    //     return $this->TipoDocumento;
    // }
    // public function setTipoDocumentonotaria(string $TipoDocumento){
    //     $this->TipoDocumento=$TipoDocumento;
    // }

    public function getNumeroDocumentonotaria() : ?int{
        return $this->NumeroDocumento;
    }
    public function setNumeroDocumentonotaria(int $NumeroDocumento){
        $this->NumeroDocumento=$NumeroDocumento;
    }

    public function getCorreoElectroniconotaria() : ?string{
        return $this->CorreoElectronico;
    }
    public function setCorreoElectroniconotaria(string $CorreoElectronico){
        $this->CorreoElectronico=$CorreoElectronico;
    }


    public function getfk_idUsuario() : ?int{
        return $this->Usuario;
    }
    public function setfk_idUsuario(int $Usuario){
        $this->Usuario=$Usuario;
    }


    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "notaria";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "notaria" WHERE "idnotaria"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new notaria();
            $p->setidnotaria($r->idnotaria);
            $p->setNombresnotaria($r->Nombresnotaria);
            // $p->setApellidosnotaria($r->Apellidosnotaria);
            // $p->setTipoDocumentonotaria($r->TipoDocumentonotaria);
            $p->setNumeroDocumentonotaria($r->NumeroDocumentonotaria);
            $p->setCorreoElectroniconotaria($r->CorreoElectroniconotaria);
            $p->setfk_idUsuario($r->fk_idUsuario);
           
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
     
    }

    public function ObtenerUsuId($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "notaria" WHERE "fk_idUsuario"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new notaria();
            $p->setidnotaria($r->idnotaria);
            $p->setNombresnotaria($r->Nombresnotaria);
            // $p->setApellidosnotaria($r->notaria);
            // $p->setTipoDocumentonotaria($r->notaria);
            $p->setNumeroDocumentonotaria($r->NumeroDocumentonotaria);
            $p->setCorreoElectroniconotaria($r->CorreoElectroniconotaria);
            $p->setfk_idUsuario($r->fk_idUsuario);
           
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

   public function Insertar(notaria $p){

    try{

    $consulta=('INSERT INTO public."notaria"(
         "Nombresnotaria","NumeroDocumentonotaria", "CorreoElectroniconotaria", "fk_idUsuario")
        VALUES (?,?,?,?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresnotaria(),
       // $p->notaria(),
       // $p->notaria(),
       $p->getNumeroDocumentonotaria(),
       $p->getCorreoElectroniconotaria(),
       $p->getfk_idUsuario(),
        
    ));
    

     }catch(Exeception $e){
    die($e->getMessage());
}



}

public function Actualizar(notaria $p){

    
    try{
        $consulta=('UPDATE "notaria" SET
        "Nombresnotaria"=?,"NumeroDocumentonotaria"=?, "CorreoElectroniconotaria"=?, "fk_idUsuario"=?
        WHERE "idnotaria"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresnotaria(),
       // $p->notaria(),
       // $p->notaria(),
       $p->getNumeroDocumentonotaria(),
       $p->getCorreoElectroniconotaria(),
       $p->getfk_idUsuario(),
       $p->getidnotaria()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}
public function ActualizarUsuId(notaria $p){

    
    try{
        $consulta=('UPDATE "notaria" SET
        "Nombresnotaria"=?,  "NumeroDocumentonotaria"=?, "CorreoElectroniconotaria"=?, "fk_idUsuario"=?
        WHERE "idnotaria"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresnotaria(),
       // $p->notaria(),
       // $p->notaria(),
       $p->getNumeroDocumentonotaria(),
       $p->getCorreoElectroniconotaria(),
       $p->getfk_idUsuario(),
       $p->getidnotaria()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}



}
public function Validar($Contrasena,$idUsuario) {

    $consulta=$this->pdo->prepare('SELECT Contrasena FROM "Usuario" WHERE "Contrasena"= ? AND "idUsuario" = ? ');
    $consulta->execute(array($Contrasena, $idUsuario));
    $r=$consulta->fetch(PDO::FETCH_OBJ);
    $p=new notaria();
    $p->setidnotaria($r->idnotaria);
    $p->setNombresnotaria($r->Nombresnotaria);
    // $p->notaria($r->notaria);
    // $p->notaria($r->notaria);
    $p->setNumeroDocumentonotaria($r->NumeroDocumentonotaria);
    $p->setCorreoElectroniconotaria($r->CorreoElectroniconotaria);
    $p->setfk_idUsuario($r->fk_idUsuario);
   
    return $p;
}



}