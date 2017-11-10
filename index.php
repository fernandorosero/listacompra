<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
        include_once './init.php';
        $errorUsuario = filter_input(INPUT_POST, 'errorusuario');
    ?>
    <body>
        <div class="contenido">
            <header>
                <div>
                    <h2>Lista de la compra </h2>
                </div>
            </header>
            <section>
                <?php
                    if ($errorUsuario==300) {
                ?>
                        <div id="mensajeError" class="">
                            <img class="imagenLeft" src="img/okmensaje.png"/>
                            <span class="textMensajeError">El producto no se ha guardado.</span>
                            <img class="imagenRight" src="img/cierraaviso.png"/>
                        </div>
                <?php
                    }
                ?>
                <?php
                    if ($errorUsuario==200) {
                ?>
                        <div id="mensajeOk" class="">
                            <img class="imagenLeft"  src="img/okmensaje.png"/>
                            <span class="textMensajeError">El producto se ha guardado.</span>
                            <img class="imagenRight" src="img/cierraaviso.png"/>
                        </div>
                <?php
                    }
                ?>
                <div id="resultado" class="none"></div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="productos">Producto</th>
                            <th class="cantidad">Cantidad</th>
                            <th class="crud"></th>
                        </tr>
                    </thead>
                    <tbody>
                    

                        <?php
                            include_once './controller/ListadoProductos.php';
                        ?>
                    </tbody>
                </table>
            </section>
            <footer>
                <a href="new" class="nuevoProd btn btn-primary btn-sm">Nuevo</a>
            </footer>
        </div>
    </body>
</html>
