<p>
	<div class="col-lg-12">
		<p>
			<?php $this->load->view("administracion/boton_pago"); ?>
		</p>
	</div>

	<div class="col-lg-4">
		<div class="well">
			<h3>Sorteos diarios</h3>
			<a onClick="javascript:sorteos_diarios()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal Sorteos -->
			<div id="modal_sorteos_diarios" class="modal fade" >
			    <!-- modal-content -->
			    <div class="modal-dialog" style="width:80%">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Sorteos diarios</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<div id="cont_sorteos_diarios"></div>
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>

	<div class="col-lg-4">
		<div class="well">
			<h3>Sorteos System Tree</h3>
			<a onClick="javascript:sorteos_system()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal Sorteos -->
			<div id="modal_sorteos_system" class="modal fade" >
			    <!-- modal-content -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Sorteos System Tree</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<div id="cont_sorteos_system"></div>
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>

	<div class="col-lg-4">
		<div class="well">
			<h3>Sorteos Baloto</h3>
			<a onClick="javascript:sorteos_baloto()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal Sorteos -->
			<div id="modal_sorteos_baloto" class="modal fade">
			    <!-- modal-content -->
			    <!-- <div class="modal-dialog"> -->
		    	<div class="modal-dialog" style="width:80%">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Sorteos Baloto (miércoles y sábados)</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<div id="cont_sorteos_baloto"></div>
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>
	<div class="clear"></div>

	<div class="col-lg-3">
		<div class="well">
			<h3>Nuestra misión</h3>
			<a onClick="javascript:mision()" class="btn btn-primary btn-lg">Ver más &raquo;</a>
			<!-- Modal Misión -->
			<div id="modal_mision" class="modal fade" >
			    <!-- modal-content -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Nuestra misión</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<p>La fundacion Entreamigos es una institución que pretende hacer un aporte a la cultura colombiana.</p>
			            			<p>Hemos creado una serie de libros, cuentos para adultos y para niños música y poesía, </p>
			            			<p>Bellas historias para entretener y promover la lectura. Llegaremos a muchos hogares con una nueva propuesta, para incentivar la lectura para toda la familia.</p>
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>

	<div class="col-lg-3">
		<div class="well">
			<h3>Visión</h3>
			<a onClick="javascript:vision()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal visión -->
			<div id="modal_vision" class="modal fade" >
			    <!-- modal-content -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Nuestra visión</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
				            		<p>La Fundación ENTREAMIGOS siempre ha creído que los valores más importantes no son valores materiales. Es necesario que primen los valores éticos, morales y también los espirituales.</p>
				            		<p>Es por esto que nuestro proyecto está basado en un buen esfuerzo, ejemplo y una propuesta que conduzca a las personas a mejorar la calidad de vida.</p>
				            		<p>Nuestra propuesta cultural queremos llevarla por todo el territorio colombiano y en un promedio de dos años compartirla  a dos países de Latinoamérica.</p>
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>

	<div class="col-lg-3">
		<div class="well">
			<h4>Club Entreamigos Lec</h4>
			<a onClick="javascript:club()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal Club Entreamigos Lec -->
			<div id="modal_club" class="modal fade" >
			    <!-- modal-content -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h3 id="titulo_mensaje" class="modal-title"><center><b>Club Entreamigos Lec</b></center></h3>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<p>El Club Entreamigos LEC es un programa interno de la fundación entreamigos, con el fin que nuestros asociados se sientan en un ambiente más acogedor.</p>
			            			<p>Tenemos programas culturales basados en propuestas de lectura y en algunos casos tendremos días de esparcimiento, como encuentros recreativos.</p>
			            			<p>Estaremos tocando puertas en diversas empresas con el fin de tener algunos beneficios para los afiliados.</p>
			            			<p>Todos los afiliados al Club tendrán derecho a participar en los sorteos diarios, sin poner un solo peso.</p>
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>
	

	<div class="col-lg-3">
		<div class="well">
			<h3>Bibliotecas privadas</h3>
			<a onClick="javascript:biblio_privada()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal Biblioteca privadas -->
			<div id="modal_biblio_privada" class="modal fade" >
			    <!-- modal-content -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Bibliotecas privadas</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<p>Las llamamos bibliotecas privadas, porque de alguna manera, no todas las personas podrán acceder a ella.</p>
			            			<p>Colocaremos puntos de atención en algunos barrios, en almacenes y supermercados.</p>
			            			<p>Todas las personas que son invitados con el volante físico de patrocinio, podrán hacer parte de las bibliotecas privadas con libros impresos que llevarán a casa, sin ningún costo, mes a mes por un año.</p>
			            			<p>Si la persona se presenta con el volante de invitación, después de los 1.000 afiliados; o sea después de haber registrado los primeros 1.000 a la biblioteca asignada el volante quedará desactivado y habría que averiguar si hay posibilidades de ingresarlo al grupo siguiente o quizá pierda la oportunidad de afiliación con los libros impresos.</p>
			            			<p>También podrá hacer su afiliación por la web; tendrá libros virtuales mes a mes por un año y participará en el programa de los sorteos como los demás participantes; hasta que la fundación exista.</p>
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>
	<div class="clear"></div>

	<div class="col-lg-3">
		<div class="well">
			<h3>Costos de afiliación</h3>
			<a onClick="javascript:costos()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal costos de afiliación -->
			<div id="modal_costos" class="modal fade" >
			    <!-- modal-content -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Costos de afiliación</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<p>Hemos querido no ser muy gravosos con la propuesta de la afiliación. Le proponemos que, tan solo con $50.000 pesos moneda colombiana o 25 dólares una sola vez en la vida, sería suficiente para que la fundación pudiera ayudarse, y así cumplir con nuestros objetivos.</p>
			            			<p>En esta área los cuentos son puestos en su panel interno, de una manera virtual.</p>
			            			<p>Sí, la Biblioteca privada, es de contacto personal, será con invitación, con patrocinio empresarial y tendrá un costo de $84.000 pesos colombianos.</p>
			            			<p>Esta afiliación, será una sola vez en la vida, tendrán libros físicos, impresos, que podrán llevar a casa mes a mes por un año, tendrán la chequera de Don Rico, sin ningún costo adicional, para que compre lo que no se puede comprar con la moneda tradicional.</p>
			            			<p>
			            				Podrá afiliarse de la siguiente manera:
			            				<ul>
			            					<li>Si es por la web, lo podrá hacer desde cualquier lugar.</li>
			            					<li>A la cuenta de ahorros # 13832618-6 la Cooperativa Confiar a nombre de Fundación Entreamigos de la FE</li>
			            				</ul>
			            			</p>
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>

	<div class="col-lg-3">
		<div class="well">
			<h3>Código de empleo</h3>
			<a onClick="javascript:codigo()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal código de empleo -->
			<div id="modal_codigo" class="modal fade" >
			    <!-- modal-content -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Código de empleo</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<p>El Código de Empleo es nuestra propuesta para que muchas personas nos conozcan. Si usted ve que este programa es bueno, ¿por qué no recomendarlo?</p>
			            			<p>Todos los afiliados tendrán el código de empleo, esta cera la célula que lo identificara en el área de los sorteos.</p>
			            			<p>Al invitador le daremos un sorteo similar al sorteo que recibe el referido.</p>
			            			<p>Los dos estarán en la misma célula. En caso de que la célula salga ganadora, se llamarán las dos personas: el afiliado titular y el invitador.</p>
			            			<p>Y de solo dos balotas, uno de ellos será ganador del premio mayor, el otro recibirá 5,000,000 de pesos colombianos como premio de consolación. Estos sorteos se harán en videos públicos vía web.</p>
			            			<p>Recuerde enviar el código de empleo de su invitador por el correo de su panel interno, así será referenciado en la célula de su invitado.</p>
			            			<p>Cada vez que use su Código de Empleo, sucederá lo mismo con su referido. Entre más invitados tengas, más posibilidades de ganar.</p>
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>

	<div class="col-lg-3">
		<div class="well">
			<h3>Medios de pago</h3>
			<a onClick="javascript:consignacion()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal consignaciones -->
			<div id="modal_consignacion" class="modal fade" >
			    <!-- modal-contejnt -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Consignaciones</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<p>Hay tres formas de consignar en la fundación.</p>
			            			<ol>
			            				<li>Al recibir un volante de invitación de una manera directa, diríjase al lugar que le indique el volante, haga su afiliación allí y luego acérquese al punto de atención, en esta área solo deberá consignar $84.000, una sola vez en la vida.</li>
			            				<li>Si no puede tener contacto personal, envié su aporte por el área de consignación, a la cooperativa en la cuenta que le asignaremos.</li>
			            				<li>3) Si su empresa, o una persona natural, desea hacer un aporte, de una manera diferente, claro que puede hacerlo.</li>
			            			</ol>
									<br>
			            			<p>Si usted ve que este programa es de beneficio para la comunidad y desea hacer un aporte personal o empresarial puede hacerlo a la cuenta que verá a continuación:</p>
			            			<p>Cuenta de ahorros # 13832618-6 la Cooperativa Confiar a nombre de Fundación Entreamigos de la FE</p>
				            	</div>

			            		<div class="form-group col-lg-12">
			            			<img src="<?php echo base_url().'img/recaudos.jpg'; ?>" width="480px">
			            		</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>

	<div class="col-lg-3">
		<div class="well">
			<h3>Sorteos</h3>
			<a onClick="javascript:sorteos()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal sorteos -->
			<div id="modal_sorteos" class="modal fade" >
			    <!-- modal-contejnt -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Sorteos</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<p>Es importante aclarar que en ningún momento, la fundación vende ningún sorteo. Todos los sorteos son gratuitos para los afiliados y para los asesores voluntarios a ASV.</p>
									<p>Cada vez que entre un afiliado, haremos un sorteo; si entran 100 afiliados haremos 100 sorteos ese mismo día.</p>
				            		<p>
	            						Cada sorteo que compraremos en la Fundación; para ustedes los afiliados se harán todos los días de la semana, los haremos así:
	            						<ul>
	            							<li>Lunes por CUNDINAMARCA</li>
	            							<li>Martes por CRUZ ROJA</li>
	            							<li>Miércoles por Baloto</li>
	            							<li>Jueves por BOGOTÁ</li>
	            							<li>Viernes por MEDELLÍN</li>
	            							<li>Sábados por Baloto</li>
	            							<li>Domingo por la paisita noche 2</li>
	            						</ul>
				            		</p>
				            		<p>Los sorteos se harán por 4 cifras sin series, exceptuando el Baloto.</p>
				            		<p>Los números serán colocados en el perfil de Facebook de la Fundación, todos los días, desde cualquier momento de el día, cuando son de 4 cifras. Cuando se trata de el Baloto, se colocarán 10 minutos antes de el sorteo para que no vayan a dañar los premios.</p>
				            		<p>Recuerde: el premio de el Baloto, sólo se entregará EL PREMIO MAYOR; no responderemos por las 3, las 4 o las 5 cifras.</p>
				            		<br>
				            		<p>En el momento en que la Fundación gané el premio mayor de cualquiera de los sorteos, les será enviado un correo a su e-mail, para notificarles el día de la entrega de el premio a uno de los afiliados que tenga el código de empleo y al ASV (Asesor Voluntario); habrán 2 balotas; el uno ganará el premio mayor, el otro se irá con $5.000.000 de premio de consolación.</p>
				            	</div>

				            	<div class="form-group col-lg-12">
			            			<img src="<?php echo base_url().'img/sorteos.jpg'; ?>" width="480px">
			            		</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>
	<div class="clear"></div>

	<div class="col-lg-3">
		<div class="well">
			<h3>La moneda de Don Rico</h3>
			<a onClick="javascript:moneda()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal moneda -->
			<div id="modal_moneda" class="modal fade" >
			    <!-- modal-content -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>La moneda de Don Rico</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
				            		<p>La moneda de Don Rico funcionará de la siguiente manera:</p>

				            		<ul>
				            			<li>
				            				<p><b>Litero:</b> es un personaje de la Fundación, que de varias maneras acercará a las personas con un volante de invitación, llamado patrocinio empresarial; éstos invitados se acercarán personalmente al punto de atención y harán su primer contacto personal con la Fundación. Si cumple con lo requerido en el volante, le entregarán su primer cuento físico (Impreso); y además le entregarán una chequera con 12 cheques (moneda oficial de Don Rico), para que compre mes a mes lo que no se puede comprar con la moneda tradicional.</p>
				            				<p>El afiliado en ésta área hará un aporte de $84.000 pesos una sola vez en la vida y se tomará como una donación a la Fundación, para apoyar la campaña.</p>
				            				<p>La fundación hará un convenio en algún almacén o supermercado, cercano y de fácil acceso a usted, donde usted pueda acercarse mes a mes y comprar con la chequera de Don Rico.</p>
				            				<p>Todas las personas que tenga la chequera de Don Rico, tendrán libros físicos y virtual.</p>
				            				<p>Los sorteos son sin ningún costo, hasta que la fundación exista.</p>
				            			</li>
				            		</ul>
				            	</div>
			            	</div>
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>

	<div class="col-lg-3">
		<div class="well">
			<h3>Donaciones</h3>
			<a onClick="javascript:donaciones()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal Donaciones -->
			<div id="modal_donaciones" class="modal fade" >
			    <!-- modal-contejnt -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Donaciones personales y empresariales</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<p>Cada donación empresarial o personal, nos acercará a lograr las metas que nos hemos trazado, no solo con los adultos, sino también con los niños.</p>
			            			<p>Queremos romper también ésta dificultad de poder llegar a los niños e instalarles su biblioteca privada en casa, física y también virtual.</p>
			            			<p>Con su apoyo lo haremos más fácil.</p>
			            			<p>Por ahora daremos inicio con los adultos, la problemática de la lectura que estamos viendo ahora y son las que las estadísticas nos muestran, que de cada 10 afiliados, sólo uno ésta leyendo en Colombia. Eso quiere decir que los niños se están quedando sin ejemplo, nuestro esfuerzo estará dirigido a que los adultos tengan un contacto con la lectura y además podamos darle un buen ejemplo a los niños.</p>
			            			<br>
			            			<p>Haga sus donaciones a la cuenta de ahorros # 13832618-6 la Cooperativa Confiar a nombre de Fundación Entreamigos de la FE</p>
			            			<p><b>Contáctenos: <i>bancobanbc@hotmail.com</i></b></p>
			            			<br>
			            			<p>Envíenos su inquietud para contactarlo con un asesor personalmente. Gracias por su apoyo</p>
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>

	<div class="col-lg-3">
		<div class="well">
			<h3>Cómo afiliarse desde cualquier lugar</h3>
			<a onClick="javascript:como_afiliarse()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal Afiliaciones -->
			<div id="modal_aliliaciones" class="modal fade" >
			    <!-- modal-contejnt -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Cómo afiliarse desde cualquier lugar</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<ul>
			            				<li>Si usted desea participar en éste programa, inscribiéndose desde cualquier lugar donde se encuentre, lo debe de hacer por la página web <b><i><a href="http://entreamigosdecolombia.org/index.php/registro" target="_blank">http://entreamigosdecolombia.org/afiliarse</a></i></b></li>
			            				<li>Tenga a la mano el número de consignación y la empresa por la cual la realizó, coloque sus datos personales y lo requerido por las casillas; transcurridos de 24 horas, daremos la autorización de su afiliación vía correo. En caso tal de un inconveniente el programa lo deja entrar hasta un panel interno, el cual le dará el código de afiliación y la clave; por allí encontrará un correo que nos podrá enviar cualquier inquietud que tenga para que no se vaya a perder su afiliación.</li>
			            				<li>Tendrá la biblioteca privada virtual.</li>
			            				<li>Participará en los sorteos, día a día, mes a mes, año tras año; hasta que la fundación exista.</li>
			            				<li>No tendrá que pagar mensualidades.</li>
			            				<li>Pondremos un libro (cuento) cada mes por un año.</li>
			            			</ul>
			            			<p>La sección sin referido es la única área, donde el afiliado no tendrá que compartir el premio con ningún asesor voluntario; ganará los premios al 100%. Los sorteos son donados por la fundación.</p>
			            			<p>Recuerde que en esta área la afiliación tiene un costo de $50.000 pesos colombianos, una sola vez en la vida, libres de envío.</p>
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>
</p>

