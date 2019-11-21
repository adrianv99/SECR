$(document).ready(function() {
    $('#prov').on('change', function(e){
        var id_prov =$('#prov').val()
        //console.log(id_prov);
          $.ajax({
            type: "POST",
            url: "./php/select_js_mun.php",
            data: {id_prov : id_prov},
            success: function(datos){
               // console.log(datos)
               $('#municipio').html(datos)
            },
            error: function (xhr, status, error) {
                console.log(xhr);
                console.log(status);
                console.log(error);
                
            }
        })
    })
    $('#municipio').on('change', function(e){
        var id_mun =$('#municipio').val()
        //console.log(id_prov);
          $.ajax({
            type: "POST",
            url: "./php/select_js_sec.php",
            data: {id_mun : id_mun},
            success: function(datos){
               // console.log(datos)
               $('#sector').html(datos)
            },
            error: function (xhr, status, error) {
                console.log(xhr);
                console.log(status);
                console.log(error);
                
            }
        })
    })
})