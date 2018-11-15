function ajax(url, datos, tipo_respuesta){
    //Variable de exito
    exito = "inicialización";

    // Esta es la petición ajax que llevará 
    // a la interfaz los datos pedidos
    $.ajax({
        url: url,
        data: datos,
        type: "POST",
        dataType: tipo_respuesta,
        async: false,
        success: function(respuesta){
            //Si la respuesta no es error
            if(respuesta != "error"){
                //Se almacena la respuesta como variable de éxito
                exito = respuesta;
            } else {
                //La variable de éxito será un mensaje de error
                exito = 'error en la respuesta';
            } //If
        },//Success
        error: function(respuesta){
            //Variable de exito será mensaje de error de ajax
            exito = respuesta;
        }//Error
    });//Ajax

    //Se retorna la respuesta
    return exito;
}// ajax

function mostrar(elemento){
    $("#" + elemento).slideDown("slow");
}

function ocultar(elemento){
    $("#" + elemento).slideUp("slow");
}

function validar_campos_vacios(campos){
    //Variable contadora
    validacion = 0;

    //Recorrido para validar cada campo
    for (var i = 0; i < campos.length; i++){
        //validacion campo a campo
        if($.trim(campos[i]) != "") {
            validacion++;
        }
    };

    //Si todos los campos superan la validación
    if (validacion == campos.length) {
        //Retorna ok
        return true;
    } else {
        //Retorna falso
        return false;
    }

    //Se resetea la variable contadora
    validacion = 0;
}//validar_campos_vacios

function mostrar_error(campo, mensaje){
    //Mensaje a mostrar
    campo.html('<div class="alert alert-danger">' + mensaje+ '</div>').show('slow');
}

function mostrar_exito(campo, mensaje){
    //Mensaje a mostrar
    campo.html('<div class="alert alert-success">' + mensaje+ '</div>').show('slow');
}

function mostrar_info(campo, mensaje){
    //Mensaje a mostrar
    campo.html('<div class="alert alert-info">' + mensaje+ '</div>').show('slow');
}

function guardar_formulario(url, datos){
    //Variable de exito
    var exito = false;

    //Petición ajax
    $.ajax({
        url: url,
        type: "POST",
        data: datos,
        async: false,
        success: function(respuesta) {
            //Si la respuesta es ok
            if(respuesta != "false"){
                //Exito
                exito = respuesta;
            } else {
                //Error
                exito = "false";
            }//Fin if
        }//Fin success
    });//Fin ajax
    
    //Se retorna el exito
    return exito;
}

function limpiar(formulario){
    //Limpia
    $(formulario)[0].reset();
}

function enviar_email(datos){
    //Petición AJAX
    $.ajax({
        url: base_url + "email/enviar",
        type: "POST",
        data: datos,
        success: function (respuesta) {
            console.log('Email enviado.');
        }//Fin success
    });//Fin Ajax
}


function validar_claves(password1, password2){
    //Valida que sean iguales
    if (password1.val() === password2.val()) {
        //Si son iguales, retorna verdadero
        return true;
    } else {
        //Si son diferentes, retorna falso
        return false;
    }
}

function buscar_codigo_empleo(codigo_empleo){
    //console.log("en buscar es"+codigo_empleo)
    
    //Petición Ajax
    $.ajax({
        url: base_url + "autorizacion/buscar_codigo_empleo",
        type: "POST",
        data: {codigo_empleo: codigo_empleo},
        async: false,
        dataType: "JSON",
        success: function (respuesta) {
            if(respuesta) {
                $("#codigo").val(codigo_empleo);

                $("#buscar_codigo").html('<h3 id="nombre"> ' + respuesta.Nombre + ' <span class="label label-default"><a class="btn_autorizar" href="javascript:autorizar()">Autorizar</a></span></h3>');
                //console.log("respuesta es " + respuesta.Codigo_Empleo)
            } else {
                mostrar_error($("#buscar_codigo"), "El código no existe o no puede ser su mismo código de empleo. Por favor verifíquelo e intente nuevamente.");
            }//Fin if
        }//Fin success
    });//Fin Ajax
}