<div class="col-lg-3">
		<div class="well">
			<h3>Préstamos</h3>
			<a onClick="javascript:prestamos()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal Misión -->
			<div id="modal_prestamos" class="modal fade" >
			    <!-- modal-content -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>Préstamos</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<p>Todo lo que tiene que ver con préstamos, está referido con la sección patrocinados; estos préstamos están incluidos dentro de la propuesta que lleva el volante de invitación.</p>
			          				<p>El que use el préstamo como medio de aceptación, deberá aportar inicialmente $24.000 pesos y tomará el préstamo de $60.000 el cual pagará con el sistema ATH CULTURAL que son $1.000 pesos diarios ahorrados en casa durante 60 días.</p>
			          				<p>Esto quiere decir, que el costo de afiliación es de $84.000 mil pesos colombianos una sola vez en la vida y se toman como una donación.</p>
			          				<p>La forma de aportar es la siguiente:</p>
			          					<ul>
			          						<li>Entre a <b><i><a href="http://entreamigosdecolombia.org/index.php" target="_blank">http://entreamigosdecolombia.org</a></i></b> busque el botón de donación, y seleccione el aporte de $24.000 pesos, el programa le dará el código de pago.  </li>
			            					<li>Diríjase a un punto de pago de baloto en cualquier parte del País, y 			realice su aporte.</li>
			            					<li>Cuando vaya a cancelar, realice el mismo ejercicio, buscando la sección 		cancelación, cancelando los 60.000 pesos y en ese mismo momento iniciara la 	participación de los sorteos, hasta que la fundación exista.</li>
			            				</ul>
			            			<p>Le será enviado el código de empleo en 48 horas, así podrá invitar a un 			amigo cuando lo desee.</p>
			            				
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>
	<div class="clear"></div>

	<div class="col-lg-3">
		<div class="well">
			<h3>System Three</h3>
			<a onClick="javascript:system_three()" class="btn btn-primary btn-lg">Ver más &raquo;</a>

			<!-- Modal System three -->
			<div id="modal_system_three" class="modal fade" >
			    <!-- modal-contejnt -->
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 id="titulo_mensaje" class="modal-title"><center><b>System Three</b></center></h4>
			            </div>
			            <div class="modal-body">
			            	<div class="row">
			            		<div class="form-group col-lg-12">
			            			<ul>
			            			<p><b>SYSTEMTHREE, ES UN PROGRAMA DE TRES CONTACTOS.</b></p>
			            				<li>EJ: Cuando un titular invita a dos amigos al programa ya es un systemthree.</li>
			            				<li>Esta persona tendrá un sorteo adicional  a los sorteos diarios que tiene todo afiliado.</li>
			            				<li>También puede participar en el programa, la persona que entre como afiliado, sin usar el préstamo, pagando el 100% del aporte total o sea 84.000 una sola vez en la vida para la fundación es muy importante su ayuda, además, es conveniente que no se quede por fuera de este sorteo.</li>
			            				<li>El sorteo será de 70.000.000 setenta millones de pesos diarios, hasta que la fundación exista.</li>
			            				<li>El asesor voluntario ganara $5'000.000 cinco millones de pesos, por haber invitado al afiliado.</li>
			            				<li> El sorteo se hará así:<ul></ul>
			            				Todos los días la fundación hará un sorteo de cuatro cifras sin serie, al caer el número, la fundación convocará a los afiliados y será sorteado entre uno de los afiliados , libres de impuestos. ¡podría ser usted!.   </li>
			            			</ul>
				            	</div>
			            	</div>
			            </div>

			            <div class="modal-footer">
			                <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>
