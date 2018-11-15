<!-- Tabla -->
<table id="tbl_bonos">
    <thead>
        <th>Nro.</th>
        <th>Código cheque</th>
        <th>Clave</th>
        <th>Código asesor</th>
        <th>Usuario</th>
        <th>Opciones</th>
        <!-- <th>Participa</th> -->
    </thead>
    <tbody>
        <?php
        // Contador
        $cont = 1;

        // se recorren los usuarios referidos
        foreach ($this->administracion_model->listar_bonos() as $bono) {
        ?>
            <tr>
                <td class="text-right"><?php echo $cont++; ?></td>
                <td><?php echo $bono->Codigo_Cheque; ?></td>
                <td><?php echo $bono->Clave; ?></td>
                <td><?php echo $bono->Codigo_Asesor; ?></td>
                <td><?php // echo $bono->Codigo_Empleo; ?></td>
                <td><?php // echo $this->administracion_model->formato_fecha($bono->Fecha_Registro); ?></td>
            </tr>
        <?php
        } // foreach
        ?>
    </tbody>
</table><!-- Tabla -->
<br>
<br>

<p>
    <input type="button" id="agregar_bono" class="btn btn-success btn-block btn-sm" value="Agregar bono cheque">
</p>

<script>
    // Cuando el documento esté listo
    $(document).ready(function(){
        $("#agregar_bono").on("click", function(){
            // Se abre la ventana
            $('#modal_bono').modal('show');

        // //     //Se pone el id del cuadro
        // //     $("#id_cuadro").val(0);

        // //     //Se carga la lista con documentos subidos
        // //     $("#cont_agregar").load("<?php echo site_url('administracion/agregar_cuadro') ?>", {'': ''});
        });

        // Inicialización de la tabla
        $('#tbl_bonos').dataTable( {
            "bProcessing": true
        }); // Tabla
    });// document.ready
</script>