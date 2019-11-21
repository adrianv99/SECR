$(document).on('change',function(){
    var id_prov =$('#provincia_incidente').val()
    $.ajax({
        type: "POST",
        url: "./php/select_js.php",
        data: {id_prov : id_prov}
    })
    .done(function(Consulta_Mun){
        $('#municipio').html(Consulta_Mun)

    })
    .fail(function(){
      alert('Hubo un error al cargar {Consulta_Mun}')  
    })
})
