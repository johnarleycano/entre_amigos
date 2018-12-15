<table id="tbl_usuarios">
    <thead>
        <th>Nro.</th>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Teléfono</th>
        <th>Código Empleo invitador</th>
    </thead>
    <tbody>
		<?php
        // Contador
        $cont = 1;
        
        // se recorren los usuarios
        foreach ($this->administracion_model->obtener_asesores_voluntarios() as $asesor) {
        ?>
			<tr>
				<td class="text-right"><?php echo $cont++ ?></td>
				<td><?php echo $asesor->Nombre; ?></td>
				<td><?php echo $asesor->Cedula; ?></td>
				<td><?php echo $asesor->Telefono; ?></td>
				<td><?php echo $asesor->Codigo_Empleo; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function(){
        $('table').dataTable( {
            "bProcessing": true
        })
    })
</script>
