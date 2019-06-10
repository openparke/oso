<?php

class sucursal{

    private $pdo;

    private $idsucursal;
    private $nombre;
    private $direccion;
    private $fk_identidad;
    
    
    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getidsucursal() : ?int{
        return $this->idsucursal;
    }
    public function setidsucursal(int $id){
        $this->idsucursal=$id;
    }

     public function getnombre() : ?string{
        return $this->nombre;
    }
    public function setnombre(string $nombre){
        $this->nombre=$nombre;
    }
     public function getdireccion() : ?string{
        return $this->direccion;
    }
    public function setdireccion(string $direccion){
        $this->direccion=$direccion;
    }
      public function getfk_identidad() : ?string{
        return $this->fk_identidad;
    }
    public function setfk_identidad(string $fk_identidad){
        $this->fk_identidad=$fk_identidad;
    }


    
    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT suc."idsucursal", 
            suc."nombre",            
            suc."direccion",            
            suc."fk_identidad",
            ent."identidad",      
            ent."nombreentidad",      
            ent."tipo"        
    FROM "sucursal" suc
        INNER JOIN "entidad" ent ON suc."fk_identidad"= ent."identidad" ');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Listarentidad(){
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
           
            $consulta=$this->pdo->prepare('SELECT * FROM "sucursal" WHERE "idsucursal"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new sucursal();
            $p->setidsucursal($r->idsucursal);
            $p->setnombre($r->nombre);
            $p->setdireccion($r->direccion);
            $p->setfk_identidad($r->fk_identidad);
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
     public function Insertar(sucursal $p){

    try{

    $consulta=('INSERT INTO public."sucursal"(
         "nombre", "direccion", "fk_identidad")
        VALUES (?,?,?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getnombre(),
       $p->getdireccion(),
       $p->getfk_identidad(),
    ));
    

     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Actualizar(sucursal $p){

    
    try{
        $consulta=('UPDATE "sucursal" SET
        "nombre"=?,"direccion"=?,"fk_identidad"=?
        WHERE "idsucursal"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getnombre(),
       $p->getdireccion(),
       $p->getfk_identidad(),    
       $p->getidsucursal()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}


}