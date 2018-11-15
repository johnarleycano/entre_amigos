
	<a href="<?php echo base_url().'archivos/libros/clase_animal.pdf'; ?>" target="blank">
		<div class="col-lg-3">
			<div class="page-header">
				<center>
					<h1>¿Qué clase de animal eres tú?</h1>
					<img align="center" src=<?php echo base_url().'img/05.jpg'; ?> alt="..." style="width: 200px;">
				</center>
			</div>
		</div>
	</a>

	<!-- <a href="<?php // echo base_url().'archivos/libros/hombres_calle.pdf'; ?>" target="blank">
		<div class="col-lg-3">
			<div class="page-header">
				<center>
					<h2>Los hombres de la calle no son feos</h2>
					<img align="center" src=<?php // echo base_url().'img/06.jpg'; ?> alt="..." style="width: 200px;">
				</center>
			</div>
		</div>
	</a>

	<a href="<?php // echo base_url().'archivos/libros/quejoda.pdf'; ?>" target="blank">
		<div class="col-lg-3">
			<div class="page-header">
				<center>
					<h2>Doña <br>Quejoda</h2>
					<img align="center" src=<?php // echo base_url().'img/07.jpg'; ?> alt="..." style="width: 200px;">
				</center>
			</div>
		</div>
	</a>
	
	<a href="<?php // echo base_url().'archivos/libros/vestidos.pdf'; ?>" target="blank">
		<div class="col-lg-3">
			<div class="page-header">
				<center>
					<h2>Al mundo de los vestidos</h2>
					<img align="center" src=<?php // echo base_url().'img/08.jpg'; ?> alt="..." style="width: 200px;">
				</center>
			</div>
		</div>	
	</a> -->
    <span style="font-size: 14px;">Sin autorizar, verá un libro. En el momento de ser autorizado, puede ver los demás.</span>
	
	<!-- Si no tiene código de empleo -->
	<?php if($this->session->userdata('Codigo_Empleo') == 'Pendiente'){ ?>
	<?php } ?>