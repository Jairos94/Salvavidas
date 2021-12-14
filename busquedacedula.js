$(document).ready(function(){
    $('#Cedula').focus()

    $('#Cedula').on('keyup',function(){
        var cedula = ('#Cedula').val()
        console.log(cedula)
    })
});