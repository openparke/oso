<?php

class notaria{

    private $pdo;

    private $idnotaria;
    private $Nombres;
    // private $Apellidos;
    // private $TipoDocumento;
    private $NumeroDocumento;
    private $CorreoElectronico;
    private $Usuario;
    private $Estados;
    private $fk_idsucursal;
    // private $CorreoInstitucional;
    
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
    public function getEstados() : ?string{
        return $this->Estados;
    }
    public function setEstados(string $Estados){
        $this->Estados=$Estados;
    }

    public function getfk_idsucursal() : ?int{
        return $this->fk_idsucursal;
    }
    public function setfk_idsucursal(int $fk_idsucursal){
        $this->fk_idsucursal=$fk_idsucursal;
    }



    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "notaria" JOIN "Usuario" ON "notaria"."fk_idUsuario" = "Usuario"."idUsuario"
JOIN "sucursal" ON "notaria"."fk_idsucursal" = "sucursal"."idsucursal"
');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }


    public function Listarsucursal(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "sucursal";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Listarinformadores(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "notaria" JOIN "Usuario" ON "notaria"."fk_idUsuario" = "Usuario"."idUsuario"
JOIN "sucursal" ON "notaria"."fk_idsucursal" = "sucursal"."idsucursal"
WHERE "fk_idsucursal"=?;');
            $consulta->execute(array($_SESSION['idsucursal']));
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
            $p->setfk_idsucursal($r->fk_idsucursal);
           
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
            $p->setfk_idsucursal($r->fk_idsucursal);
           
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

   public function Insertar(notaria $p){

    try{

    $consulta=('INSERT INTO public."notaria"(
         "Nombresnotaria", "NumeroDocumentonotaria", "CorreoElectroniconotaria", "fk_idUsuario", "fk_idsucursal")
        VALUES (?,?,?,?,?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresnotaria(),
       // $p->notaria(),
       // $p->notaria(),
       $p->getNumeroDocumentonotaria(),
       $p->getCorreoElectroniconotaria(),
       $p->getfk_idUsuario(),
       $p->getfk_idsucursal(),
       // $p->getCorreoInstitucionalnotaria(),
        
    ));
    

     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Actualizar(notaria $p){

    
    try{
        $consulta=('UPDATE "notaria" SET
        "Nombresnotaria"=?,"NumeroDocumentonotaria"=?, "CorreoElectroniconotaria"=?, "fk_idUsuario"=? , "fk_idsucursal"=?
        WHERE "idnotaria"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresnotaria(),
       // $p->notaria(),
       // $p->notaria(),
       $p->getNumeroDocumentonotaria(),
       $p->getCorreoElectroniconotaria(),
       $p->getfk_idUsuario(),
       $p->getfk_idsucursal(),
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
        "Nombresnotaria"=?, "Apellidosnotaria"=?, "CorreoElectroniconotaria"=?, "fk_idUsuario"=? , "fk_idsucursal"=?
        WHERE "idnotaria"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getNombresnotaria(),
       // $p->getApellidosnotaria(),
       // $p->notaria(),
       $p->getNumeroDocumentonotaria(),
       $p->getCorreoElectroniconotaria(),
       $p->getfk_idUsuario(),
       $p->getfk_idsucursal(),
       // $p->notaria(),
       $p->getidnotaria()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Eliminar($id){
    try{
        $consulta = ('DELETE FROM "Usuario" WHERE "idUsuario"=?;');
        $this->pdo->prepare($consulta)->execute(array($id));
    }catch(Exception $e){
        die($e->getMessage());
    }
        
// var_dump($id);
// exit(); 
}
/*
public function Bloquear($id){
    try{
        $consulta = ('UPDATE "notaria" SET  "Estados"=:estado WHERE "notaria"=:id;');
      
        $this->pdo->prepare($consulta)->execute(array('id'=>$id,'estado'=>'Bloqueado'));
    }catch(Exception $e){
        die($e->getMessage());
    }
        
// var_dump($id); 
// exit();
}



 public function Activo( $id){
 try{
     $consulta = ('UPDATE "notaria" SET "Estados"=:estado WHERE "notaria"=:id;');    
     $this->pdo->prepare($consulta)->execute(array('id'=>$id,'estado'=>'Activo'));
    
     }catch(Exeception $e){
    die($e->getMessage());
     }

// var_dump($id);
// exit();
}*/



}