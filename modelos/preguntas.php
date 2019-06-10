<?php

class preguntas{

    private $pdo;

    private $idpreguntas;
    private $preguntas;
    private $respuestas;
    
    
    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }

    public function getidpreguntas() : ?int{
        return $this->idpreguntas;
    }
    public function setidpreguntas(int $id){
        $this->idpreguntas=$id;
    }

     public function getpreguntas() : ?string{
        return $this->preguntas;
    }
    public function setpreguntas(string $preguntas){
        $this->preguntas=$preguntas;
    }
     public function getrespuestas() : ?string{
        return $this->respuestas;
    }
    public function setrespuestas(string $respuestas){
        $this->respuestas=$respuestas;
    }


    
    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "preguntascomunes";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "preguntascomunes" WHERE "idpreguntas"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new preguntas();
            $p->setidpreguntas($r->idpreguntas);
            $p->setpreguntas($r->preguntas);
            $p->setrespuestas($r->respuestas);
           
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
     public function Insertar(preguntas $p){

    try{

    $consulta=('INSERT INTO public."preguntascomunes"(
         "preguntas", "respuestas")
        VALUES (?,?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getpreguntas(),
       $p->getrespuestas(),
    ));
    

     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Actualizar(preguntas $p){

    
    try{
        $consulta=('UPDATE "preguntascomunes" SET
        "preguntas"=?,"respuestas"=?
        WHERE "idpreguntas"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getpreguntas(),   
       $p->getrespuestas(),    
       $p->getidpreguntas()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}


}