<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<?php if($this->session->userdata('Patrocinador') != ""){ ?>
			<h1>Mi patrocinador es <?php echo $this->session->userdata('Patrocinador'); ?></h1>
		<?php } else {  ?>
			<h1>Todavía no hay patrocinador</h1>
		<?php } ?>
	</div>
</div>