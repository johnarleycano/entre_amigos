<div class="page-header">
    <center><h1>Libros<small> Listado de personas que reciben las cartas de información y el libro.</small></h1></center>
</div>

<!-- Tabla -->
<table id="tbl_referidos">
    <thead>
        <th>Nro.</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Código Cheque</th>
        <th>NúmeroCheque</th>
        <th>Fecha</th>
    </thead>
    <tbody>
        <?php
        // Contador
        $cont = 1;

        // se recorren los usuarios referidos
        foreach ($this->administracion_model->listar_libros_comprados() as $compra) {
        ?>
            <tr>
                <td class="text-right"><?php echo $cont++; ?></td>
                <td><?php echo $compra->Nombre; ?></td>
                <td><?php echo $compra->Email; ?></td>
                <td><?php echo $compra->Numero_Cheque; ?></td>
                <td><?php echo $compra->Numero_Cheque; ?></td>
                <td><?php echo $this->administracion_model->formato_fecha($compra->Fecha); ?></td>
            </tr>
        <?php
        } // foreach
        ?>
    </tbody>
</table><!-- Tabla -->

<script>
	function activar_desactivar_sorteo(id_usuario){
		// console.log(id_usuario);
		
	}

    // Cuando el documento esté listo
    $(document).ready(function(){
        // Inicialización de la tabla
        $('#tbl_referidos').dataTable( {
            "bProcessing": true
        }); // Tabla
    });// document.ready
</script>