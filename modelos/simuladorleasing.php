<?php

class simuladorleasing{

    private $pdo;

    private $idsimuladorleasing;
    private $valorleasing;
    private $fechaleasing;
    private $fk_idsolicitud;
    
    
    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getidsimuladorleasing() : ?int{
        return $this->idsimuladorleasing;
    }
    public function setidsimuladorleasing(int $id){
        $this->idsimuladorleasing=$id;
    }

     public function getvalorleasing() : ?string{
        return $this->valorleasing;
    }
    public function setvalorleasing(string $valorleasing){
        $this->valorleasing=$valorleasing;
    }
     public function getfechaleasing() : ?string{
        return $this->fechaleasing;
    }
    public function setfechaleasing(string $fechaleasing){
        $this->fechaleasing=$fechaleasing;
    }
      public function getfk_idsolicitud() : ?string{
        return $this->fk_idsolicitud;
    }
    public function setfk_idsolicitud(string $fk_idsolicitud){
        $this->fk_idsolicitud=$fk_idsolicitud;
    }


    
    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "simuladorleasing"');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

     public function Listarconcorreo(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "simuladorleasing" 
                JOIN "solicitud" ON "simuladorleasing"."fk_idsolicitud" = "solicitud"."idsolicitud" 
                JOIN "autorizacion" ON "solicitud"."fk_idautorizacion" = "autorizacion"."idautorizacion";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "simuladorleasing" WHERE "idsimuladorleasing"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new simuladorleasing();
            $p->setidsimuladorleasing($r->idsimuladorleasing);
            $p->setvalorleasing($r->valorleasing);
            $p->setfechaleasing($r->fechaleasing);
            $p->setfk_idsolicitud($r->fk_idsolicitud);
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
    

     public function Insertar(simuladorleasing $p){

    try{

    $consulta=('INSERT INTO public."simuladorleasing"(
         "valorleasing", "fechaleasing", "fk_idsolicitud")
        VALUES (?,?,?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getvalorleasing(),
       $p->getfechaleasing(),
       $p->getfk_idsolicitud(),
    ));
    

     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Actualizar(simuladorleasing $p){

    
    try{
        $consulta=('UPDATE "simuladorleasing" SET
        "valorleasing"=?,"fechaleasing"=?,"fk_idsolicitud"=?
        WHERE "idsimuladorleasing"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getvalorleasing(),
       $p->getfechaleasing(),
       $p->getfk_idsolicitud(),    
       $p->getidsimuladorleasing()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}


}