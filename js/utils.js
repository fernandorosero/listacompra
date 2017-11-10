$(document).ready(function(){
    operacionesListado();
});
function enviarForm(){
    document.loginSend.submit();
}
function enviarFormLocal(){
    document.loginSendLocal.submit();
}
function enviarFormWeb(){
    document.loginSendWeb.submit();
}
function volverLogin(){
    document.loginreturn.submit();
}
function volverProducto(){
    document.productoreturn.submit();
}
function volverIndex(){
    document.returnIndex.submit();
}
function enviarActualizar(id){
    var elemento = "enviarActualizarReg_" + id;
    document.getElementById(elemento).submit();
    }
/**********INICIO LISTADO***********/
function operacionesListado(){
    $('.iconoeditar').click(function(){
        $('.spanProducto').addClass('none');
        $('.inputProducto').removeClass('none');
    });
    $('.imagenRight').click(function(){
        $(this).parent('div').css('display', 'none');
    });
}
function masMenosValorCantidad(id, origen){
    var elemento = "#inputCambiar_" + id;
    var valorModificar = $(elemento).val();
    var elementoEnviarModificar = "#inputEnviarCambio_" + id; 
    if (origen){
        valorModificar++;
    } else {
        valorModificar--;
    }
    if (valorModificar > 0 && valorModificar < 100){
        $(elemento).val(valorModificar);
        $(elementoEnviarModificar).val(valorModificar);
    }
}
function editarProducto(valorModificar){
    var spanProducto = ".spanProducto_" + valorModificar;
    var inputProducto = ".inputProducto_" + valorModificar;
    $(spanProducto).addClass('none');
    $(inputProducto).removeClass('none');
    
    var spanIconoMas = ".iconoMasModificar_" + valorModificar;
    var spanIconoMenos = ".iconoMenosModificar_" + valorModificar;
    $(spanIconoMas).removeClass('none');
    $(spanIconoMenos).removeClass('none');
    
    
    var spanEditar = ".iconoeditar_" + valorModificar;
    var spanActualizar = ".actualizar_" + valorModificar;
    var spanBorrar = ".iconoborrar_" + valorModificar;
    var spanCancelarEdit = ".cancelareditar_" + valorModificar;
    
    $(spanEditar).addClass('none');
    $(spanActualizar).removeClass('none');
    $(spanBorrar).addClass('none');
    $(spanCancelarEdit).removeClass('none');    
}

function actualizarProducto(valorModificar){
    var spanEditar = ".iconoeditar_" + valorModificar;
    var spanActualizar = ".actualizar_" + valorModificar;
    var spanBorrar = ".iconoborrar_" + valorModificar;
    var spanCancelarEdit = ".cancelareditar_" + valorModificar;
    
    $(spanEditar).removeClass('none');
    $(spanActualizar).addClass('none');
    $(spanBorrar).removeClass('none');
    $(spanCancelarEdit).addClass('none');
    
    var spanIconoMas = ".iconoMasModificar_" + valorModificar;
    var spanIconoMenos = ".iconoMenosModificar_" + valorModificar;
    $(spanIconoMas).addClass('none');
    $(spanIconoMenos).addClass('none');
    
    var spanProducto = ".spanProducto_" + valorModificar;
    var inputProducto = ".inputProducto_" + valorModificar;
    $(spanProducto).removeClass('none');
    $(inputProducto).addClass('none');
    enviarActualizar(valorModificar);
}
function borrarProducto(valorModificar){
    var parametros = {
                "idProductoDelete" : valorModificar,
        };
    $.ajax({
        url : "controller/BorrarProducto.php",
        method : "POST",
        data: parametros,
        beforeSend: function () {
            $("#resultado").removeClass('none')
            $("#resultado").html("Procesando, espere por favor...");
                
        },
        success: function (response) {
                    if(response == 400){
                        alert("No de puede ve")
                    } else {
                        var url = "home"; 
                        $(location).attr('href',url);
                        $("#resultado").addveClass('none');
                    }
                }
    });
}
function cancelarProducto(id,valorModificar){
    var spanEditar = ".iconoeditar_" + id;
    var spanActualizar = ".actualizar_" + id;
    var spanBorrar = ".iconoborrar_" + id;
    var spanCancelarEdit = ".cancelareditar_" + id;
    
    $(spanEditar).removeClass('none');
    $(spanActualizar).addClass('none');
    $(spanBorrar).removeClass('none');
    $(spanCancelarEdit).addClass('none');

    var spanIconoMas = ".iconoMasModificar_" + id;
    var spanIconoMenos = ".iconoMenosModificar_" + id;
    $(spanIconoMas).addClass('none');
    $(spanIconoMenos).addClass('none');

    var spanProducto = ".spanProducto_" + id;
    var inputProducto = ".inputProducto_" + id;
    $(spanProducto).removeClass('none');
    $(inputProducto).addClass('none');
    
    var inputCantidad = "#inputCambiar_" + id;
    $(inputCantidad).val(valorModificar);
}
/**********FIN LISTADO***********/