<!-- Id de sesión de usuario -->
<?php $id_usuario = $this->session->userdata('Pk_Id_Usuario'); ?>

<!--Menú-->
<div class="navbar-header" style="margin: 15px;">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="<?php echo site_url(); ?>"><span class="glyphicon glyphicon-home"></span></a>
</div>

<div class="navbar-collapse collapse" style="margin-top: 15px; font-size: 1em; font-color:white;">
	<!-- Opciones del menú -->
	<ul class="nav navbar-nav">
		<?php if($this->session->userdata('Tipo') == '1'){ ?>
			<!-- Administración -->
	        <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
	            <ul class="dropdown-menu">
	                <li>
	                    <a href="<?php echo site_url('administracion/visitas_biblioteca'); ?>"><span class="glyphicon glyphicon-book"></span> Accesos a la biblioteca</a>
	                </li>

	                <li>
	                    <a href="<?php echo site_url('administracion/asesores_voluntarios'); ?>"><span class="glyphicon glyphicon-lock"></span> Asesores voluntarios</a>
	                </li>

	                <li>
	                    <a href="<?php echo site_url('email/masivo'); ?>"><span class="glyphicon glyphicon-inbox"></span> Correos masivos</a>
	                </li>

	                <!-- <li>
	                    <a href="<?php // echo site_url('cheque'); ?>"><span class="glyphicon glyphicon-th-list"></span> Afiliaciones al club</a>
	                </li> -->

	                <li>
	                    <a href="<?php echo site_url('administracion/codigos_sorteos'); ?>"><span class="glyphicon glyphicon-th"></span> Códigos y sorteos</a>
	                </li>
	                
	                <li>
	                    <a href="<?php echo site_url('usuario/afiliados'); ?>"><span class="glyphicon glyphicon-user"></span> Usuarios</a>
	                </li>

	                <!-- 
	                <li class="divider"></li>
	                
	                <li>
	                    <a href="<?php //echo site_url('cheque'); ?>"><span class="glyphicon glyphicon-plus"></span> Crear cheques</a>
	                </li>
	                
	                <li>
	                    <a href="<?php //echo site_url('cheque/listar'); ?>"><span class="glyphicon glyphicon-th-list"></span> Ver cheques</a>
	                </li> -->
	            </ul>
	        </li><!-- Administración -->
		<?php } ?>


		<!-- Si no se ha logueado -->
		<?php if(!$id_usuario){ ?>
			<li><a href="<?php echo site_url('registro'); ?>"><span class="glyphicon glyphicon-hand-up"></span> Afiliarme</a></li>
			<li><a href="<?php echo site_url('usuario/asesores_voluntarios'); ?>"><span class="glyphicon glyphicon-hand-up"></span> Asesores voluntarios</a></li>
		<?php } ?>
		
		<?php if(false){ ?>
			<!-- Comprar libro -->
			<li><a href="<?php echo site_url('registro/compra'); ?>"><span class="glyphicon glyphicon-hand-up"></span> Empleo y afiliaciones</a></li>
		<?php } ?>

		<!-- Si se ha logueado -->
		<?php if($id_usuario){ ?>
			<!-- Mis invitaciones -->
			<li><a href="<?php echo site_url('usuario/invitador'); ?>"><span class="glyphicon glyphicon-user"></span> Invitador</a></li>
			
			<li><a href="<?php echo site_url('usuario/patrocinador'); ?>"><span class="glyphicon glyphicon-briefcase"></span> Patrocinador</a></li>

			<!-- Si no tiene código de empleo, menú para pedir cheque -->
			<?php if($this->session->userdata('Codigo_Empleo') == 'Pendiente'){ ?>
				<!-- Pedir cheque -->
				<li><a href="<?php echo site_url('cheque'); ?>"><span class="glyphicon glyphicon-cloud-upload"></span> Afiliarse al club</a></li>
			<?php }else{ ?>
				<!-- Mis referidos -->
				<li><a href="<?php echo site_url('usuario/referidos'); ?>"><span class="glyphicon glyphicon-user"></span> Referidos</a></li>

				<!-- Mostrar código de empleo -->
				<li><a href="<?php echo site_url('registro/codigo_empleo'); ?>"><span class="glyphicon glyphicon-cloud-upload"></span> Mi Código Empleo</a></li>
				
				<!-- Contáctenos -->
				<li><a href="<?php echo site_url('bienvenido/denuncia'); ?>"><span class="glyphicon glyphicon-book"></span> Contacto</a></li>
			<?php } ?>
		<?php } ?>

		<!-- Biblioteca -->
		<li><a href="<?php echo site_url('biblioteca'); ?>"><span class="glyphicon glyphicon-book"></span> Biblioteca</a></li>

		<!-- Si se ha logueado -->
		<?php if($id_usuario){ ?>
			<!-- Cerrar Sesión -->
			<li><a href="<?php echo site_url('usuario/finalizar') ?>"><span class="glyphicon glyphicon-remove"></span> Salir<?php //echo substr($this->session->userdata('Nombre'), 0, 15); ?></a></li>
		<?php } ?>
	</ul><!-- Opciones del menú -->
	
	<!-- Si no se ha logueado -->
	<?php if(!$id_usuario){ ?>
		<!-- Inicio de sesión -->
		<form id="form_sesion" class="navbar-form navbar-right">
			<div class="form-group">
				<!-- Código de afiliación -->
				<input type="text" id="codigo_afiliacion" placeholder="Código de Afiliación" class="form-control" autofocus>
			</div>
			<div class="form-group">
				<!-- Contraseña -->
				<input type="password" id="password" placeholder="Contraseña" class="form-control">
			</div><!-- Contraseña -->
			<button type="submit" class="btn btn-success">Entrar</button>
		</form><!-- Inicio de sesión -->
	<?php } ?>
</div><!--/.navbar-collapse -->

<script type="text/javascript">
	// Cuando el documento esté listo
	$(document).ready(function(){
		//Tomo los valores
		var codigo_afiliacion = $("#codigo_afiliacion");
		var password = $("#password");

		// Iniciar sesión
		$("#form_sesion").on("submit", function(){
			//Debe ingresar los dos datos
			if($.trim(codigo_afiliacion.val()) == '' || password.val() == ''){
				//Mensaje de advertencia
            	mostrar_info($("#mensajes"), "Digite un código de afiliación y una contraseña por favor.");

            	// Se detiene
            	return false;
			}else{
				//Array con los datos
				datos_sesion = {
					'Codigo_Afiliacion': codigo_afiliacion.val(),
					'Password': password.val()
				};
				// console.log(datos_sesion);
				 
				// Se valida que exista el usuario
				existe_usuario = ajax("<?php echo site_url('usuario/validar'); ?>", {'datos': datos_sesion}, 'HTML');

				//Si el usuario se encuentra
				if (existe_usuario != "false") {
					//Redirección
					location.href = "<?php echo site_url(''); ?>";
				}else{
					//Mensaje de error
            		mostrar_error($("#mensajes"), "No existe en nuestra base de datos el código de afiliación y contraseña que usted está indicando. Por favor verifique nuevamente.");

            		//Se detiene
            		return false;
				} // if usuario encontrado
			} // if

			// Se detiene
        	return false;
		}); // iniciar sesión
	}); // Document.ready
</script>