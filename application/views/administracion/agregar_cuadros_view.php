<!-- Este modal crea las diferentes tipos de estructuras -->
<div id="modal_agregar" class="modal fade" >
    <!-- modal-content -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="titulo_mensaje" class="modal-title">Configuración de cuadros</h4>
            </div>
            <div class="modal-body">
            	<div class="row">
            		<div class="form-group col-lg-12 breadcrumb">
		                <div class="form-group col-lg-7">
		                	<label for="nombre" class="control-label">Nombre *</label>
		                    <input id="nombre" class="form-control input-sm" type="text" placeholder="(Obligatorio)"  autofocus/>
		                </div>

		                <div class="form-group col-lg-3">
		                	<label for="autor" class="control-label">Autor *</label>
		                    <input id="autor" class="form-control input-sm" type="text" placeholder="(Obligatorio)" />
		                </div>

		                <div class="form-group col-lg-2">
		                	<label for="precio" class="control-label">Precio *</label>
		                    <input id="precio" class="form-control input-sm" type="text" placeholder="(Obligatorio)" />
		                </div>

		                <div class="form-group col-lg-4">
		                	<label for="pais" class="control-label">País</label>
		                	<select id="pais" class="form-control input-sm">
		                		<option value="0">Seleccione</option>
								<?php foreach ($this->administracion_model->cargar_paises() as $pais) { ?>
			                        <option value="<?php echo $pais->id; ?>"><?php echo $pais->nombre; ?></option>
			                    <?php } ?>
		                	</select>
		                </div>

		                <div class="form-group col-lg-4">
		                	<label for="tipo" class="control-label">Tipo</label>
		                	<select id="tipo" class="form-control input-sm">
		                		<option value="0">Seleccione</option>
								<?php foreach ($this->administracion_model->cargar_tipos() as $tipo) { ?>
			                        <option value="<?php echo $tipo->id; ?>"><?php echo $tipo->nombre; ?></option>
			                    <?php } ?>
		                	</select>
		                </div>

		                <div class="form-group col-lg-4">
		                	<label for="medidas" class="control-label">Medidas</label>
		                    <input id="medidas" class="form-control input-sm" type="text" />
		                </div>

		                <div class="form-group col-lg-12">
							<textarea id="descripcion" class="form-control" rows="3"></textarea>
		                </div>
		            </div>
            	</div>
            </div>

            <div class="modal-footer">
                <button id="btn_agregar_cuadro" type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    // Cuando el DOM esté listo
    $(document).ready(function(){
    	// Si es actualización
    	if($("#id_cuadro").val() > 0){
    		// Se consulta el cuadro
			cuadro = ajax("<?php echo site_url('administracion/mostrar_cuadro'); ?>", {'id_cuadro': $("#id_cuadro").val()}, 'JSON');

			// Se ponen en los campos
			$("#nombre").val(cuadro.nombre);
			$("#autor").val(cuadro.autor);
			$("#precio").val(cuadro.precio);
			$("#descripcion").val(cuadro.descripcion);
			$("#pais").val(cuadro.id_pais);
			$("#tipo").val(cuadro.id_tipo);
			$("#medidas").val(cuadro.medidas);
    	}

        // Se abre la ventana
        $('#modal_agregar').modal('show');

		var id_cuadro = $("#id_cuadro");
		var nombre = $("#nombre");
		var autor = $("#autor");
		var precio = $("#precio");
		var pais = $("#pais");
		var tipo = $("#tipo");
		var medidas = $("#medidas");
		var descripcion = $("#descripcion");


        $("#btn_agregar_cuadro").on("click", function(){
        	imprimir(id_cuadro.val())

        	//Datos a validar
            datos_obligatorios = new Array(
            	nombre.val(),
            	autor.val(),
            	precio.val()
            ); // datos

            //Se ejecuta la validación de los campos obligatorios
            validacion = validar_campos_vacios(datos_obligatorios);

            //Si no supera la validacíón
            if (!validacion) {
                //Se muestra el mensaje de error
                alert('Por favor diligencie todos los campos obligatorios para guardar el cuadro.');
            } else {
            	//Arreglo JSON de datos a enviar posteriormente
	            datos_formulario = {
	            	"nombre": nombre.val(),
	            	"autor": autor.val(),
	            	"precio": precio.val(),
	            	"descripcion": descripcion.val(),
	            	"fecha_creacion": "<?php echo date('Y-m-d H:i:s') ?>",
	            	"id_creador": "<?php echo $this->session->userdata('id') ?>",
	            	"id_pais": pais.val(),
					"id_tipo": tipo.val(),
					"medidas": medidas.val()
	            };
	            // imprimir(datos_formulario);
	            
	            // Si el id es mayor a cero
	            if(id_cuadro.val() > 0){
	            	// Se procede a actualizar el registro
                	actualizar = ajax("<?php echo site_url('administracion/actualizar_cuadro') ?>", {"id_cuadro": id_cuadro.val(), 'datos': datos_formulario}, 'html');
	            }else{
	            	// Se procede a guardar el registro
                	guardar = ajax("<?php echo site_url('administracion/guardar_cuadro') ?>", {'datos': datos_formulario}, 'html');
	            } // fin
	            
                //Se cierra la ventana
                $('#modal_agregar').modal('hide');

                //Cuando se termine de cerrar
                $('#modal_agregar').on('hidden.bs.modal', function (e) {
                	//Se carga la lista con documentos subidos
        			$("#tabla_cuadros").load("<?php echo site_url('administracion/listar_cuadros') ?>", {'': ''});
                });
            }

        	//
        	return false;
        });
    }); // document.ready
</script>