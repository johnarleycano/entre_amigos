<div class="well row">
	<?php $sorteo = $this->registro_model->cargar_sorteos(1); ?>
	<div class="col-lg-6">
	    <label for="input_loteria" class="control-label">Lotería *</label>
	    <input type="text" class="form-control" id="input_loteria" value="<?php echo (isset($sorteo->Loteria)) ? $sorteo->Loteria : "" ; ?>">
	</div>

	<div class="col-lg-6">
	    <label for="input_fecha" class="control-label">Fecha *</label>
	    <input type="date" class="form-control" id="input_fecha" value="<?php echo (isset($sorteo->Fecha)) ? $sorteo->Fecha : "" ; ?>">
	</div>
</div>

<!-- Se recorre creando las 50 casillas -->
<?php
for ($i = 1; $i <= 50; $i++) {
	// Se consulta si ese número tiene valor agregado en el sorteo
	$sorteo = $this->registro_model->cargar_sorteos($i);
	?>
	<div class="col-lg-2">
		<input type="text" class="form-control" id="sorteo<?php echo $i; ?>" name="<?php echo $i; ?>" value="<?php echo (isset($sorteo->Valor)) ? $sorteo->Valor : "" ; ?>">
	</div>
	
	<!-- Salto de línea -->
	<?php if($i%5 == 0){ ?>
		<div class="clear"></div>
	<?php } ?>
<?php } ?>

<!-- Si es administrador -->
<?php if($this->session->userdata("Tipo") == 1){ ?>
	<br>
	<button type="button" class="btn btn-success btn-block" onclick="javascript:guardar()">Guardar registro</button>
<?php } ?>

<script type="text/javascript">

	function guardar(){
		// Arreglo donde se va a almacenar los números
		var datos = [];

		// Recorrido de los 50 números
		for (var i = 1; i <= 50; i++) {
			if($.trim($("#sorteo" + i).val()) != ""){
				// Se agregan los ítems que serán registros en base de datos
				registro = {
					Numero: $("#sorteo" + i).attr("name"),
					Valor: $("#sorteo" + i).val(),
					Loteria: $("#input_loteria").val(),
					Fecha: $("#input_fecha").val(),
				}

				// El registro se agrega al arreglo de datos
				datos.push(registro)
			}
		}

		// Se procede a hacer la inserción en base de datos vía ajax
		ajax("<?php echo site_url('registro/guardar_sorteos'); ?>", {'datos': datos}, 'html');

		$("#modal_sorteos_diarios").modal("hide");
	}
</script>




