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
