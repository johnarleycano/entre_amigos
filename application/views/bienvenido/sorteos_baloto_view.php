<?php
for ($i = 1; $i <= 50; $i++) {
	// Se consulta si ese número tiene valor agregado en el sorteo
	
	?>
	<div class="col-lg-2"></div>

	<div class="col-lg-1 text-right">
		<?php echo $i; ?>
	</div>

	<?php $sorteo = $this->registro_model->cargar_sorteos_baloto($i, 1); ?>
	<div class="col-lg-1">
		<input type="text" class="form-control" id="sorteo<?php echo $i; ?>" data-posicion="1" name="<?php echo $i; ?>" value="<?php echo (isset($sorteo->Valor)) ? $sorteo->Valor : "" ; ?>">
	</div>

	<?php $sorteo = $this->registro_model->cargar_sorteos_baloto($i, 2); ?>
	<div class="col-lg-1">
		<input type="text" class="form-control" id="sorteo<?php echo $i; ?>" data-posicion="2" name="<?php echo $i; ?>" value="<?php echo (isset($sorteo->Valor)) ? $sorteo->Valor : "" ; ?>">
	</div>

	<?php $sorteo = $this->registro_model->cargar_sorteos_baloto($i, 3); ?>
	<div class="col-lg-1">
		<input type="text" class="form-control" id="sorteo<?php echo $i; ?>" data-posicion="3" name="<?php echo $i; ?>" value="<?php echo (isset($sorteo->Valor)) ? $sorteo->Valor : "" ; ?>">
	</div>

	<?php $sorteo = $this->registro_model->cargar_sorteos_baloto($i, 4); ?>
	<div class="col-lg-1">
		<input type="text" class="form-control" id="sorteo<?php echo $i; ?>" data-posicion="4" name="<?php echo $i; ?>" value="<?php echo (isset($sorteo->Valor)) ? $sorteo->Valor : "" ; ?>">
	</div>

	<div class="col-lg-1">
	<?php $sorteo = $this->registro_model->cargar_sorteos_baloto($i, 5); ?>
		<input type="text" class="form-control" id="sorteo<?php echo $i; ?>" data-posicion="5" name="<?php echo $i; ?>" value="<?php echo (isset($sorteo->Valor)) ? $sorteo->Valor : "" ; ?>">
	</div>

	<div class="col-lg-1 text-center">
		---
	</div>

	<div class="col-lg-1">
	<?php $sorteo = $this->registro_model->cargar_sorteos_baloto($i, 6); ?>
		<input type="text" class="form-control" id="sorteo<?php echo $i; ?>" data-posicion="6" name="<?php echo $i; ?>" value="<?php echo (isset($sorteo->Valor)) ? $sorteo->Valor : "" ; ?>">
	</div>
	<div class="clear"></div>
<?php } ?>

<!-- Si es administrador -->
<?php if($this->session->userdata("Tipo") == 1){ ?>
	<br>
	<button type="button" class="btn btn-success btn-block" onclick="javascript:guardar()">Guardar registro</button>
<?php } ?>

<script type="text/javascript">
	function guardar(){
			$("[id^='sorteo']").each(function(){
				if ($.trim($(this).val()) != "") {
					registro = {
						Numero: $(this).attr("name"),
						Valor: $(this).val(),
						Posicion: $(this).attr("data-posicion"),
						// Loteria: $("#input_loteria").val(),
						// Fecha: $("#input_fecha").val(),
					}

					id = ajax("<?php echo site_url('registro/guardar_sorteos_baloto'); ?>", {'datos': registro}, 'html');
					console.log(id)

				}
			})

		// // Recorrido de los 50 números
		// for (var i = 1; i <= 50; i++) {
		// 	// Arreglo donde se va a almacenar los números
		// 	var datos = [];

		// 	for (var i = 1; i <= 6; i++) {
		// 		if($.trim($("#sorteo" + i).val()) != ""){
		// 			// Se agregan los ítems que serán registros en base de datos
		// 			registro = {
		// 				Numero: $("#sorteo" + i).attr("name"),
		// 				Valor: $("#sorteo" + i).val(),
		// 				Posicion: $("#sorteo" + i).attr("data-posicion"),
		// 				// Loteria: $("#input_loteria").val(),
		// 				// Fecha: $("#input_fecha").val(),
		// 			}
		// 			console.log(registro)

		// 			// El registro se agrega al arreglo de datos
		// 			datos.push(registro)
		// 		}
		// 	}

		// 	// Se procede a hacer la inserción en base de datos vía ajax
		// 	ajax("<?php // echo site_url('registro/guardar_sorteos_baloto'); ?>", {'datos': datos}, 'html');
		// }
		// // console.log(datos)
		
		

		$("#modal_sorteos_baloto").modal("hide");
	}
</script>
