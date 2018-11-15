<div class="well row">
	<?php $sorteo_system = $this->registro_model->cargar_sorteos_system(); ?>
	<div class="col-lg-4">
	    <label for="input_loteria" class="control-label">Lotería *</label>
	    <input type="text" class="form-control" id="input_loteria" value="<?php echo (isset($sorteo_system->Loteria)) ? $sorteo_system->Loteria : "" ; ?>">
	</div>

	<div class="col-lg-4">
	    <label for="input_fecha" class="control-label">Fecha *</label>
	    <input type="date" class="form-control" id="input_fecha" value="<?php echo (isset($sorteo_system->Fecha)) ? $sorteo_system->Fecha : "" ; ?>">
	</div>

	<div class="col-lg-4">
	    <label for="input_numero" class="control-label">Número *</label>
	    <input type="text" class="form-control" id="input_numero" value="<?php echo (isset($sorteo_system->Fecha)) ? $sorteo_system->Numero : "" ; ?>">
	</div>
</div>

<!-- Si es administrador -->
<?php if($this->session->userdata("Tipo") == 1){ ?>
	<br>
	<button type="button" class="btn btn-success btn-block" onclick="javascript:guardar()">Guardar registro</button>
<?php } ?>

<script type="text/javascript">
	function guardar(){
		datos = {
			Loteria: $("#input_loteria").val(),
			Fecha: $("#input_fecha").val(),
			Numero: $("#input_numero").val(),
		}	
		
		// Se procede a hacer la inserción en base de datos vía ajax
		ajax("<?php echo site_url('registro/guardar_sorteos_system'); ?>", {'datos': datos}, 'html');

		$("#modal_sorteos_system").modal("hide");
	}
</script>