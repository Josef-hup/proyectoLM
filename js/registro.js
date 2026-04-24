    
$(document).ready(function()
{
    $('.boton_siguiente').click(function()
    {
        if($('#campos_nombre_email').is(':visible'))
        {
            $('#campos_nombre_email').hide();
            $('#campos_apellidos').show();
        }
        else
        {
            $('#campos_nombre_email').show();
            $('#campos_apellidos').hide();
        }
    });

    $('.boton_enviar').click(function()
    {
        alert("Formulario enviado");
    });
});