</p>

<script type="text/javascript">

	function sorteos_diarios(){
		// Se abre la ventana
		$('#cont_sorteos_diarios').load('<?php echo site_url("bienvenido/sorteos");  ?>');
    	$('#modal_sorteos_diarios').modal('show');
	}

	function sorteos_baloto(){
		// Se abre la ventana
		$('#cont_sorteos_baloto').load('<?php echo site_url("bienvenido/sorteos_baloto");  ?>');
    	$('#modal_sorteos_baloto').modal('show');
	}

	function sorteos_system(){
		// Se abre la ventana
		$('#cont_sorteos_system').load('<?php echo site_url("bienvenido/sorteos_system");  ?>');
    	$('#modal_sorteos_system').modal('show');
	}

	function mision(){
		// Se abre la ventana
    	$('#modal_mision').modal('show');
	}

	function donaciones(){
		// Se abre la ventana
    	$('#modal_donaciones').modal('show');
	}

	function como_afiliarse(){
		// Se abre la ventana
    	$('#modal_aliliaciones').modal('show');
	}

	function prestamos(){
		// Se abre la ventana
    	$('#modal_prestamos').modal('show');
	}

	function system_three(){
		// Se abre la ventana
    	$('#modal_system_three').modal('show');
	}

	function moneda(){
		// Se abre la ventana
    	$('#modal_moneda').modal('show');
	}

	function consignacion(){
		// Se abre la ventana
    	$('#modal_consignacion').modal('show');
	}

	function sorteos(){
		// Se abre la ventana
    	$('#modal_sorteos').modal('show');
	}

	function vision(){
		// Se abre la ventana
    	$('#modal_vision').modal('show');
	}

	function libro_poesia(){
		// Se abre la ventana
    	$('#modal_poesia').modal('show');
	}

	function codigo(){
		// Se abre la ventana
    	$('#modal_codigo').modal('show');
	}

	function biblio_privada(){
		// Se abre la ventana
    	$('#modal_biblio_privada').modal('show');
	}

	function club(){
		// Se abre la ventana
    	$('#modal_club').modal('show');
	}

	function costos(){
		// Se abre la ventana
    	$('#modal_costos').modal('show');
	}

	$(document).ready(function(){
		// Se activa el carrusel
		$('#carousel-example-generic').carousel();

		// Biblioteca privada
		$("#btn_biblio_privada").on("click", function(){
			console.log('ok')
			// Se abre la ventana
        	$('#modal_biblio_privada').modal('show');

			return false;
		});
	});
</script>