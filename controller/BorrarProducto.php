<?php
    $idProductoBorrar =  $_POST['idProductoDelete'];
    include_once '../model/AbreConexionBBDD.php';
    $query_create = "delete from productos where id_producto=".$idProductoBorrar.";";
    $query = mysql_query($query_create, $conexion_db)
            or die("400");
    if($query){ 
        //header('Location: ../home');
        echo"<body onLoad='javascript:volverIndex();'>";
            echo"<form name='returnIndex' action='home' method='post'>";
            echo"</form>";
        echo"</body>";
    }
    else{
        echo '<input type="text"/>';
    }
    include_once '../model/CierraConexionBBDD.php';
?>