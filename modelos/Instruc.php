<?php

class Instruc{

    public function __CONSTRUCT(){
        $this->pdo = BasedeDatos::Conectar();
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

}