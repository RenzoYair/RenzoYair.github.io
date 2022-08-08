function init(){
    $("#usuario_form").on("submit",function(e){
        guardaryeditar(e);	
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#usuario_form")[0]);

    $.ajax({
        url: "../controller/usuario.php?op=guardar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            if (datos=="pass"){
                Swal.fire(
                    'Mesa De Partes',
                    'Error Contraseñas no Coinciden',
                    'error'
                );
            }else if (datos=="correo"){
                Swal.fire(
                    'Mesa De Partes',
                    'La cuenta de correo electronico ya existe, intente recuperar su contraseña',
                    'error'
                );
            }else{
                Swal.fire({
                    title: 'Mesa De Partes',
                    text: 'Se Registro Correctamente',
                    imageUrl: 'https://media-exp2.licdn.com/dms/image/C4E03AQFQ8Z3wFuV_MQ/profile-displayphoto-shrink_200_200/0/1610549416601?e=1663804800&v=beta&t=0Q3yUP1_Hx9TyfdhNN0yhHKs6p50H_eIZoT_KuLJchc',
                    imageWidth: 400,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                  })
    
                var usu_correo = $('#usu_correo').val();
                $.post("../controller/email.php?op=send_nuevo", { usu_correo : usu_correo}, function(data){
                
                });

            }
            $('#usuario_form')[0].reset();
        }
    }); 
    
}

init();