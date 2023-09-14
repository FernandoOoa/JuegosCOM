$('#articulos_').slideUp();
let data = [];
a = new Date();
dia = a.getDate();
mes = a.getUTCMonth() + 1;
anio = a.getFullYear();
fecha = dia + '/' + mes + '/' + anio;
document.getElementById("fecha").innerHTML = 'Fecha: ' + fecha;
$(buscar_dato_numeroVenta());
function buscar_dato_numeroVenta(consulta) {
    $.ajax({
        url:'buscarnumeroventa.php',
        type: 'POST',
        dataType:'html',
        data:{consulta:consulta},
    })
    .done(function(respuesta){
        $("#numero_venta").html(respuesta);
    })
    .fail(function(){
        console.log("error");
    });
}
$(buscar_datos_empleado());

function buscar_datos_empleado(consulta) {
    $.ajax({
        url:'buscarempleado2.php',
        type: 'POST',
        dataType:'html',
        data:{consulta:consulta},
    })
    .done(function(respuesta){
        $("#datos_empleado").html(respuesta);
        botonguardar();
    })
    .fail(function(){
        console.log("error");
    });
}

$(document).on('keyup','#caja_busqueda_empleado',function(){
    var valor = $(this).val();
    if(!isNaN(valor) && valor != ''){
        buscar_datos_empleado(valor);
         $('#articulos_').slideDown();
    }else{
        buscar_datos_empleado();
        $('#articulos_').slideUp();
    }
})

$(buscar_datos_libro());

function buscar_datos_libro(consulta) {
    $.ajax({
        url:'buscarlibroventa.php',
        type: 'POST',
        dataType:'html',
        data:{consulta:consulta},
    })
    .done(function(respuesta){
        $("#datos_libro").html(respuesta);
        $('#add').slideUp();
        var id = parseInt($('#id').html());
        var disponible = parseInt($('#disponibleventa').html());
        for (let articulo of data){
            if(id == articulo[0]){
            disponible = disponible - articulo[3];
            document.getElementById("disponibleventa").innerHTML = disponible;
            }
       }
    })
    .fail(function(){
        console.log("error");
    })
}
$(document).on('keyup','#caja_busqueda_libro',function(){
    var valor = $(this).val();
    console.log(data);
    if(valor != ""){
        buscar_datos_libro(valor);
    }else{
        buscar_datos_libro();
    }
    
})

$(document).on('keyup','#caja_articulo',function(){
    var id = parseInt($('#id').html());
    var disponible = parseInt($('#disponibleventa').html());
    var cantidad = parseInt($('#caja_articulo').val());
    if(!isNaN(cantidad) && cantidad >= 1 && disponible >= cantidad){
        $('#add').slideDown();
    }
    else{
        $('#add').slideUp();
    }
});


    
$(document).on('click','#add',function(){
       var cantidad = parseInt($('#caja_articulo').val());
       var id = parseInt($('#id').html());
       var precio = parseFloat($('#precioventa').html());
       var titulo = $('#titulo').html();
       var precioTotal = precio * cantidad;
       var sumo = false;
       for (let articulo of data){
           if(id == articulo[0]){
               articulo[3]+= cantidad;
               articulo[4]= articulo[2]*articulo[3];
               sumo = true;
           }
       }
       if (sumo == false){
           data.push([id,titulo,precio,cantidad,precioTotal]);
       }
       buscar_datos_libro(id);
       document.getElementById("tabla_articulos").innerHTML = crearTabla(data);
       botonguardar();
});


let crearTabla = function(lista){
    var iva = .16;
    var calculariva = 0;
    var totalfinal = 0;
    let stringTabla = "<tr><th>ID</th><th>Titulo</th><th>Precio c/u</th><th>Cantidad</th><th>Importe</th>";
    for(let articulo of lista){
        let fila = "<tr><th>"
        fila += articulo[0];
        fila += "</th>"
        
        fila += "<th>"
        fila += articulo[1];
        fila += "</th>"
        
        fila += "<th>"
        fila += articulo[2];
        fila += "</th>"
        
        fila += "<th>"
        fila += articulo[3];
        fila += "</th>"
        
        fila += "<th>"
        fila += articulo[4];
        fila += "</th>"
        stringTabla += fila;
    }
    
    let filaFinal ="<tr><th></th><th></th><th></th><th>Sub Total:</th><th>";
    var total = 0;
    for(let articulo of lista){
    total = total+ articulo[4];
    }
    filaFinal += total;
    filaFinal +="</th></tr>"
    stringTabla += filaFinal;
    //------------------------------------------------------------------------------------------------
    let filaiva ="<tr><td></td><th></th><th></th><th>IVA </th><th>";
    calculariva = iva * total;
    filaiva += calculariva;
    filaiva +="</th></tr>";
    stringTabla += filaiva;
    //------------------------------------------------------------------------------------------------
    let filacalculoTotal = "<tr><td></td><th></th><th></th><th>Total </th><th>";
    totalfinal = total + calculariva;
    filacalculoTotal += Math.round(totalfinal);
    filacalculoTotal +="</th></tr>";
    stringTabla += filacalculoTotal;
    //------------------------------------------------------------------------------------------------
    let filabotones ="<tr><th></th><th></th><th></th><th><a href='edicionventa.php'>Cancelar</a></th><th><button type='button' class='btn btn-secondary' id='guardar'>Guardar</button>";
    filabotones +="</th></tr>";
    stringTabla += filabotones;
    return stringTabla;
};

function botonguardar(){
    if (data.length > 0){
    $('#guardar').slideDown();
    }
    else{
    $('#guardar').slideUp();
    }
}

document.getElementById("tabla_articulos").innerHTML = crearTabla(data);
function guardar(idventa,fecha,idempleado,datos) {
    console.log(datos);
    $.ajax({
        url:'addventa.php',
        type: 'POST',
        dataType:'html',
        async : true,
        data:{idventa:idventa, fecha:fecha, idempleado:idempleado,datos:datos},
    })
    .done(function(respuesta){
        $("#datos_empleado").html(respuesta);
    })
    .fail(function(){
        console.log("aun no");
    });
}
$(document).on('click','#guardar',function(){
       var idventa = parseInt($('#numeroVenta').html());
       var idempleado = parseInt($('#idempleado').html());
       // data
       guardar(idventa,fecha,idempleado,data);
});