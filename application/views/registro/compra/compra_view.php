<div class="well row">
	<div id="mensajes"></div>
	<div class="col-lg-3">
        <label for="input_nombre" class="control-label">Nombre *</label>
        <input type="text" class="form-control" id="input_nombre" autofocus>
    </div>

	<div class="col-lg-3">
        <label for="input_email" class="control-label">Correo electrónico *</label>
        <input type="text" class="form-control" id="input_email" >
    </div>
	
	<!-- ML -->
	<div class="col-lg-3">
        <label for="input_codigo" class="control-label">Código de cheque *</label>
        <input type="text" class="form-control" id="input_codigo" >
    </div>
	
	<!-- EC -->
	<div class="col-lg-3">
        <label for="input_numero" class="control-label">Número de cheque *</label>
        <input type="text" class="form-control" id="input_numero" >
    </div>
</div>
<p>
	<button type="button" id="btn_comprar" class="btn btn-success btn-block">Pedir información</button>
</p>

<script type="text/javascript">
    $(document).ready(function(){
    	

    	$("#btn_comprar").on("click", function(){
    		// Recoleccion de datos
    		var nombre = $("#input_nombre");
    		var email = $("#input_email");
    		var codigo = $("#input_codigo");
    		var numero = $("#input_numero");

    		//Campos obligatorios a validar
            var campos_vacios = new Array(
                nombre.val(), 
                email.val(),
                codigo.val(),
                numero.val()
            );

            // si no supera la validación
            if (!validar_campos_vacios(campos_vacios)) {
                //Se muestra el error
                mostrar_error($("#mensajes"), "Por favor diligencie todos los campos marcados con *");
            }else{
            	// Si las iniciales coinciden
	    		if (codigo.val().substring(0,2).toUpperCase() == "ML" && numero.val().substring(0,2).toUpperCase() == "EC") {
	    			// Se preparan los datos a enviar
	    			datos_email = {
	    				"nombre": nombre.val(),
	    				"destinatario": email.val(),
	    				"codigo": codigo.val().toUpperCase(),
	    				"numero": numero.val().toUpperCase()
	    			}

	    			//Se envía el correo electrónico de bienvenida
                    correo = ajax("<?php echo site_url('email/enviar'); ?>", {'datos': datos_email, 'tipo': 'compra'}, 'html');

                    // Se preparan los datos a enviar
                    datos_compra = {
                        "nombre": nombre.val(),
                        "Email": email.val(),
                        "Codigo_Cheque": codigo.val().toUpperCase(),
                        "Numero_Cheque": numero.val().toUpperCase()
                    }

                    // Se guarda el registro en base de datos
                    compra = ajax("<?php echo site_url('administracion/guardar_compra'); ?>", {"datos": datos_compra}, 'html');
                    console.log(compra);

                    // Se inactiva el botón
                    $("#btn_comprar").attr('disabled', true);

	    			//Se muestra el error
                    mostrar_exito($("#mensajes"), "Se ha aceptado su cheque y se han enviado los datos a su correo electrónico.");
	    		} else {
	    			//Se muestra el error
                    mostrar_error($("#mensajes"), "Los datos no se han encontrado en nuestra base de datos. Por favor verifique e intente nuevamente.");
	    		}
            }
    		
    		return false;
    	});
    });//Fin document.ready
</script>