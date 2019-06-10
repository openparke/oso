<?php

class informacion{


    private $pdo;

    private $idinformacion;
    private $matricula;
    private $estadocivil;
    private $tipodocumento;
    private $numerodocumento;
    private $solicitud;
    

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
    }


    public function getidinformacion() : ?int{
        return $this->idinformacion;
    }
    public function setidinformacion(int $id){
        $this->idinformacion=$id;
    }

 
    public function getmatricula() : ?string{
        return $this->matricula;
    }
    public function setmatricula(string $matricula){
        $this->matricula=$matricula;
    }

      public function getestadocivil() : ?string{
        return $this->estadocivil;
    }
    public function setestadocivil(string $estadocivil){
        $this->estadocivil=$estadocivil;
    }


   public function gettipodocumento() : ?string{
        return $this->tipodocumento;
    }
    public function settipodocumento(string $tipodocumento){
        $this->tipodocumento=$tipodocumento;
    }


 public function getnumerodocumento() : ?int{
        return $this->numerodocumento;
    }
    public function setnumerodocumento(int $numerodocumento){
        $this->numerodocumento=$numerodocumento;
    }
    

    public function getsolicitud() : ?string{
        return $this->solicitud;
    }
    public function setsolicitud(string $solicitud){
        $this->solicitud=$solicitud;
    }

    
    public function Listar(){
        try{
            $consulta=$this->pdo->prepare('SELECT * FROM "informacion";');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
           
            $consulta=$this->pdo->prepare('SELECT * FROM "informacion" WHERE "idinformacion"=?;');
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            $p=new informacion();
            $p->setidinformacion($r->idinformacion);
            $p->setmatricula($r->matricula);
            $p->setestadocivil($r->estadocivil);
            $p->settipodocumento($r->tipodocumento);
            $p->setnumerodocumento($r->numerodocumento);
            $p->setsolicitud($r->solicitud);
        
            return $p;

        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
   public function Insertar(informacion $p){

    try{

    $consulta=('INSERT INTO public."informacion"(
         "matricula","estadocivil","tipodocumento","numerodocumento","solicitud")
        VALUES (?,?,?,?,?);');
        
   $this->pdo->prepare($consulta)->execute(array(
       $p->getmatricula(),     
       $p->getestadocivil(),
       $p->gettipodocumento(),
       $p->getnumerodocumento(),
       $p->getsolicitud(), 

        
    ));
    

     }catch(Exeception $e){
    die($e->getMessage());
}


}

public function Actualizar(informacion $p){

    
    try{
        $consulta=('UPDATE "informacion" SET
        "matricula"=?,"estadocivil"=?,"tipodocumento"=?,"numerodocumento"=?,"solicitud"=?
        WHERE "idinformacion"=?;');
    
        
    $this->pdo->prepare($consulta)->execute(array(
       $p->getmatricula(),     
       $p->getestadocivil(),
       $p->gettipodocumento(),
       $p->getnumerodocumento(),
       $p->getsolicitud(), 
       $p->getidinformacion()
       
            
    ));
    
     }catch(Exeception $e){
    die($e->getMessage());
}


}


}