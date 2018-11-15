var base_url = "http://localhost:88/proyectos/fundacion/index.php/";

function mostrar(elemento){
	$("#" + elemento).slideDown("slow");
}

function ocultar(elemento){
	$("#" + elemento).slideUp("slow");
}

function validar_campos_vacios(campos){
	//Variable
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

	//Se resetea la variable
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

function autorizar(){
	//Petición AJAX
	$.ajax({
		url: base_url + "autorizacion/autorizar",
		type: "POST",
		data: {codigo_empleo: $("#codigo").val()},
		success: function (respuesta) {
			if(respuesta == "padre"){
				//Muestra el mensaje de exito
				mostrar_exito($("#buscar_codigo"), "¡Ha realizado la autorización correctamente y ha quedado registrado como padre!");

				//Envía el correo electrónico diciendo que ya está autorizado
				
			} else if(respuesta == "abuelo"){
				//Muestra el mensaje de exito
				mostrar_exito($("#buscar_codigo"), "¡Ha realizado la autorización correctamente y ha quedado registrado como abuelo!");
			}else if(respuesta == "false"){
				//Muestra el mensaje de error
				mostrar_error($("#buscar_codigo"), "¡Este usuario ya tiene padre y abuelo o ya lo autorizaste!");

				//Envía el correo electrónico diciendo que ya está autorizado
				
			}
		}//Fin success
	});//Fin ajax
}

function ajax(url, datos){
	//Variable de exito
	var exito = false;

	//Petición ajax
	$.ajax({
		url: url,
		type: "POST",
		dataType: "JSON",
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