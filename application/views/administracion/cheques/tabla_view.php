<table id="tbl_cheques">
	<thead>
		<tr>
			<th class="text-center">Nro.</th>
			<th class="text-center">Código cheque</th>
			<th class="text-center">Clave</th>
			<th class="text-center">Usuario</th>
		</tr>
	</thead>
	<tbody>
		<?php
		// Contador
		$cont = 1;

		// Recorrido de los cheques
		foreach ($cheques = $this->administracion_model->listar_cheques($tipo) as $cheque) {
		?>
			<tr>
				<td class="text-right"><?php echo $cont++; ?></td>
				<td><?php echo $cheque->Codigo_Cheque; ?></td>
				<td><?php echo $cheque->Clave; ?></td>
				<td><?php echo $cheque->Usuario; ?></td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>

<br>
<br>



<script>
    // Cuando el documento esté listo
    $(document).ready(function(){
        // Inicialización de la tabla
        $('#tbl_cheques').dataTable( {
            "bProcessing": true
        }); // Tabla
    });// document.ready
</script>