<div id="modal" class="modal fade" >
    <!-- modal-content -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="titulo_mensaje" class="modal-title">Datos del usuario</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <p>
                    	<b>Datos principales:</b>
                    	<ul>
                    		<li><b>Nombre:</b> <?php echo $usuario->Nombre; ?></li>
                    		<li><b>Cédula:</b> <?php echo $usuario->Cedula; ?></li>
                    		<li><b>Departamento:</b> <?php echo $usuario->Departamento; ?></li>
                    		<li><b>Municipio:</b> <?php echo $usuario->Municipio; ?></li>
                    		<li><b>Correo electrónico:</b> <?php echo $usuario->Email; ?></li>
                    		<li><b>Teléfono:</b> <?php echo $usuario->Telefono; ?></li>
                    	</ul>
                    </p>

                    <p>
                        <b>Datos del pago:</b>
                        <ul>
                            <li><b>Tipo de afiliación:</b> <?php echo $usuario->Nombre_Tipo_Afiliacion; ?></li>
                            <li><b>Consignación:</b> <?php echo $usuario->Consignacion; ?></li>
                            <li><b>Código de empresa:</b> <?php echo $usuario->Empresa; ?></li>
                            <li><b>Nombre de empresa:</b> <?php echo $usuario->Nombre_Empresa; ?></li>
                            <li><b>Número de cheque:</b> <?php echo $usuario->Cheque; ?></li>
                            <li><b>Nombre del invitador:</b> <?php echo $usuario->Nombre_Invitador; ?></li>
                            <li><b>Cédula del invitador:</b> <?php echo $usuario->Cedula_Invitador; ?></li>
                            <li><b>Teléfono del invitador:</b> <?php echo $usuario->Telefono_Invitador; ?></li>
                            <li><b>Fecha de entrega del volante:</b> <?php echo $this->administracion_model->formato_fecha($usuario->Fecha_Entrega_Volante); ?></li>
                            <li><b>Fecha de consignacion:</b> <?php echo $this->administracion_model->formato_fecha($usuario->Fecha_Consignacion); ?></li>
                        </ul>
                    </p>

                    <p>
                    	<b>Años :</b>
                    	<?php echo $usuario->Anios; ?>
                    </p>
                </div>
            </div>

            <div class="modal-footer">
                <button id="btn_eliminar_usuario" type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No, Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
	$(document).ready(function(){
		// Se abre un modal
        $('#modal').modal('show');
	});
</script>