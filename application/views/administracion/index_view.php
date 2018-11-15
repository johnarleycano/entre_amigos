<!-- Contenedor -->
<div class="container">
	<!-- row -->
	<div class="row">
		<!-- Si no ha iniciado sesión -->
        <?php if(!$this->session->userdata("Pk_Id_Usuario")){ ?>
            
        <?php }else{ ?>
            <div class="col-lg-12">
                <input type="hidden" id="id_cuadro">
                <br>
                <input type="button" id="agregar_cuadro" class="btn btn-success btn-block btn-sm" value="Agregar nuevo cuadro">
                
                <div id="cont_agregar"></div>
                <div id="tabla_cuadros"></div>
            </div>
        <?php } ?>
	</div><!-- row -->
</di><!-- Contenedor -->

<script type="text/javascript">
    $(document).ready(function(){
        //Se carga la lista con documentos subidos
        $("#tabla_cuadros").load("<?php echo site_url('administracion/listar_cuadros') ?>", {'': ''});

        $("#agregar_cuadro").on("click", function(){
            //Se pone el id del cuadro
            $("#id_cuadro").val(0);

            //Se carga la lista con documentos subidos
            $("#cont_agregar").load("<?php echo site_url('administracion/agregar_cuadro') ?>", {'': ''});
        });

        $("form").on("submit", function(){
            //Datos a validar
            datos_obligatorios = new Array(
                $("#usuario").val(),
                $("#clave").val()
            ); // datos

            //Se ejecuta la validación de los campos obligatorios
            validacion = validar_campos_vacios(datos_obligatorios);

            //Si no supera la validacíón
            if (!validacion) {
                //Se muestra el mensaje de error
                alert('Por favor diligencie todos los campos para poder iniciar sesión.');
            } else {
                //Consultamos el usuario
                usuario_existe = ajax("<?php echo site_url('inicio/validar_usuario'); ?>", {usuario: $("#usuario").val(), pass: $("#clave").val()}, "html");

                // Si usuario existe
                if(usuario_existe == "true"){
                    // Se refresca
                    location.href = "<?php echo site_url('administracion'); ?>";
                }else{
                    alert("Este usuario no existe");
                }
            }

            return false;
        });
    });//Fin document.ready
</script>