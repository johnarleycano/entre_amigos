<div id="mensajes"></div>
<div class="page-header">
	<center><h1>FUNDACIÓN ENTREAMIGOS - CLUB ENTREAMIGOS LEC</h1></center>
</div>

<div class="col-lg-12">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicadores -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		</ol>

		<!--  -->
		<div class="carousel-inner">
			<div class="item active">
				<a href="javascript:mensaje()">
					<img align="center" src="./img/biblioteca_01.png" alt="..." style="width: 700px;">
					<div class="carousel-caption">
						<!-- <a href="<?php // echo site_url("registro"); ?>">Afiliarse</a> -->
					</div>
				</a>
			</div>

			<div class="item">
				<a href="javascript:mensaje()">
					<img align="center" src="./img/biblioteca_02.png" alt="..." style="width: 700px;">
					<div class="carousel-caption">
						<!-- "¿Qué clase de animal eres tú?" -->
					</div>
				</a>
			</div>

			<div class="item">
				<a href="javascript:mensaje()">
					<img src="./img/biblioteca_03.png" alt="..." style="width: 700px;">
					<div class="carousel-caption">
						<!-- "Los hombres de la calle no son feos" -->
					</div>
				</a>
			</div>
			
			<div class="item">
				<a href="javascript:mensaje()">
					<img src="./img/biblioteca_04.png" alt="..." style="width: 700px;">
					<div class="carousel-caption">
						<!-- "Los policías gordos" -->
					</div>
				</a>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
</div>
<div class="clear"></div>
<script type="text/javascript">
	function mensaje()
	{
		alert("Al momento de afiliarte, tendrás todos los libros a tu disposición en la biblioteca");

		return false;
	}

	$(document).ready(function(){
		// Se activa el carrusel
		$('#carousel-example-generic').carousel();

		
	});
</script>