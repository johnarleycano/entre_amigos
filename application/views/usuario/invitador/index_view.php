<!-- Si aun no tiene invitador -->
<?php if ($this->session->userdata("Fk_Id_Usuario_Invitador") == NULL) { ?>
	<div class="row">
	    <div id="mensajes"></div>
	    
	    <div class="col-lg-4"></div>
	    
	    <div class="col-lg-4">
	        <center><label for="codigo_empleo" class="control-label">Código de empleo</label></center>
	        <input class="form-control" id="codigo_empleo" type="text"  placeholder="Digite el código de empleo" autofocus>
	        <p></p>
	        <button type="button" id="guardar_invitador" class="btn btn-success btn-block">Guardar</button>
	    </div>
	</div>   
<?php } ?>

<center>
    <img src="<?php echo base_url(); ?>img/publicidad.png" align="center">
</center>

<script type="text/javascript">
    $(document).ready(function(){

    	$("#guardar_invitador").on("click", function(){
    		//Declaración de variables
            var codigo_empleo = $("#codigo_empleo");  

            //Campos obligatorios a validar
            var campos_vacios = new Array(
                codigo_empleo.val()
            );
            // console.log(campos_vacios);

            // si no supera la validación
            if (!validar_campos_vacios(campos_vacios)) {
                //Se muestra el error
                mostrar_error($("#mensajes"), "Por favor ingrese el código de empleo");
            }else{
            	// Se consulta si existe el invitador
            	invitador = ajax("<?php echo site_url('usuario/consultar_invitador'); ?>", {'codigo_empleo': codigo_empleo.val()}, 'json');

        		// Si trae algo
        		if(invitador.length == 0){
        			//Se muestra el error
                	mostrar_error($("#mensajes"), "El usuario con el código de empleo <b>" + codigo_empleo.val() + "</b> no exise.");
        		}else{
					// Se actualiza el id de usuario invitador
					actualizar = ajax("<?php echo site_url('usuario/actualizar'); ?>", {'tipo': 'invitador', 'id_usuario': invitador.Pk_Id_Usuario, 'codigo_empleo': ''}, 'html');
					
					// Se actualiza el id de usuario invitadorde la sesión
					ajax("<?php echo site_url('usuario/actualizar_sesion_invitador'); ?>", {'id_invitador': invitador.Pk_Id_Usuario}, 'html');

					//Se muestra el mensaje de exito
	                mostrar_exito($("#mensajes"), "Fecicidades! Ahora su invitador es " + invitador.Nombre + ".");
        		}
            }
    	});//Fin guardar
    });//Fin document.ready
</script>