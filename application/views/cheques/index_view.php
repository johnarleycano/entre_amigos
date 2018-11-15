<?php $usuario = $this->usuario_model->listar("", $this->session->userdata("Pk_Id_Usuario")); ?>

<div class="well">
    <center>
        <h1><?php echo $usuario->Cheque; ?></h1>
    </center>
</div>

<div class="row">
    <div id="mensajes"></div>
    
    <div class="col-lg-4"></div>
    
    <div class="col-lg-4">
        <center><label for="consignacion" class="control-label">Número de consignación</label></center>
        <input class="form-control" id="consignacion" type="text" value="<?php echo $usuario->Consignacion; ?>" placeholder="Digite el número de consignación" autofocus>
        <p></p>
        <button type="button" id="guardar_cheque" class="btn btn-success btn-block">Guardar</button>
    </div>
</div>   

<script type="text/javascript">
    $(document).ready(function(){

    	$("#guardar_cheque").on("click", function(){
    		//Declaración de variables
            var consignacion = $("#consignacion");  

            //Campos obligatorios a validar
            var campos_vacios = new Array(
                consignacion.val()
            );
            // console.log(campos_vacios);
            
            datos = {
                "Consignacion": consignacion.val()
            }

            // si no supera la validación
            if (!validar_campos_vacios(campos_vacios)) {
                //Se muestra el error
                mostrar_error($("#mensajes"), "Por favor ingrese el número de consignación");
            }else{
            	// Actualizar
            	cheque = ajax("<?php echo site_url('cheque/actualizar'); ?>", {'datos': datos}, 'html');

            	//Se muestra el mensaje de exito
                mostrar_exito($("#mensajes"), "Se ha guardado correctamente el cheque.");
            }
    	});//Fin guardar
    });//Fin document.ready
</script>