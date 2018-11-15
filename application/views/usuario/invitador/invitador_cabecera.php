<span style="font-size: 14px;">En el momento se le dará un sorteo por una sola cifra. De cada diez afiliados, habrá un ganador. El premio será entregado a partir de los 15 días y el ganador pagará el envío. <br>Un asesor le llamará y le comunicará el número correspondiente. Los sorteos se harán por la Lotería de Medellín y se les dirá la fecha.</span>

<?php

// Se consulta el invitador
$invitador = $this->usuario_model->listar("", $this->session->userdata("Fk_Id_Usuario_Invitador"));

// Se consulta si ya tiene asignado un invitador 
if ($this->session->userdata("Fk_Id_Usuario_Invitador") != NULL) {
?>
	<div class="well">
	    <center>
	        <h1>Mi invitador es <b><?php echo $invitador->Nombre; ?></b> - <br><small><?php echo $invitador->Email; ?></small></h1>
	    </center>
	</div>
<?php }else{ ?>
	<div class="well">
	    <center>
	        <h3>Aun no hay un invitador agregado</h3>
	    </center>
	</div>
<?php
}
?>