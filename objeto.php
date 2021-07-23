<?php
#############################################################
## Creado:23-Julio-2021                                    ##
## Desarrollado:Oscar Alfredo Cano Acosta                  ##
##                                                         ##
## CLASE QUE CREA ARTICULOS CRUD A LA BASE DE DATOS PRUEBAS##
## PHP PDO                                                 ##
#############################################################

header('Content-type:application/json');

include('conexion.php');

$obj= new conexion();
$conn=$obj->conectar();

class articulo  
{
    public function listArticulos()
    {
        $obj= new conexion();
        $conn=$obj->conectar();
        $query='select * from articulos';
        $resp=$conn->prepare($query);
        $resp->execute();
        $data=$resp->fetchAll(PDO::FETCH_ASSOC);
        $datajson=json_encode($data);
        return $datajson; 
    }


    public function addArticulo($nombre,$precio)
    {
        $obj= new conexion();
        $conn=$obj->conectar();
        $query='insert into articulos (nombre_articulo, precio) values ("'.$nombre.'",'.$precio.')';
        $resp=$conn->prepare($query);
        $resp->execute();
        $id = $conn->lastInsertId();
        echo $id;
    }

    public function updateArticulo($id,$name,$precio)
    {
        $obj= new conexion();
        $conn=$obj->conectar();
        $query='update articulos set nombre_articulo="'.$name.'" , precio='.$precio.'  where idarticulo='.$id;
        $resp=$conn->prepare($query);
        $response=$resp->execute();
        echo $response;

    }

    public function deleteArticulo($id)
    {
        $obj= new conexion();
        $conn = $obj->conectar();
        $query='delete from articulos where idarticulo='.$id;
        $resp=$conn->prepare($query);
        $response=$resp->execute();
        echo $response;
    }

    
}
