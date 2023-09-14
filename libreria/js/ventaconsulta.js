$(buscar_datos_venta());


function buscar_datos_venta(consulta) {
    $.ajax({
        url:'buscarventa.php',
        type: 'POST',
        dataType:'html',
        data:{consulta:consulta},
    })
    .done(function(respuesta){
        $("#datos").html(respuesta);
    })
    .fail(function(){
        console.log("error");
    })
}

$(document).on('keyup','#caja_busqueda',function(){
    var valor = $(this).val();
    if(valor != ""){
        buscar_datos_venta(valor);
    }else{
        buscar_datos_venta();
    }
})