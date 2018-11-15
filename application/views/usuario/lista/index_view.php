<br>
<!-- Mensajes -->
<div id="mensajes"></div>

<center>
	<div class="btn-group">
		<button type="button" id="btn_todos" class="btn btn-default">Todos</button>
		<button type="button" id="btn_autorizados" class="btn btn-default">Autorizados</button>
        <button type="button" id="btn_pendientes" class="btn btn-default">Pendientes por autorizar</button>
	</div>
</center>

<!-- Tabla -->
<div id="cont_tabla"></div>

<script>
	// Cuando el documento esté listo
    $(document).ready(function(){
    	//Declaración de variables
    	var contenedor = $("#cont_tabla");

    	/**
    	 * De entrada cargaremos la tabla con todos los usuarios
    	 */
        contenedor.load("<?php echo site_url('usuario/cargar_interfaz'); ?>", {'tipo': 'todos'});

        // btn_todos
        $('#btn_todos').on("click",function(){
            //Cargaremos la tabla con todos los usuarios
            contenedor.load("<?php echo site_url('usuario/cargar_interfaz'); ?>", {'tipo': 'todos'});
        }); // btn_todos

        // btn_autorizados
        $('#btn_autorizados').on("click",function(){
            //Cargaremos la tabla con todos los afiliados
            contenedor.load("<?php echo site_url('usuario/cargar_interfaz'); ?>", {'tipo': 'afiliados'});
        }); // btn_autorizados

        // btn_pendientes
        $('#btn_pendientes').on("click",function(){
            //Cargaremos la tabla con todos los pendientes por afiliarse
            contenedor.load("<?php echo site_url('usuario/cargar_interfaz'); ?>", {'tipo': 'pendientes'});
        }); // btn_pendientes
    });// document.ready
</script>