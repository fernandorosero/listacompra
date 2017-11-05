<?php

    include_once '../utils/ListaDeLaCompraConstantes.php';
    $slq = 'create database '.$db_name;
    $conexion_crearModelo = mysql_connect($url, $user, $password);
    if(mysql_query($slq, $conexion_crearModelo)){
        echo 'La base de datos '.$db_name.' se cre&oacute; correctamente. ';
    }
    else{
        echo 'Error al crear la base de datos: '. mysql_error().". ";
    }

    $crear_tabla = @mysql_db_query($db_name,$tabla_productos, $conexion_crearModelo) or die(mysql_error());
    if($crear_tabla){
        echo 'La tabla productos se ha creado!. ';
    }else
    {
        echo 'NO SE HA PODIDO CREAR LA TABLA. ';
    }
    
?>