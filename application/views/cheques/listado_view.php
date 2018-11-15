<!-- Se cargan los cheques -->
<?php $cheques = $this->registro_model->cargar_cheques(); ?>

<!-- Tabla -->
<table id="tbl_cheques">
    <thead>
        <th></th>
        <th>Biblioteca privada</th>
        <th>Libro poesía</th>
        <th>Sorteo por un año</th>
    </thead>
    <tbody>
        <?php
        $cont = 1;

        // se recorren los usuarios
        foreach ($cheques as $cheque) {
        ?>
            <tr>
            	<td><?php echo $cont++; ?></td>
            	<td><?php echo $cheque->Cheque1; ?></td>
                <td><?php echo $cheque->Cheque2; ?></td>
            	<td><?php echo $cheque->Cheque3; ?></td>
            </tr>
        <?php
        } // foreach
        ?>
    </tbody>
</table><!-- Tabla -->

<script>
    // Cuando el documento esté listo
    $(document).ready(function(){
        // Inicialización de la tabla
        $('#tbl_cheques').dataTable( {
            "bProcessing": true
        }); // Tabla
    });// document.ready
</script>