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

/*********PYTHON******************/
function PruebaLed(){
    $.ajax({
          
           url:'php_python/prueba_led.php',
           type:'POST',
           success: function(response){
             
             //alert("very nice");
           },
           error: function(){
               //alert("no junjona ajax!!!!");
           }
        });
}
function WebLeftRightServoMotor(){
    $.ajax({
        url: 'php_python/servo_left_right.py',
        type: 'POST',
        succes: function(response){
            
        },
        error: function(){
            
        }
    });
}
function WebUpDownServoMotor(){
    $.ajax({
        url: 'php_python/servo_up_down.py',
        type: 'POST',
        succes: function(response){
            
        },
        error: function(){
            
        }
    });
}
/*********PYTHON*************/
/**********INICIO LISTADO***********/
function operacionesListado(){
    $('.iconoeditar').click(function(){
        $('.spanProducto').addClass('none');
        $('.inputProducto').removeClass('none');
    });
}
function editarProducto(valorModificar){
    var spanProducto = ".spanProducto_" + valorModificar;
    var inputProducto = ".inputProducto_" + valorModificar;
    $(spanProducto).addClass('none');
    $(inputProducto).removeClass('none');
    
    
    
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
                $("#resultado").html("Procesando, espere por favor...");
        },
        success: function (response) {
                    if(response == 400){
                        alert("No de puede ve")
                    } else {
                        //$('.contenido').addClass('none');
                        // $("#resultado").html(response);
                        // $('.contenido').removeClass('none');
                    }
                }
    });

}
function cancelarProducto(valorModificar){
    var spanEditar = ".iconoeditar_" + valorModificar;
    var spanActualizar = ".actualizar_" + valorModificar;
    var spanBorrar = ".iconoborrar_" + valorModificar;
    var spanCancelarEdit = ".cancelareditar_" + valorModificar;
    
    $(spanEditar).removeClass('none');
    $(spanActualizar).addClass('none');
    $(spanBorrar).removeClass('none');
    $(spanCancelarEdit).addClass('none');

}
/**********FIN LISTADO***********/