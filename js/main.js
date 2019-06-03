$(buscar_datos());

function buscar_datos(consulta)
{
    $.ajax({
        url: 'Pro_trailera/usuarios.php',
        type: 'POST',
        dataType:'html',
        data: {consulta: consulta},
    })
    .done(function(respuesta){
        console.log.("success");
        $("datos").html(respuesta);
    })
    .fail(function(){

        console.log.("Error");
    })
} 

$(document).on('keyup', '#buscar_tabla', function(){
    var valor = $(this).val();
    if (valor != "") 
    {
        buscar_datos(valor);
    }
    else
    {
        buscar_datos();
    }
});