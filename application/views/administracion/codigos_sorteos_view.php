<div class="page-header">
    <center><h1>Códigos y sorteos<small> Listado de personas referidas para el sorteo.</small></h1></center>
</div>

<!-- Tabla -->
<table id="tbl_referidos">
    <thead>
        <th>Nro.</th>
        <th>Invitador</th>
        <th>Código de empleo</th>
        <th>Invitado</th>
        <th>Código de empleo</th>
        <th>Fecha de registro</th>
        <!-- <th>Participa</th> -->
    </thead>
    <tbody>
        <?php
        // Contador
        $cont = 1;

        // se recorren los usuarios referidos
        foreach ($this->administracion_model->listar_referidos_sorteo() as $referido) {
        ?>
            <tr>
                <td class="text-right"><?php echo $cont++; ?></td>
                <td><?php echo $referido->Invitador; ?></td>
                <td><?php echo $referido->Codigo_Empleo; ?></td>
                <td><?php echo $referido->Referido; ?></td>
                <td><?php echo $referido->Codigo_Empleo_Referido; ?></td>
                <td><?php echo $this->administracion_model->formato_fecha($referido->Fecha_Registro); ?></td>
                <!-- Si está activo -->
                <?php // if($referido->Sorteo_Activo == "1"){ ?>
                	<!-- <td>
                		<a onClick="javascript:activar_desactivar_sorteo('<?php // echo $referido->Pk_Id_Usuario; ?>')" style="text-decoration: none; color: black; cursor: pointer;">
                			<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                		</a>
                	</td> -->
                <?php // }else{ ?>
					<!-- <td>
						<a onClick="javascript:activar_desactivar_sorteo('<?php // echo $referido->Pk_Id_Usuario; ?>')" style="text-decoration: none; color: black; cursor: pointer;">
							Activar
						</a>
					</td> -->
                <?php // } ?>
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