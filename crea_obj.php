<?php


#############################################################
## Creado:23-Julio-2021                                    ##
## Desarrollado:Oscar Alfredo Cano Acosta                  ##
##                                                         ##
## Switch que administra CRUD a la base de Datos los       ##
## endpoint generan objetos JSON para ser consumidos por   ##
## el Frontend                                             ##
## PHP PDO                                                 ##
#############################################################

include('objeto.php');

switch ($_POST['accion']) {
    case 'list':
        $obj= new articulo();
        $conn=$obj->listArticulos();
        echo $conn;
        break;
    case 'add':
        $obj= new articulo();
        $conn=$obj->addArticulo($_POST['name'],$_POST['precio']);
        echo $conn;
        break;
    case 'update':
        $obj= new articulo();
        $conn=$obj->updateArticulo($_POST['id'],$_POST['name'],$_POST['precio']);
        echo($conn) ;
        break;
    case 'delete':
        $obj= new articulo();
        $conn=$obj->deleteArticulo($_POST['id']);
        echo($conn);
        break;
}
