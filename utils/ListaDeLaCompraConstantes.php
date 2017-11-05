<?php

    $db_name="listacompra";
    
    $tabla_productos="CREATE TABLE IF NOT EXISTS productos "
            . "(id_producto integer unsigned NOT NULL auto_increment, "
            . "producto varchar(30) NOT NULL, "
            . "cantidad int(11) NOT NULL, "
            . "PRIMARY KEY (id_producto));";
    
    /*Local*/
    $url = "localhost";
    $user = "root";
    $password = "";
 ?>   