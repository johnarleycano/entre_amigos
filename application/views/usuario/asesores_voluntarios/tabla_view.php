<?php
// Se consultan los usuarios que se registraron mediante patrocinados y pertenecientes a esa cédula
$referidos = $this->usuario_model->cargar_referidos_patrocinados($cedula);

if(count($referidos) == 0) echo "<div class='jumbotron'>No hay referidos relacionados con este número cedula</div>";
?>

<div class="jumbotron">
	Este es el listado de personas que se inscribieron en la opción <b>Patrocinados</b> con su cédula:
</div>

<table>
	<thead>
        <th>Nro.</th>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Email</th>
        <th>Código de Afiliación</th>
        <th>Código de Empleo</th>
    </thead>
    <tbody>
		<?php
        $cont = 1;

        // Se recorren los referidos
		foreach ($referidos as $referido) { ?>
	    	<tr>
	    		<td><?php echo $cont++; ?></td>
	    		<td><?php echo $referido->Nombre; ?></td>
	    		<td><?php echo $referido->Cedula; ?></td>
	    		<td><?php echo $referido->Email; ?></td>
	    		<td><?php echo $referido->Codigo_Afiliacion; ?></td>
	    		<td><?php echo $referido->Codigo_Empleo; ?></td>
	    	</tr>
		<?php } ?>
    </tbody>
</table>

<script type="text/javascript">
	$(document).ready(function(){
        // Inicialización de la tabla
        $('table').dataTable( {
            "bProcessing": true
        })
    })
</script>