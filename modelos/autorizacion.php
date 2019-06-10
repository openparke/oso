<?php

class autorizacion{

    private $pdo;

    private $idautorizacion;
    private $aceptaprimer;
    private $aceptasegundo;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    
    
    
    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getidautorizacion() : ?int{
        return $this->idautorizacion;
    }
    public function setidautorizacion(int $id){
        $this->idautorizacion=$id;
    }

     public function getaceptaprimer() : ?string{
        return $this->aceptaprimer;
    }
    public function setaceptaprimer(string $aceptaprimer){
        $this->aceptaprimer=$aceptaprimer;
    }
     public function getaceptasegundo() : ?string{
        return $this->aceptasegundo;
    }
    public function setaceptasegundo(string $aceptasegundo){
        $this->aceptasegundo=$aceptasegundo;
    }
      public function getnombre() : ?string{
        return $this->nombre;
    }
    public function setnombre(string $nombre){
        $this->nombre=$nombre;
    }
      public function getapellido() : ?string{
        return $this->apellido;
    }
    public function setapellido(string $apellido){
        $this->apellido=$apellido;
    }
      public function getcorreo() : ?string{
        return $this->correo;
    }
    public function setcorreo(string $correo){
        $this->correo=$correo;
    }
      public function gettelefono() : ?string{
        return $this->telefono;
    }
    public function settelefono(string $telefono){
        $this->telefono=$telefono;
    }


    
    public function Listar(){
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
           
            $consulta=$this->pdo->prepare('SELECT * FROM "autorizacion" WHERE "idautorizacion"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new autorizacion();
            $p->setidautorizacion($r->idautorizacion);
            $p->setaceptaprimer($r->aceptaprimer);
            $p->setaceptasegundo($r->aceptasegundo);
            $p->setnombre($r->nombre);
            $p->setapellido($r->apellido);
            $p->setcorreo($r->correo);
            $p->settelefono($r->telefono);
           
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

        public function Obtenercorreo($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "solicitud" JOIN "autorizacion" ON "solicitud"."fk_idautorizacion" = "autorizacion"."idautorizacion"
                    WHERE idsolicitud=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new autorizacion();

            $p->setidautorizacion(intval($r->idautorizacion));
            $p->setcorreo($r->correo);
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }





     public function Insertar(autorizacion $p){

    try{
        


    $consulta=('INSERT INTO public."autorizacion"(
         "aceptaprimer", "aceptasegundo", "nombre", "apellido", "correo", "telefono")
        VALUES (?,?,?,?,?,?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getaceptaprimer(),
       $p->getaceptasegundo(),
       $p->getnombre(),
       $p->getapellido(),
       $p->getcorreo(),
       $p->gettelefono(),
    ));
    
    $id = $this->pdo->lastInsertId();
    return $id;
    

     }catch(Exeception $e){
    die($e->getMessage());
}


}


public function Actualizar(autorizacion $p){

    
    try{
        $consulta=('UPDATE "autorizacion" SET
        "aceptaprimer"=?,"aceptasegundo"=?,"nombre"=?,"apellido"=?,"correo"=?,"telefono"=?
        WHERE "idautorizacion"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getaceptaprimer(),
       $p->getaceptasegundo(),
       $p->getnombre(),
       $p->getapellido(),
       $p->getcorreo(),
       $p->gettelefono(),    
       $p->getidautorizacion()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}


}