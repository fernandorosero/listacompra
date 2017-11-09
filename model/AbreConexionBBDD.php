<?php
    // Parametros a configurar para la conexion de la base de datos
    $hostdb = "localhost";
    $basededatos = "listacompra";    // sera el valor de nuestra BD
    $usuariodb = "root";    // sera el valor de nuestra BD
    $clavedb = "4545";    // sera el valor de nuestra BD
    //$tabla_db1 = "clientes";    // sera el valor de una tabla
    //$tabla_db2 = "otratabla";    // sera el valor de otra tabla

    // Fin de los parametros a configurar para la conexion de la base de datos

    $conexion_db = mysql_connect("$hostdb","$usuariodb","$clavedb")
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");
    $db = mysql_select_db("$basededatos", $conexion_db)
    or die ("<p>La Base de Datos $basededatos NO EXISTE</p>");
?>

