<input type="button" id="subir_foto" class="btn btn-success btn-block btn-sm" value="Seleccionar foto y subir">

<script type="text/javascript">
	$(document).ready(function(){
		//Se prepara la subida del archivo
        new AjaxUpload("#subir_foto", {
            action: '<?php echo site_url("administracion/subir_foto"); ?>',
            type: 'POST',
            data: {"id_cuadro": "<?php echo $this->input->post('id_cuadro') ?>"},
            onSubmit : function(file , ext){
                //Se valida la extension del archivo
                if (!(ext && /^(jpg|JPG)$/.test(ext))){
                    //Se muestra el error
                    alert('El archivo que está tratando de subir no es permitido. Por favor suba una imagen en formato JPG.');
                    return false;
                }
            }, // onsubmit
            onComplete: function(file, respuesta){
                //Si se subió
                if(respuesta == "true"){
                    //Se carga la lista con documentos subidos
                    $("#tabla_cuadros").load("<?php echo site_url('administracion/listar_cuadros') ?>", {'': ''});
                } else {
                    //Se muestra el error
                    alert('No se pudo subir la foto.');
                    return false;
                } // if
            } // oncomplete
        }); // AjaxUpload
	})
</script>