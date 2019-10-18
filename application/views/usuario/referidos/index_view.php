<!-- Tabla -->
<table id="tbl_referidos">
    <thead>
        <th>Nro.</th>
        <th>Nombre</th>
        <th>Código invitador</th>
        <th>Correo</th>
        <th>Teléfono</th>
    </thead>
    <tbody>
        <?php
        // Contador
        $cont = 1;

        // se recorren los usuarios
        foreach ($this->usuario_model->listar_referidos() as $referido) {
        ?>
            <tr>
                <td class="text-right"><?php echo $cont++; ?></td>
                <td><?php echo $referido->Nombre; ?></td>
                <td><?php echo $referido->Codigo_Afiliacion; ?></td>
                <td><?php echo $referido->Email; ?></td>
                <td><?php echo $referido->Telefono; ?></td>
            </tr>
        <?php
        } // foreach
        ?>
    </tbody>
</table><!-- Tabla -->

<center>
    <img src="<?php echo base_url(); ?>img/publicidad.png" align="center">
</center>

<script>
    // Cuando el documento esté listo
    $(document).ready(function(){
        // Inicialización de la tabla
        $('#tbl_referidos').dataTable( {
            "bProcessing": true
        }); // Tabla
    });// document.ready
</script>