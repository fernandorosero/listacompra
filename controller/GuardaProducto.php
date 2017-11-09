<!-- JavaScript -->
<script type="text/javascript" src="../js/utils.js"></script> 
<?php
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $errorUsuario = filter_input(INPUT_POST, 'errorusuario');
    include_once '../model/AbreConexionBBDD.php';
    $resultado_deti = $producto;
    $query_create = "insert into productos(producto, cantidad)"
            . " values('$producto', '$cantidad');";
    
    $query = mysql_query($query_create, $conexion_db)
            or die("400");
    
    if($query){
        $errorUsuario = 200;
        echo"<body onLoad='javascript:volverIndex();'>";
            echo"<form name='returnIndex' action='../home' method='post'>";
                echo"<input type='hidden' name='errorusuario' value='$errorUsuario'/> ";
            echo"</form>";
        echo"</body>";
    }
    else{
        $errorUsuario = 300;
        echo"<body onLoad='javascript:volverProducto();'>";
            echo"<form name='productoreturn' action='../nuevo.php' method='post'>";
                echo"<input type='hidden' name='errorusuario' value='$errorUsuario'/> ";
            echo"</form>";
        echo"</body>";
    }
    
    
    
    include_once '../model/CierraConexionBBDD.php';
?>