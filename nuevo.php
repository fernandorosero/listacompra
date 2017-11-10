<?php
    include_once './init.php';
    $errorUsuario = filter_input(INPUT_POST, 'errorusuario');
    if($errorUsuario == 300){
        echo '<p id="usuarioErroneo">No se ha podido guardar la informaci&oacute;n.</p>';
    }
    elseif ($errorUsuario == 200) {
        echo '<p id="usuarioOk">La informaci&oacute;n se ha guardado correctamente.</p>';
    }
 ?>
<div class="contenidoformulario">
    <div id="formularioEnvio">
        <h2>Nuevo producto</h2>
        <form action="controller/GuardaProducto.php" method="POST">
            <label>Producto</label>
            <input class="form-control" type="text" placeholder="Ingresa el producto" name="producto" required autofocus/>
            <label>Cantidad</label>
            <input class="form-control" type="number" placeholder="Cuantos productos?" name="cantidad" required value="1" max="99"/>
            <div class="grupobotonera">
                <a href="home" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>

