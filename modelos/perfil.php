<?php

class Perfil{

    private $pdo;

    private $idnotaria;
    private $Nombres;
    // private $Apellidos;
    // private $TipoDocumento;
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

    // public function notaria() : ?string{
    //     return $this->Apellidos;
    // }
    // public function notaria(string $Apellidos){
    //     $this->Apellidos=$Apellidos;
    // }

    // public function notaria() : ?string{
    //     return $this->TipoDocumento;
    // }
    // public function notaria(string $TipoDocumento){
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
    
    // public function notaria() : ?string{
    //     return $this->CorreoInstitucional;
    // }
    // public function notaria(string $CorreoInstitucional){
    //     $this->CorreoInstitucional=$CorreoInstitucional;
    // }


    public function getfk_idUsuario() : ?int{
        return $this->Usuario;
    }
    public function setfk_idUsuario(int $Usuario){
        $this->Usuario=$Usuario;
    }


    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT ins."idnotaria", 
            ins."Nombresnotaria",            
            ins."NumeroDocumentonotaria", 
            ins."CorreoElectroniconotaria", 
            ins."fk_idUsuario",
            usu."Usuario",
            usu."Estados",
            usu."idUsuario"
    FROM "notaria" ins 
        INNER JOIN "Usuario" usu ON ins."fk_idUsuario"= usu."idUsuario"');
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
            // $p->notaria($r->notaria);
            // $p->notaria($r->notaria);
            $p->setNumeroDocumentonotaria($r->NumeroDocumentonotaria);
            $p->setCorreoElectroniconotaria($r->CorreoElectroniconotaria);
            $p->setfk_idUsuario($r->fk_idUsuario);
            // $p->notaria($r->notaria);
           
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
            // $p->notaria($r->notaria);
            // $p->notaria($r->notaria);
            $p->setNumeroDocumentonotaria($r->NumeroDocumentonotaria);
            $p->setCorreoElectroniconotaria($r->CorreoElectroniconotaria);
            // $p->notaria($r->notaria);
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
           $p->getNumeroDocumentonotariaor(),
           $p->getCorreoElectroniconotaria(),
           $p->getfk_idUsuario(),
           // $p->notaria(),
            
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
       // $p->notaria(),
       $p->getidnotaria()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}
public function ActualizarUsuId(notaria $p){

    
    try{
        $consulta=('UPDATE "notaria" SET
        "Nombresnotaria"=?, "NumeroDocumentonotaria"=?, "CorreoElectroniconotaria"=?, "fk_idUsuario"=?
        WHERE "idnotaria"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresnotaria(),
       // $p->notaria(),
       // $p->notaria(),
       $p->getNumeroDocumentonotaria(),
       $p->getCorreoElectroniconotaria(),
       $p->getfk_idUsuario(),
       // $p->notaria(),
       $p->getidnotaria()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}



}