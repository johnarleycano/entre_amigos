<!-- Datos para enviar al correo -->
<input id="email" type="hidden" value="<?php echo $this->session->userdata('Email'); ?>" />
<input id="nombre" type="hidden" value="<?php echo $this->session->userdata('Nombre'); ?>" />

<?php
$id_usuario = $this->session->userdata('Pk_Id_Usuario');
if(!$id_usuario){ ?>
	<div class="alert alert-info">Por favor inicie sesión con su código y su contraseña para poder realizar una denuncia.</div>
<?php } else { ?>
	<div id="contenedor_denuncia">
		<p class="letra_grande">
			Por favor escriba su inquietud y bríndenos datos si los tiene. Recuerde que la información que entregue se mantendrá en absoluta reserva.
		</p>
		<textarea id="denuncia" class="form-control" rows="5" autofocus></textarea><br>

		<button id="denunciar" type="button" class="btn btn-primary btn-lg btn-block">Enviar inquietud</button>
	</div>
<?php } ?>

<script type="text/javascript">
	$(document).ready(function(){
		//Boton
		$("#denunciar").on("click", function(){
			console.log("Denunciando...")

			//Array con la denuncia
			datos = {
				tipo: "denuncia",
				destinatario: $("#email").val(),
				nombre: $("#nombre").val(),
				denuncia: $("#denuncia").val(),
			}
			console.log(datos);

			//Se envía correo electrónico con los datos
            denuncia = ajax("<?php echo site_url('email/enviar'); ?>", {'datos': datos, 'tipo': 'denuncia'}, 'html');
            console.log(denuncia);

        	mostrar_exito($("#contenedor_denuncia"), "Ha enviado correctamente la denuncia. Recibirá un correo electrónico. Gracias por comunicarse con nosotros.");
			//denunciar = 

		})
	})
</script>