<?php
    include_once './model/AbreConexionBBDD.php';
     $query_listar_contactos = "select * from productos ";
    $resultado = mysql_query($query_listar_contactos);
    $numero_filas = mysql_num_rows($resultado);
    
    if ($numero_filas == 0 ) {
        echo '<tr id="resultadoCero">';
            echo '<td colspan="3">';
                echo '<h2 style="text-align:center;">No existen datos</h2> ';
            echo '</td>';
        echo '</tr>';
    }   
    while($row = mysql_fetch_row($resultado))
    {
        echo "<tr>\n";
            echo "<td class='productos'>";
                echo "<form id='enviarActualizarReg_$row[0]' action='controller/ActualizarProducto.php' method='POST'>";
                    echo "<span class='spanProducto_$row[0]'>$row[1]</span>";
                    echo "<input type='text' name='producto' value='$row[1]' class='inputProducto_$row[0] form-control inputProductoCSS none' maxlength='18'/>";
                    echo "<input type='hidden' name='cantidad' id='inputEnviarCambio_$row[0]' value='$row[2]'/>"; 
                    echo "<input type='hidden' name='id_producto' value='$row[0]'/>"; 
                echo "</form>";
            echo "</td>";
            echo "<td class='cantidad'>";
                echo "<span onClick='masMenosValorCantidad($row[0],false)' class='iconomenos iconoMenosModificar_$row[0] none glyphicon glyphicon-minus' aria-hidden='true'></span>";
                echo "<input id='inputCambiar_$row[0]' name='cantidad' class='valorCambiar' value='$row[2]' disabled/>";
                echo "<span onClick='masMenosValorCantidad($row[0],true)' class='iconomas iconoMasModificar_$row[0] none glyphicon glyphicon-plus' aria-hidden='true'></span>";
            echo "</td>";
            echo "<td class='crud'>";
                echo "<span onClick='editarProducto($row[0])' class='iconoeditar_$row[0] iconoeditarCSS glyphicon glyphicon-pencil' aria-hidden='true' title='Editar Producto'></span>";
                echo "<span onClick='actualizarProducto($row[0])' class='actualizar_$row[0] iconoGuardarCSS none glyphicon glyphicon-floppy-disk' aria-hidden='true' title='Guardar Cambio'></span>";
                echo " /";
                echo "<span onClick='borrarProducto($row[0])' class='iconoborrar_$row[0] iconoborrarCSS glyphicon glyphicon-trash' aria-hidden='true' title='Borrar Producto'></span>";
                echo "<span onClick='cancelarProducto($row[0], $row[2])' class='cancelareditar_$row[0] iconoCancelGuardarCSS none glyphicon glyphicon-floppy-remove' aria-hidden='true' title='Cancelar'></span>";
            echo "</td>";
        echo "</tr>";
    }
    include_once './model/CierraConexionBBDD.php';
?>


