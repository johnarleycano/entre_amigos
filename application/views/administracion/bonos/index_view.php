<!-- Este modal crea las diferentes tipos de estructuras -->
<div id="modal_bono" class="modal fade" >
    <!-- modal-content -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="titulo_mensaje" class="modal-title">Configuración de bonos</h4>
            </div>
            <div class="modal-body">
            	<div class="row">
        			<div class="form-group col-lg-4">
	                	<label for="codigo_cheque" class="control-label">Código cheque *</label>
	                    <input id="codigo_cheque" class="form-control input-sm" type="text" placeholder="(Obligatorio)"  autofocus/>
	                </div>

        			<div class="form-group col-lg-4">
	                	<label for="clave" class="control-label">Clave *</label>
	                    <input id="clave" class="form-control input-sm" type="text" placeholder="(Obligatorio)" />
	                </div>

        			<div class="form-group col-lg-4">
	                	<label for="codigo_asesor" class="control-label">Código asesor *</label>
	                    <input id="codigo_asesor" class="form-control input-sm" type="text" placeholder="(Obligatorio)" />
	                </div>
            	</div>
            </div>

            <div class="modal-footer">
                <button id="btn_agregar_bono" type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Contenedor -->
<div class="container">
	<!-- row -->
	<div class="row">
        <div id="cont_bonos"></div>
	</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        //Se carga la lista con documentos subidos
        $("#cont_bonos").load("<?php echo site_url('administracion/listar_bonos') ?>", {'': ''});

        $("#btn_agregar_bono").on("click", function(){
            //Datos a validar
            datos_obligatorios = new Array(
                $("#codigo_cheque").val(),
                $("#clave").val(),
                $("#codigo_asesor").val()
            ); // datos

            //Se ejecuta la validación de los campos obligatorios
            validacion = validar_campos_vacios(datos_obligatorios);

            //Si no supera la validacíón
            if (!validacion) {
                //Se muestra el mensaje de error
                alert('Por favor diligencie todos los campos para poder guardar el bono cheque.');
            } else {
            	// Datos a recoger
            	datos = {
            		"Codigo_Cheque": $("#codigo_cheque").val(),
            		"Clave": $("#clave").val(),
            		"Codigo_Asesor": $("#codigo_asesor").val()
            	}
            	// console.log(datos);

            	// Se procede a guardar
            	guardar = ajax("<?php echo site_url('cheque/guardar_bono'); ?>", {"datos": datos}, "html");
            	// console.log(guardar);

            	// SI guarda
            	if (guardar) {
            		//Se carga la lista con documentos subidos
        			$("#cont_bonos").load("<?php echo site_url('administracion/listar_bonos') ?>", {'': ''});

        			// Se abre la ventana
            		$('#modal_bono').modal('hide');
            	};
            }

            return false;
        });
    });//Fin document.ready
</script>