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
                            <th class="crud"><button class="nuevoProd btn btn-primary btn-xs">Nuevo</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="productos">Platanos</td>
                            <td class="cantidad">
                                <span class="iconomas glyphicon glyphicon-plus" aria-hidden="true"></span>
                                02
                                <span class="iconomenos glyphicon glyphicon-minus" aria-hidden="true"></span>
                            </td>
                            <td class="crud">
                                <span class="iconoeditar glyphicon glyphicon-pencil" aria-hidden="true"></span> /
                                <span class="iconoborrar glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </td>
                        </tr>    
                        <tr>
                            
                            <td class="productos">Platanos</td>
                            <td class="cantidad">
                                <span class="iconomas glyphicon glyphicon-plus" aria-hidden="true"></span>
                                42
                                <span class="iconomenos glyphicon glyphicon-minus" aria-hidden="true"></span></td>
                            <td class="crud">
                                <span class="iconoeditar glyphicon glyphicon-pencil" aria-hidden="true"></span> /
                                <span class="iconoborrar glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <footer>
                <a href="new" class="nuevoProd btn btn-primary btn-sm">Nuevo</a>
            </footer>
        </div>
    </body>
</html>
