<?php
include('datosconexion.php');

/* Clase que conecta una base de datos  postgresql */

class conexion{

    
  

    public function conectar()
    {
        
        try {
            $dbh = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASS);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        
    }
}


