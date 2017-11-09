<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
        include_once './init.php';
    ?>
    <body>
        <div class="contenido">
            <header>
                <div>
                    <h2>Lista de la compra </h2>
                </div>
            </header>
            <section>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="productos">Producto</th>
                            <th class="cantidad">Cantidad</th>
                            <th class="crud"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <div id="resultado" class="none"></div>
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
