<div id="mensajes"></div>

<div class="col-lg-3">
    <label for="input_nombre" class="control-label">Nombre completo *</label>
    <input type="text" class="form-control" id="input_nombre" placeholder="Escriba su nombre completo" autofocus>
</div>

<div class="col-lg-3">
    <label for="input_cedula" class="control-label">Cédula *</label>
    <input type="text" class="form-control" id="input_cedula" placeholder="Digite sólo números">
</div>

<div class="col-lg-3">
    <label for="input_telefono" class="control-label">Teléfono*</label>
    <input type="text" class="form-control" id="input_telefono" placeholder="Escriba el número telefónico">
</div>

<div class="col-lg-3">
    <label for="codigo_empleo" class="control-label">Código de empleo del referido</label>
    <input class="form-control" id="codigo_empleo" type="text"  placeholder="Digite el código de empleo" >
</div>

<br><br><br>
<button type="button" class="btn btn-success btn-block" onClick="javascript:guardar()">Guardar registro</button><br>

<div id="lista"></div>

<script type="text/javascript">
	function listar()
	{
		$("#lista").load("<?php echo site_url('administracion/listar_asesores_voluntarios') ?>")
	}

	function guardar()
	{
        // Declaración de variables
        var nombre = $("#input_nombre")    
        var cedula = $("#input_cedula")
        var telefono = $("#input_telefono")
        var codigo_empleo = $("#codigo_empleo")

        //Campos obligatorios a validar
        var campos_vacios = new Array(
            cedula.val(), 
            telefono.val(), 
            codigo_empleo.val(),
        )
        // console.log(campos_vacios)
        
        // si no supera la validación
        if (!validar_campos_vacios(campos_vacios)) {
            //Se muestra el error
            mostrar_error($("#mensajes"), "Por favor diligencie todos los campos marcados con *")

            return false
        }

        // Datos a guardar
        var datos = {
            'Codigo_Empleo': codigo_empleo.val(),
            'Cedula': cedula.val(),
            'Telefono': telefono.val(),
            'Nombre': nombre.val(),
            'Fecha_Registro': "<?php echo date('Y-m-d H:i:s') ?>",
        }
        // console.log(datos)
        
        ajax("<?php echo site_url('administracion/guardar_asesor_voluntario'); ?>", {'datos': datos}, 'html')
	
		//Se muestra el mensaje de exito
        mostrar_exito($("#mensajes"), "Se ha guardado correctamente el registro")

        listar()
	}

    $(document).ready(function(){
    	listar()
	})
</script>