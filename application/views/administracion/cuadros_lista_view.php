<?php
//Se consultan los datos necesarios
$cuadros = $this->administracion_model->listar_cuadros(null);
$ruta = base_url().'img/cuadros/';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Listado de cuadros
                <small>Puede agregar, editar, subir fotos y eliminar cuadros.</small>
            </h1>
        </div>
    </div>

    <?php
    // Contador
    $cont = 1;

    // Recorrido de los cuadros
    foreach ($cuadros as $cuadro) { 
	?>
    	<div class="col-md-4 portfolio-item">
    		<!-- Si tiene foto -->
            <?php if($cuadro->imagen == '1'){ ?>
            	<img class="img-responsive" src="<?php echo $ruta.$cuadro->id.".jpg"; ?>">
            <?php }else{ ?>
            	<img class="img-responsive" src="<?php echo $ruta."0.gif"; ?>">
            <?php } ?>
            
	        <!-- Nombre -->
	        <h3><a href="#"><?php echo $cuadro->nombre; ?></a> <small><?php echo $cuadro->autor; ?></small></h3>
	        
	        <!-- Descripción -->
	        <p><?php echo $cuadro->descripcion; ?></p>
			
			<!-- Opciones -->
			<a title="Cambiar foto" onclick="javascript:subir_foto('<?php echo $cuadro->id; ?>')">
	        	<span class="glyphicon glyphicon-picture" style="cursor: pointer; text-decoration: none; color: black;"></span>
			</a>

			<a title="Editar cuadro" onclick="javascript:editar('<?php echo $cuadro->id; ?>')" style="cursor: pointer; text-decoration: none; color: black;">
	        	<span class="glyphicon glyphicon-edit"></span>
			</a>

			<a title="Eliminar cuadro" onclick="javascript:eliminar('<?php echo $cuadro->id; ?>')">
	        	<span class="glyphicon glyphicon-remove" style="cursor: pointer; text-decoration: none; color: black;"></span>
			</a>

			<div id="cont_foto<?php echo $cuadro->id ?>"></div>
	    </div>

	    <!-- Cada tres cuadros limpiará para que se vean bien -->
	    <?php if($cont %3 == 0){ ?>
			<div style="clear: both;"></div>
	    <?php
		}
		
		$cont++;
	}
	?>
</div>
<!-- /.container -->

<script type="text/javascript">
	function editar(id_cuadro){
		//Se pone el id del cuadro
		$("#id_cuadro").val(id_cuadro);

		//Se carga la lista con documentos subidos
        $("#cont_agregar").load("<?php echo site_url('administracion/agregar_cuadro') ?>", {'': ''});
	}

	function eliminar(id_cuadro){
		//Se elimina vía ajax
		eliminar = ajax("<?php echo site_url('administracion/eliminar_foto'); ?>", {id_cuadro: id_cuadro}, "html");
		
		// Mensaje
		alert("Se eliminó el cuadro correctamente.");

		//Se carga la lista con documentos subidos
        $("#tabla_cuadros").load("<?php echo site_url('administracion/listar_cuadros') ?>", {'': ''});
	}

	function subir_foto(id_cuadro){
		//Se carga la lista con documentos subidos
        $("#cont_foto" + id_cuadro).load("<?php echo site_url('administracion/foto') ?>", {'id_cuadro': id_cuadro});
	}
</script>