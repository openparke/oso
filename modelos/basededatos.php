<?php

class BasedeDatos{

	const host='50.63.13.225';
    //const db = 'gsuitest_oso';
    //const username = 'silanotr_pr';
       // const username = 'gsuitest_oso1';
    //const password = 'L{f~E4}N*,Nz';
	//const host='localhost';
	
	
	
    
       // const username = 'postgres';
    //const password = '$BG$Pm3X5d[k';
    
    
    const db = 'oso3';
        const username = 'postgres';
    const password = 'Pepito.123%';
    
    
    
    
    
    
    
    public static function Conectar()
	{
        $connStr =  ("pgsql:host=".self::host.";port=5432;dbname=".self::db.";user=".self::username.";password=".self::password);


        try{
        // create a PostgreSQL database connection
        $conn = new PDO($connStr);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // display a message if connected to the PostgreSQL successfully
        if($conn){
        return $conn;
        }
        }catch (PDOException $e){
        // report error message
        return $e->getMessage();
        }
    }


}
