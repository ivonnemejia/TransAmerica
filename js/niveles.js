 function validar(e) {
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==13) {validar_usuario();}
}
 function validar_usuario()
{
    var user = $("#user").val();
    var pass = $("#password").val();
    $.ajax
    ({ 
        type: "POST",
        url: "index.php/login/checkUser",
        data: 'user='+user +'&'+ 'pass='+pass,
        success: function(data) 
        {   
            var obj = jQuery.parseJSON(data);
            var bandera = obj.bandera;
            var msj     = obj.mensaje;
            switch(bandera)
            {
                case 1:
                    var modulo = obj.nivel;
                    location.href = modulo;
                    break;
                    
               case 4:
               document.getElementById('mensaje_error_form_login').style.visibility='visible';         
                    break;

               default:
               document.getElementById('mensaje_error_form_login').style.visibility='visible'; 
               break;
                    
                }

        },
        error: function(xml,msg)
        {
            document.getElementById('mensaje_error_form_login').style.visibility='visible';
        }
    });  
}