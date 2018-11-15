<br><br><br><br><br>
<div id="mensajes"></div>

<div class="col-lg-12">
    <label for="input_mensaje" class="control-label">Mensaje *</label>
    <!-- <input type="text" class="form-control" id="input_nombre" placeholder="Escriba su nombre completo" autofocus> -->
    <textarea id="input_mensaje" autofocus rows="3" class="form-control"></textarea><br>

    <button type="button" onClick="javascript:enviar()" class="btn btn-success btn-block">Enviar mensaje</button>
</div>

<script type="text/javascript">
	function enviar(){
		enviar = ajax("<?php echo site_url('email/enviar_masivo'); ?>", {'mensaje': $("#input_mensaje").val()}, 'html');
		
		//Se muestra el mensaje de exito
        mostrar_exito($("#mensajes"), "¡Se ha enviado el mensaje correctamente!");
	}
</script>
