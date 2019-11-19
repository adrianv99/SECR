/*$(document).ready(function(){
    $('#provincia_incidente').on('change', function(e) {
        let id = $('#provincia_incidente').val();
    $.ajax({
        url: './php/select_dinamico.php',
        type: 'POST',
        data: { a: id }
    })
    .done(function(lista){
        $('#municipio_pertenece').html(lista)
    })
    .fail(function(){
        alert('Hubo un error al cargar la puta lista_muni')
    })
    })
})

*/
