<?php
    include_once './model/AbreConexionBBDD.php';
     $query_listar_contactos = "select * from productos ";
    $resultado = mysql_query($query_listar_contactos);
     while($row = mysql_fetch_row($resultado))
     {
        echo "<tr>\n";
            echo "<td class='productos'>";
                echo "<span class='spanProducto_$row[0]'>$row[1]</span>";
                echo "<input type='text' value='$row[1]' class='inputProducto_$row[0] form-control inputProductoCSS none'/>";
            echo "</td>";
            echo "<td class='cantidad'>";
                echo "<span class='iconomas glyphicon glyphicon-plus' aria-hidden='true'></span>";
                echo $row[2];
                echo "<span class='iconomenos glyphicon glyphicon-minus' aria-hidden='true'></span>";
            echo "</td>";
            echo "<td class='crud'>";
                echo "<span onClick='editarProducto($row[0])' class='iconoeditar_$row[0] iconoeditarCSS glyphicon glyphicon-pencil' aria-hidden='true' title='Editar Producto'></span>";
                echo "<span onClick='actualizarProducto($row[0])' class='actualizar_$row[0] iconoGuardarCSS none glyphicon glyphicon-floppy-disk' aria-hidden='true' title='Guardar Cambio'></span>";
                echo " /";
                
                echo "<span onClick='borrarProducto($row[0])' class='iconoborrar_$row[0] iconoborrarCSS glyphicon glyphicon-trash' aria-hidden='true' title='Borrar Producto'></span>";
                echo "<span onClick='cancelarProducto($row[0])' class='cancelareditar_$row[0] iconoCancelGuardarCSS none glyphicon glyphicon-floppy-remove' aria-hidden='true' title='Cancelar'></span>";
            echo "</td>";
            
        echo "\n</tr>";
     }
include_once './model/CierraConexionBBDD.php';


//echo '<div id="formularioX">';
            //echo"<form name='deleteContacto$row[0]' action='/Detinec/controller/BorrarContactoDetinec.php' method='post' "
            //        . "onsubmit='return verificarBorrado()' >";
            //    echo"<input type='hidden' name='idContactoDelete' value='".$row[0]."'/>";
            //    include '/controller/BotonBorrar.php';
            //echo"</form>";
            //echo '</div>';

?>


