<?php if($this->session->userdata("Tipo") == 1){ ?>
    <center>
    	<div class="btn-group">
    		<button type="button" id="btn_todos" class="btn btn-default">Todos</button>
    		<button type="button" id="btn_pagados" class="btn btn-default">Cheques pagados</button>
            <button type="button" id="btn_prestados" class="btn btn-default">Cheques prestados</button>
    	</div>
    </center>
<?php } ?>

<!-- Tabla -->
<div id="cont_tabla"></div>

<!-- Este modal crea las diferentes tipos de estructuras -->
<div id="modal_cheque" class="modal fade" >
    <!-- modal-content -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="titulo_mensaje" class="modal-title">Configuración de cheques</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="radio">
                            <label>
                                <input type="radio" name="metodo_afiliacion" value="cheque_pagado" checked>
                                Cheque pagado
                            </label>
                        </div>
                    </div>

                    <!-- <div class="col-lg-6">
                        <div class="radio">
                            <label>
                                <input type="radio" name="metodo_afiliacion" value="cheque_prestado">
                                Cheque prestado
                            </label>
                        </div>
                    </div> -->
                </div>

            	<div class="row">
        			<div class="form-group col-lg-4">
	                	<label for="codigo_cheque" class="control-label">Código cheque *</label>
	                    <input id="codigo_cheque" class="form-control input-sm" type="text" placeholder="(Obligatorio)"  autofocus/>
	                </div>

        			<div class="form-group col-lg-4">
	                	<label for="clave" class="control-label">Clave *</label>
	                    <input id="clave" class="form-control input-sm" type="text" placeholder="(Obligatorio)" />
	                </div>

                    <!-- <div class="form-group col-lg-4">
                        <label for="codigo_asesor" class="control-label">Código asesor *</label>
                        <input id="codigo_asesor" class="form-control input-sm" type="text" placeholder="(Obligatorio)" />
                    </div> -->

        			<div id="cont_fecha" class="form-group col-lg-4 oculto">
	                	<label for="input_fecha" class="control-label">Fecha</label>
	                    <input id="input_fecha" class="form-control input-sm" type="text" />
	                </div>
            	</div>
            </div>

            <div class="modal-footer">
                <button id="btn_agregar_cheque" type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<p>
    <input type="button" id="agregar_cheque" class="btn btn-success btn-block btn-sm" value="Agregar cheque">
</p>

<script>
	// Cuando el documento esté listo
    $(document).ready(function(){
    	//Declaración de variables
    	var contenedor = $("#cont_tabla");

    	/**
    	 * De entrada cargaremos la tabla con todos los usuarios
    	 */
        if ("<?php echo $this->session->userdata('Tipo'); ?>" == 1) {
            contenedor.load("<?php echo site_url('cheque/cargar_interfaz'); ?>", {'tipo': 'todos'});
        } // if

        // btn_todos
        $('#btn_todos').on("click",function(){
            //Cargaremos la tabla con todos los cheques
            contenedor.load("<?php echo site_url('cheque/cargar_interfaz'); ?>", {'tipo': 'todos'});
        }); // btn_todos

        // btn_pagados
        $('#btn_pagados').on("click",function(){
            //Cargaremos la tabla con los comprados
            contenedor.load("<?php echo site_url('cheque/cargar_interfaz'); ?>", {'tipo': 'pagados'});
        }); // btn_pagados

        // btn_prestados
        $('#btn_prestados').on("click",function(){
            //Cargaremos la tabla con los cheques prestados
            contenedor.load("<?php echo site_url('cheque/cargar_interfaz'); ?>", {'tipo': 'prestados'});
        }); // btn_prestados



        $("#agregar_cheque").on("click", function(){
            // Se abre la ventana
            $('#modal_cheque').modal('show');

        // //     //Se pone el id del cuadro
        // //     $("#id_cuadro").val(0);

        // //     //Se carga la lista con documentos subidos
        // //     $("#cont_agregar").load("<?php echo site_url('administracion/agregar_cuadro') ?>", {'': ''});
        });

        // Cuando cambie la opción de cheque
        // $('input:radio[name=metodo_afiliacion]').change(function () {
        //     // Se recogen variables
        //     var tipo_cheque = $(this).val();

        //     // Si es cheque prestado
        //     if (tipo_cheque == "cheque_prestado") {
        //         // Se activa el input
        //         $("#cont_fecha").show("slow");
        //     }else{
        //         // Se desactiva el input
        //         $("#cont_fecha").hide("slow");
        //     }
        // }); // change

        $("#btn_agregar_cheque").on("click", function(){
            var fecha = null;

            //Datos a validar
            datos_obligatorios = new Array(
                $("#codigo_cheque").val(),
                $("#clave").val()
            ); // datos

            //Se ejecuta la validación de los campos obligatorios
            validacion = validar_campos_vacios(datos_obligatorios);

            //Si no supera la validacíón
            if (!validacion) {
                //Se muestra el mensaje de error
                alert('Por favor diligencie todos los campos para poder guardar el bono cheque.');
            } else {
                // // Si es cheque prestado
                // if ($('input:radio[name=metodo_afiliacion]:checked').val() == "cheque_prestado") {
                //     //Datos a validar
                //     datos_obligatorios_cheque = new Array(
                //         $("#input_fecha").val()
                //     ); // datos

                //     //Se ejecuta la validación de los campos obligatorios
                //     validacion = validar_campos_vacios(datos_obligatorios_cheque);

                //     //Si no supera la validacíón
                //     if (!validacion) {
                //         alert("Por favor digite la fecha de pago");

                //         return false;
                //     }

                //     // fecha ingresada
                //     var fecha = $("#input_fecha").val();

                // };

            	// Datos a recoger
            	datos = {
            		"Codigo_Cheque": $("#codigo_cheque").val(),
            		"Clave": $("#clave").val()
            	}
            	// console.log(datos);

            	// Se procede a guardar
            	guardar = ajax("<?php echo site_url('cheque/guardar'); ?>", {"datos": datos}, "html");
            	// console.log(guardar);

            	// SI guarda
            	if (guardar) {
            		//Se carga la lista con documentos subidos
        			contenedor.load("<?php echo site_url('cheque/cargar_interfaz'); ?>", {'tipo': 'todos'});

        			// Se abre la ventana
            		$('#modal_cheque').modal('hide');
            	};
            }

            return false;
        });
    });// document.ready
</script>