<?php

class entidad{

    private $pdo;

    private $identidad;
    private $nombreentidad;
    private $tipo;
    
    
    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getidentidad() : ?int{
        return $this->identidad;
    }
    public function setidentidad(int $id){
        $this->identidad=$id;
    }

     public function getnombreentidad() : ?string{
        return $this->nombreentidad;
    }
    public function setnombreentidad(string $nombreentidad){
        $this->nombreentidad=$nombreentidad;
    }
     public function gettipo() : ?string{
        return $this->tipo;
    }
    public function settipo(string $tipo){
        $this->tipo=$tipo;
    }


    
    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "entidad";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "entidad" WHERE "identidad"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new entidad();
            $p->setidentidad($r->identidad);
            $p->setnombreentidad($r->nombreentidad);
            $p->settipo($r->tipo);
           
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
     public function Insertar(entidad $p){

    try{

    $consulta=('INSERT INTO public."entidad"(
         "nombreentidad", "tipo")
        VALUES (?,?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getnombreentidad(),
       $p->gettipo(),
    ));
    

     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Actualizar(entidad $p){

    
    try{
        $consulta=('UPDATE "entidad" SET
        "nombreentidad"=?,"tipo"=?
        WHERE "identidad"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getnombreentidad(),   
       $p->gettipo(),    
       $p->getidentidad()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}


}