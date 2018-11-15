
<div class="navbar-collapse collapse">
	<ul class="nav navbar-nav">
		<?php if($id_usuario == 1){ ?>
			<li><a href="<?php echo site_url('registro/pre_registro'); ?>"><span class="glyphicon glyphicon-hand-up"></span> Pre-Registro</a></li>
		<?php } ?>
		
		<li><a href="<?php echo site_url('autorizacion'); ?>"><span class="glyphicon glyphicon-ok-sign"></span> Autorizar</a></li>
		<li><a href="#contact"><span class="glyphicon glyphicon-ok"></span> Autorizar con CDE</a></li>
		<li><a href="<?php echo site_url('posicion'); ?>"><span class="glyphicon glyphicon-asterisk"></span> Mi posición</a></li>
		<li><a href="#contact"><span class="glyphicon glyphicon-book"></span> Biblioteca</a></li>
	
		<?php if($id_usuario){ ?>
			<li><a href="<?php echo site_url('sesion/cerrar') ?>"><span class="glyphicon glyphicon-user"></span> <?php echo substr($this->session->userdata('Nombre'), 0, 25); ?> - Cerrar sesión</a></li>
		<?php } ?>
	</ul>
	<?php if(!$id_usuario){ ?>
		<form id="form_sesion" class="navbar-form navbar-right">
			<div class="form-group">
				<input type="text" id="codigo_empleo" placeholder="Código de Empleo" class="form-control" autofocus>
			</div>
			<div class="form-group">
				<input type="password" id="password" placeholder="Contraseña" class="form-control">
			</div>
			<button type="submit" class="btn btn-success">Entrar</button>
		</form>
	<?php } ?>
</div><!--/.navbar-collapse -->
<?php } ?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#form_sesion").on("submit", function(){
			console.log("Conectando...");

			//Tomo los valores
			var codigo_empleo = $("#codigo_empleo");
			var password = $("#password");

			datos_sesion = {
				codigo_empleo: codigo_empleo.val(),
				password: password.val()
			}

			//Petición ajax
			$.ajax({
				url:" <?php echo site_url('sesion/validar'); ?>",
				type: "POST",
				data: datos_sesion,
				//dataType: "JSON",
				success: function(respuesta){
					//Si hay respuesta afirmativa
					if (respuesta) {
						console.log("Conectado");

						//Redirección
						location.href = "<?php echo site_url(''); ?>";

						console.log("Conectado");
					} else {
						//Mensaje de error
						alert("Los datos no son válidos. Verifíquelos por favor");

						console.log("No conectado");
					}
				}
			});//Fin ajax

			return false;
		})
	});
</script>