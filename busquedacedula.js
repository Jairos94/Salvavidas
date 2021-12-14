$(document).ready(function(){
    $('#Cedula').focus()

    $('#Cedula').on('keyup',function(){
        var cedula = ('#Cedula').valueOf()
        console.log(cedula)
    })
});