<div class="well row">
    <div id="mensajes"></div>
    <div class="col-lg-3">
        <label for="input_cheque1" class="control-label">Cheque biblioteca privada *</label>
        <input type="text" class="form-control" id="input_cheque1" placeholder="Digite el número del cheque" autofocus>
    </div>

    <div class="col-lg-3">
        <label for="input_cheque2" class="control-label">Cheque libro poesía *</label>
        <input type="text" class="form-control" id="input_cheque2" placeholder="Digite el número del cheque">
    </div>

    <div class="col-lg-2">
        <label for="input_cheque3" class="control-label">Sorteo por un año *</label>
        <input type="text" class="form-control" id="input_cheque3" placeholder="Digite el número del cheque">
    </div>

    <div class="col-lg-2">
        <label for="select_tipo_consignacion" class="control-label">Tipo de pago *</label>
        <select id="select_tipo_consignacion" class="form-control" >
        	<option value="">Seleccione...</option>
        	<option value="Consignación">Consignación</option>
        	<option value="Éxito">Éxito</option>
        	<option value="GANA">GANA</option>
        	<option value="Vía Baloto">Vía Baloto</option>
        </select>
    </div>

    <div class="col-lg-2">
        <label for="input_consignacion" class="control-label">Consignación *</label>
        <input type="text" class="form-control" id="input_consignacion" placeholder="Digite la clave del cheque">
    </div>
</div>
<button type="button" id="guardar_cheque" class="btn btn-success btn-block">Guardar</button><br>

<script type="text/javascript">
    $(document).ready(function(){
    	//Declaración de variables
        var cheque1 = $("#input_cheque1");  
        var cheque2 = $("#input_cheque2"); 
        var cheque3 = $("#input_cheque3"); 
        var tipo_consignacion = $("#select_tipo_consignacion");
        var numero_consignacion = $("#input_consignacion");

        // Registrar el cheque
        $("#guardar_cheque").on("click", function(){
        	//Campos obligatorios a validar
            var campos_vacios = new Array(
                cheque1.val(),
                cheque2.val(),
				cheque3.val(),
				tipo_consignacion.val(),
				numero_consignacion.val()
            );

            // si no supera la validación
            if (!validar_campos_vacios(campos_vacios)) {
                //Se muestra el error
                mostrar_error($("#mensajes"), "Por favor diligencie todos los campos marcados con *");
            }else{
    			//Primero, se busca el chueque basado en el número y la clave
				id_cheque = ajax("<?php echo site_url('cheque/validar'); ?>", {cheque1: cheque1.val(), cheque2: cheque2.val(), cheque3: cheque3.val()}, 'html');

				// Si existe
				if(id_cheque > 0){
					// Se recogen los datos
					datos = {
						'Numero_Consignacion': numero_consignacion.val(),
						'Tipo_Consignacion': tipo_consignacion.val(),
						'Fk_Id_Usuario': "<?php echo $this->session->userdata('Pk_Id_Usuario'); ?>"
					};
					// console.log(datos);
					
					// Se actualizan los datos del cheque
					actualizar = ajax("<?php echo site_url('cheque/actualizar'); ?>", {id_cheque: id_cheque, datos: datos}, 'html');

					//Se muestra el mensaje de exito
                        mostrar_exito($("#mensajes"), "Se ha registrado su cheque correctamente. En cuanto podamos revisaremos la información para su autorización por parte de la fundación.");

				}else{
					//Se muestra el error
                	mostrar_error($("#mensajes"), "El número y la clave del cheque no coinciden con nuestros registros. Veifique nuevamente");
				}
            }
        })// fin gaurdar
    });//Fin document.ready
</script>