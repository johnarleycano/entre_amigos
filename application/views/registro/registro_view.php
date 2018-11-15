<input type="hidden" id="id_tipo_usuario" value="1" value="">
<input type="hidden" id="tipo_usuario" value="sin" value="">

<div style="font-size: 1.2em">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home" id="opcion1" data-numero="1" data-tipo="sin">Sin referido</a></li>
        <li><a data-toggle="tab" href="#menu1" id="opcion2" data-numero="2" data-tipo="empresarial">Afiliados empresariales</a></li>
        <li><a data-toggle="tab" href="#menu2" id="opcion3" data-numero="3" data-tipo="referido">Mi referido</a></li>
        <!-- <li><a data-toggle="tab" href="#menu3" id="opcion4" data-numero="4" data-tipo="asv">ASV (Asesor voluntario)</a></li> -->
        <li><a data-toggle="tab" href="#menu4" id="opcion5" data-numero="5" data-tipo="regalo">Patrocinados</a></li>
        <!-- <li><a data-toggle="tab" href="#menu5" id="opcion6" data-numero="6" data-tipo="prestamos">Préstamos</a></li> -->
    </ul>

    <div class="tab-content">
        <p>
            <div id="mensajes"></div>
            <div class="well row">
                <div class="col-lg-4">
                    <label for="input_nombre" class="control-label">Nombre completo *</label>
                    <input type="text" class="form-control" id="input_nombre" placeholder="Escriba su nombre completo" autofocus>
                </div>
    
                <div class="col-lg-4">
                    <label for="input_cedula" class="control-label">Cédula *</label>
                    <input type="text" class="form-control" id="input_cedula" placeholder="Digite sólo números">
                </div>

                <div class="col-lg-4">
                    <label for="departamento" class="control-label">Departamento *</label>
                    <select class="form-control" id="departamento">
                        <option value="">Seleccione...</option>
                                            
                        <!-- Se recorren los tipos de áreas -->
                        <?php foreach ($this->administracion_model->cargar_departamentos() as $departamento) { ?>
                            <option value="<?php echo $departamento->Pk_Id; ?>"><?php echo $departamento->Nombre; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-lg-4">
                    <label for="municipio" class="control-label">Municipio *</label>
                    <select class="form-control" id="municipio"></select>
                </div>

                <div class="col-lg-4">
                    <label for="input_email" class="control-label">Correo electrónico *</label>
                    <input type="text" class="form-control" id="input_email" placeholder="Escriba el correo electrónico">
                </div>

                <div class="col-lg-4">
                    <label for="input_telefono" class="control-label">Teléfono*</label>
                    <input type="text" class="form-control" id="input_telefono" placeholder="Escriba el número telefónico">
                </div>

                <div class="col-lg-4">
                    <label for="input_direccion" class="control-label">Dirección</label>
                    <input type="text" class="form-control" id="input_direccion" placeholder="Digite su dirección">
                </div>


                <div class="col-lg-4">
                    <label for="input_password1" class="control-label">Escriba la contraseña preferida *</label><br>
                    <input type="password" class="form-control" id="input_password1" placeholder="Escriba su contraseña">
                    <!-- <span style="font-size: 14px;">Todos los datos se los enviaremos al correo electrónico</span> -->
                </div>

                <div class="col-lg-4">
                    <label for="input_password2" class="control-label">Repita su contraseña *</label><br>
                    <input type="password" class="form-control" id="input_password2" placeholder="Repita su contraseña">
                </div>
                <div class="clear"></div>
            </div>
        </p>

        <div id="home" class="tab-pane fade in active">
        <!-- <div id="home" class="tab-pane fade"> -->
            <p>
                <div class="well row">
                    <div class="col-lg-6">
                        <label for="consignacion1" class="control-label">Número consignación *</label>
                        <input type="text" class="form-control" id="consignacion1" placeholder="Escriba el número de consignación">
                    </div>

                    <div class="col-lg-6">
                        <label for="empresa1" class="control-label">Empresa por la que consignó *</label>
                        <input type="text" class="form-control" id="empresa1" placeholder="Escriba la emprea por la que consignó">
                    </div>
                </div>
            </p>

            <p>
                <div class="form-group col-lg-6">
                    <h3><center>Donante sin referido</center></h3>

                    <ul>
                        <li>tendrá derecho a la biblioteca completa,  virtual en su panel interno, la podrá leer desde cualquier lugar  del mundo.</li>
                        <li>Tendrá derecho a los 365 sorteos, a partir de su afiliación y de llegar a salir ganadora su célula de código de empleo, el  100% de lo ganado cera para usted no tendrá que compartir el premio con ninguno.</li>
                        <li>Recuerde, siempre tenga a la mano el código de afiliación y su clave, en caso de olvidarlos, se lo enviamos al correo con el cual será registrado.</li>
                        <li>Tendrá un panel interno con su biblioteca, código de empleo para invitar a un amigo y correo interno.</li>
                    </ul>
                </div>

                <div class="form-group col-lg-6">
                    <h3><center>Información de sorteos y puntos de pago</center></h3>

                    <img src="<?php echo base_url().'img/recaudos.jpg'; ?>" width="480px" style="vertical-align: middle;">
                    <img src="<?php echo base_url().'img/sorteos.jpg'; ?>" width="480px" style="vertical-align: middle;">

                    <p class="text-center">
                        Fundación Entre Amigos de la Fe<br>
                        Cuenta de ahorros # 13832618-6 <br>
                        Cooperativa Confiar
                    </p>
                </div>
            </p>
        </div>

        <div id="menu1" class="tab-pane fade">
            <p>
                <div class="well row">
                    <div class="col-lg-6">
                        <label for="empresa2" class="control-label">Empresa por la que consignó *</label>
                        <input type="text" class="form-control" id="empresa2" placeholder="Escriba la emprea por la que consignó">
                    </div>

                    <div class="col-lg-6">
                        <label for="codigo_empresa2" class="control-label">Código de la empresa *</label>
                        <input type="text" class="form-control" id="codigo_empresa2" placeholder="Obligatorio">
                    </div>
                </div>
            </p>

            <p>
                <div class="form-group col-lg-6">
                    <h3><center>Afiliados empresariales</center></h3>

                    <ul>
                        <li>Tendrá derecho a la biblioteca  (No 1) digitada en papel.</li>
                        <li>Al entregarle el código de empleo, el cual se lo enviaremos a su correo personal, colóquelo en el espacio vacío del chequera  luego diríjase a la dirección asignada reclame su primer libro (cuento).</li>
                        <li>También la chequera de don Rico para que compre mes a mes, sus bellas historias y haga parte de nuestro Club Entreamigos Lec.</li>
                        <li>Condición: Cuando done el cuento leído a la fundación, se le activara el cheque, para que compre su cuento siguiente, y asi por todo el año.</li>
                        <li>Recuerde, siempre tenga a la mano el código de afiliación y su clave, en caso de olvidarlos, se lo enviamos al correo con el cual será registrado.</li>
                        <li>Tendrá un panel interno con su biblioteca, código de empleo para invitar a un amigo y correo interno.</li>
                        <li>Los sorteos de Afiliados empresariales funcionan así. Al salir ganadora la célula del  afiliado se invitaran otros dos participantes, abran tres balotas una para cada uno.</li>
                        <li>El ganador tendrá el premio mayor, los otros dos se repartirán así. El segundo ganador, ganara 3ooo,ooo tres millones de pesos y el otro ganara 2000.000 pesos colombianos.</li>
                    </ul>
                </div>

                <div class="form-group col-lg-6">
                    <h3><center>Información de sorteos y puntos de pago</center></h3>

                    <img src="<?php echo base_url().'img/recaudos.jpg'; ?>" width="480px" style="vertical-align: middle;">
                    <img src="<?php echo base_url().'img/sorteos.jpg'; ?>" width="480px" style="vertical-align: middle;">

                    <p class="text-center">
                        Fundación Entre Amigos de la Fe<br>
                        Cuenta de ahorros # 13832618-6 <br>
                        Cooperativa Confiar
                    </p>
                </div>
            </p>
        </div>

        <div id="menu2" class="tab-pane fade">
            <p>
                <div class="well row">
                    <div class="col-lg-4">
                        <label for="ce_invitador3" class="control-label">Código de empleo del invitador *</label>
                        <input type="text" class="form-control" id="ce_invitador3" placeholder="Escriba el número de consignación">
                    </div>

                    <div class="col-lg-4">
                        <label for="consignacion3" class="control-label">Número consignación *</label>
                        <input type="text" class="form-control" id="consignacion3" placeholder="Escriba el número de consignación">
                    </div>

                    <div class="col-lg-4">
                        <label for="empresa3" class="control-label">Empresa por la que consignó *</label>
                        <input type="text" class="form-control" id="empresa3" placeholder="Escriba la emprea por la que consignó">
                    </div>
                </div>
            </p>

            <p>
                <div class="form-group col-lg-6">
                    <h3><center>Mi referido</center></h3>

                    <ul>
                        <li>Pídale a su invitador su   No de Código de  Empleo.</li>
                        <li>Usted participara dentro de la célula del código de empleo de su invitador para los sorteos.</li>
                        <li>Abran dos balotas, la una ganara el premio mayor y la otra tendrá 5000,000 cinco millones de pesos.     (Colombianos)  premio  de consolación.</li>
                        <li>Es muy posible que por no estar cerca a nuestros puntos de atención personalizados, no podamos llegar a ustedes con los libros digitados en papel. </li>
                        <li>Los libros (cuentos) estarán en su panel interno, entre cada vez que quiera con su código de afiliación y su clave personal y los podrá leer desde el lugar donde usted se encuentre.</li>
                        <li>RECUERDE USTED TAMBIEN PUEDE INVITAR A UN AMIGO CON SU NUMERO DE CODIGO DE EMPLEO Y PARTICIPARA EN LA CELULA DE SU INVITADO CON LOS MISMOS DERECHOS DE GANAR.</li>
                    </ul>
                </div>

                <div class="form-group col-lg-6">
                    <h3><center>Información de sorteos y puntos de pago</center></h3>

                    <img src="<?php echo base_url().'img/recaudos.jpg'; ?>" width="480px" style="vertical-align: middle;">
                    <img src="<?php echo base_url().'img/sorteos.jpg'; ?>" width="480px" style="vertical-align: middle;">

                    <p class="text-center">
                        Fundación Entre Amigos de la Fe<br>
                        Cuenta de ahorros # 13832618-6 <br>
                        Cooperativa Confiar
                    </p>
                </div>
            </p>
        </div>

        <div id="menu3" class="tab-pane fade">
            <p>
                <div class="well row">
                    <div class="col-lg-3">
                        <label for="cheque4" class="control-label">Número de cheque *</label>
                        <input type="text" class="form-control" id="cheque4" placeholder="Escriba el número de consignación">
                    </div>

                    <div class="col-lg-3">
                        <label for="input_nombre4" class="control-label" class="font-size: 0.7em">Nombre invitador *</label>
                        <input type="text" class="form-control" id="input_nombre4" placeholder="Obligatorio" >
                    </div>

                    <div class="col-lg-3">
                        <label for="cedula_invitador4" class="control-label">Cédula del invitador *</label>
                        <input type="text" class="form-control" id="cedula_invitador4" placeholder="Escriba la emprea por la que consignó">
                    </div>

                    <div class="col-lg-3">
                        <label for="telefono_invitador4" class="control-label">Teléfono del invitador *</label>
                        <input type="text" class="form-control" id="telefono_invitador4" placeholder="Obligatorio">
                    </div>
                </div>
            </p>

            <p>
                <div class="form-group col-lg-6">
                    <h3><center>ASV (Asesor Voluntario)</center></h3>

                    <ul>
                        <li>Al confirmar su aporte en la consignación espere de 1 a 48 horas, para enviarle su   No de código de empleo.</li>
                        <li>Es muy posible que por no estar cerca a nuestros puntos de atención personalizados, no podamos llegar a ustedes con los libros digitados en papel.</li>
                        <li>Los libros (cuentos) estarán en su panel interno, entre cada vez que quiera con su código de afiliación y su clave personal y los podrá leer desde el lugar donde usted se encuentre.</li>
                        <li>Usted podrá participar en los sorteos en una célula con su invitador los dos tendrán el mismo derecho habrán dos balotas, el uno ganara el premio mayor, el otro recibirá 5,000,000 cinco millones de pesos colombianos como premio de consolación.</li>
                    </ul>
                </div>

                <div class="form-group col-lg-6">
                    <h3><center>Información de sorteos y puntos de pago</center></h3>

                    <img src="<?php echo base_url().'img/recaudos.jpg'; ?>" width="480px" style="vertical-align: middle;">
                    <img src="<?php echo base_url().'img/sorteos.jpg'; ?>" width="480px" style="vertical-align: middle;">
                </div>
            </p>
        </div>

        <div id="menu4" class="tab-pane fade">
            <p>
                <div class="well row">
                    <div class="col-lg-6">
                        <label for="fecha_prestamo" class="control-label">Fecha de préstamo:</label>
                        <input type="date" id="fecha_prestamo" class="form-control" name="fecha_prestamo">
                    </div>
                
                    <div class="col-lg-6">
                        <label for="es_prestamo" class="control-label"></label><br>
                        <!-- <input type="date" id="fecha_prestamo" class="form-control" name="fecha_prestamo"> -->
                        <input type="checkbox" id="es_prestamo"> Marcar sólo si hizo el préstamo
                    </div>
                    <div class="clear"></div>

                    <div class="col-lg-3">
                        <label for="patrocinio5" class="control-label">Número patrocinio *</label>
                        <input type="text" class="form-control" id="patrocinio5" >
                    </div>

                    <div class="col-lg-3">
                        <label for="biblioteca5" class="control-label">Número biblioteca *</label>
                        <input type="text" class="form-control" id="biblioteca5" >
                    </div>

                    <div class="col-lg-3">
                        <label for="consignacion5" class="control-label">Número consignación *</label>
                        <input type="text" class="form-control" id="consignacion5" >
                    </div>

                    <div class="col-lg-3">
                        <label for="empresa5" class="control-label">Empresa *</label>
                        <input type="text" class="form-control" id="empresa5" placeholder="Por la que consignó">
                    </div>

                    <div class="clear"></div>

                    <div class="col-lg-3">
                        <label for="asesor5" class="control-label">Nombre asesor *</label>
                        <input type="text" class="form-control" id="asesor5" >
                    </div>

                    <div class="col-lg-3">
                        <label for="cedula5" class="control-label">Cedula asesor *</label>
                        <input type="text" class="form-control" id="cedula5" >
                    </div>
                    
                    <div class="col-lg-3">
                        <label for="telefono5" class="control-label">Teléfono asesor </label>
                        <input type="text" class="form-control" id="telefono5" >
                    </div>

                    <div class="col-lg-3">
                        <label for="celular5" class="control-label">Celular asesor *</label>
                        <input type="text" class="form-control" id="celular5" >
                    </div>
                    <div class="clear"></div>
                </div>
            </p>

            <p>
                <div class="form-group col-lg-6">
                    <h3><center>Patrocinador</center></h3>

                    <ul>
                        <li>Al autorizar su patrocinio, se enviará el código de empleo al correo electrónico. Ponerlo en el espacio vacío del volante y diríjase a reclamar su primer libro y la chequera de don Rico.</li>
                    </ul>
                </div>

                <div class="form-group col-lg-6">
                    <h3><center>Información de sorteos y puntos de pago</center></h3>

                    <img src="<?php echo base_url().'img/recaudos.jpg'; ?>" width="480px" style="vertical-align: middle;">
                    <img src="<?php echo base_url().'img/sorteos.jpg'; ?>" width="480px" style="vertical-align: middle;">

                    <p class="text-center">
                        Fundación Entre Amigos de la Fe<br>
                        Cuenta de ahorros # 13832618-6 <br>
                        Cooperativa Confiar
                    </p>
                </div>
            </p>
        </div>

        <div id="menu5" class="tab-pane fade">
            <p>
                <div class="well row">
                    <div class="col-lg-3">
                        <label for="cheque6" class="control-label" class="font-size: 0.7em">Número <br> de cheque *</label>
                        <input type="text" class="form-control" id="cheque6" placeholder="Escriba el número de cheque">
                    </div>

                    <div class="col-lg-3">
                        <label for="input_nombre6" class="control-label" class="font-size: 0.7em">Nombre invitador o empresa*</label>
                        <input type="text" class="form-control" id="input_nombre6" placeholder="Obligatorio" >
                    </div>

                    <div class="col-lg-3">
                        <label for="cedula_invitador6" class="control-label" class="font-size: 0.7em">Cédula invitador o código empresa *</label>
                        <input type="text" class="form-control" id="cedula_invitador6" placeholder="Escriba la cédula del invitador">
                    </div>

                    <div class="col-lg-3">
                        <label for="telefono_invitador6" class="control-label" class="font-size: 0.7em">Teléfono<br> del invitador *</label>
                        <input type="text" class="form-control" id="telefono_invitador6" placeholder="Obligatorio">
                    </div>
                </div>
            </p>

            <p>
                <div class="form-group col-lg-6">
                    <h3><center>Préstamos</center></h3>
                    <ul>
                        <li>Usted recibirá un cheque de préstamo en un lugar cercano a su vivienda, en este lugar solo abran 10 préstamos.</li>
                        <li>Entre a la página e inscríbase, coloque sus datos personales y luego que el programa le dé el código de afiliación, colóquelo en el espacio vacío del cheque, le llamaremos para autorizar su préstamo y le daremos la bienvenida al club Entreamigos Lec. de la Fundación Entreamigos De no contactarlo por teléfono le enviaremos un correo por email.</li>
                        <li>Este préstamo es inmediato, sin impedimentos, sin interés y sin fiador y en caso de tener un inconveniente para pagarlo, no lo enviaremos a centrales de riesgo, nuestro deseo es apoyarlo y no crearle inconvenientes, como lo hacen los prestamos tradicionales.</li>
                        <li>Después de ser autorizado,  diríjase al lugar de la dirección que se encuentra en el cheque, reclame su primer libro (cuento para adulto) y recibirá la chequera de don rico con los cheques para todo el año. La entrega de los libros,  ni las chequeras tienen ningún costo.</li>
                        <li>Si usted paga el préstamo antes de 10 días, entrara al programa especial de los sorteos. De su célula salir ganadora,  el premio asignado cera para usted, al 100%, no tendrá que ponerlo en riesgo, como en los otros casos donde se participan con dos o tres personas más. De pagar su préstamo después de los diez días, usted participara con su invitador, abran dos balotas el uno ganara el premio mayor y el otro tendrá 5.000.000 como premio de consolación.</li>
                        <li>Recuerde: Estos sorteos son donados por don rico y no tienen ningún costo para usted, y se activan en el momento en que usted pague su préstamo para la afiliación, el cual se recibe como una donación a la fundación una sola vez en la vida.</li>
                        <li>Don Rico le dona los sorteos en esta área, a las personas que se hacen su aporte de pago del préstamo antes delos 60 días, de ahí en adelante la persona podrá estar afiliada, cuenta con los libros, pero no con los sorteos.</li>
                    </ul>
                </div>

                <div class="form-group col-lg-6">
                    <h3><center>Información de sorteos y puntos de pago</center></h3>

                    <img src="<?php echo base_url().'img/recaudos.jpg'; ?>" width="480px" style="vertical-align: middle;">
                    <img src="<?php echo base_url().'img/sorteos.jpg'; ?>" width="480px" style="vertical-align: middle;">
                </div>
            </p>
        </div>
    </div>

    <button type="button" id="guardar_registro" class="btn btn-success btn-block">Guardar registro</button><br>
</div>

<script type="text/javascript">
    /**
     * Autorizar
     */
    function autorizar(id_usuario){
        // // Se ejecuta el ajax que genera el Código de Empleo
        // codigo_empleo = ajax("<?php // echo site_url('registro/generar_codigo_empleo'); ?>", {'datos': {}}, 'html');

        // // Se le ingresa el código de empleo al usuario
        // actualizar = ajax("<?php // echo site_url('usuario/actualizar'); ?>", {'tipo': 'codigo_empleo', 'id_usuario': id_usuario, 'codigo_empleo': codigo_empleo}, 'HTML');

        // //Si no se generó el código
        // if (codigo_empleo == 'false') {
        //     //Mensaje de error
        //     mostrar_error($("#mensajes"), "No se ha podido generar el código. Intente nuevamente por favor.");

        //     // Se detiene el formulario
        //     return false;
        // }else{
        //     // Se traen todos los datos del usuario
        //     usuario = ajax("<?php // echo site_url('usuario/consultar_datos'); ?>", {'id_usuario': id_usuario}, 'JSON');

        //     //Declaramos un arreglo con los datos a enviar por correo
        //     datos_email = {
        //         'nombre': usuario.Nombre,
        //         'codigo_empleo': usuario.Codigo_Empleo,
        //         'destinatario': usuario.Email
        //     }//Fin datos email
        //     // console.log(datos_email)
                        
        //     //Se envía el correo electrónico informando que se le dio código de empleo
        //     email = ajax("<?php // echo site_url('email/enviar'); ?>", {'datos': datos_email, 'tipo': 'autorizacion'}, 'html');

        //     //Se recara la tabla
        //     $("#cont_tabla").load("<?php // echo site_url('usuario/cargar_interfaz'); ?>", {'tipo': 'todos'});

        //     //Se muestra el mensaje de exito
        //     // mostrar_exito($("#mensajes"), "Le ha generado el código de empleo " + codigo_empleo + " correctamente. Se le ha enviado un correo electrónico notificándole.");
        // } // if codigo de empleo
    } // autorizar

    $(document).ready(function(){
        // // Inicialización de la tabla
        // $('#tabla').dataTable( {
        //     "bProcessing": true,
        // }); // Tabla
        
        // // Cuando cambie la opción de cheque
        // $('input:radio[name=metodo_afiliacion]').change(function () {
        //     // Se recogen variables
        //     var tipo_cheque = $(this).val();

        //     // Si es cheque pagado o prestado
        //     if (tipo_cheque == "cheque_pagado") {
        //         // Se activa la interfaz
        //         $("#cont_cheques").show("slow");
        //         $("#cont_pagos").hide("slow");
        //     }else{
        //         // Se oculta la interfaz
        //         $("#cont_cheques").hide("slow");
        //         $("#cont_pagos").show("slow");
        //     }

        //     // Si es patrocinador
        //     // if (tipo_cheque == "patrocinador") {
        //     //     $("#nombre_patrocinio").text("patrocinador");
        //     //     $("#cont_cheques").show("slow");
        //     // }else{
        //     //     $("#nombre_patrocinio").text("asesor");
        //     // }
        // }); // change
        
        // Evento change
        $("#departamento").on("change", function(){
            // Se limpia el select
            $("#municipio").html('').append("<option value=''>Seleccione...</option>");

            // Si se selecciona un valor
            if($(this).val() != ""){
                // Se consultan los municipios
                municipios = ajax("<?php echo site_url('administracion/cargar_municipios'); ?>", {"id_departamento": $(this).val()}, 'JSON');
                // console.log(municipios);

                // Si hay municipios
                if (municipios.length > 0) {
                    //Se recorren las municipios
                    $.each(municipios, function(key, val){
                        //Se agrega cada entidad al select
                        $("#municipio").append("<option value='" + val.Pk_Id + "'>" + val.Nombre + "</option>");
                    })//Fin each
                } // if
            } // if
        }); // clic

        $("a[id^='opcion']").on("click", function(){
            // Se agrega el id y el tipo de usuario
            $("#id_tipo_usuario").val($(this).attr("data-numero"));
            $("#tipo_usuario").val($(this).attr("data-tipo"));
        }); // clic
    
        //Al presionar botón registro con cheque
        $("#guardar_registro").on("click", function(){
            //Declaración de variables
            var nombre = $("#input_nombre");    
            var cedula = $("#input_cedula");
            var email = $("#input_email");
            var password1 = $("#input_password1");
            var password2 = $("#input_password2");
            var telefono = $("#input_telefono");
            var direccion = $("#input_direccion");
            var id_municipio = $("#municipio");
            var consignacion1 = $("#consignacion1");
            var empresa1 = $("#empresa1");
            var empresa2 = $("#empresa2");
            var codigo_empresa2 = $("#codigo_empresa2");
            var ce_invitador3 = $("#ce_invitador3");
            var consignacion3 = $("#consignacion3");
            var empresa3 = $("#empresa3");
            var cheque4 = $("#cheque4");
            var nombre_invitador4 = $("#input_nombre4");
            var cedula_invitador4 = $("#cedula_invitador4");
            var telefono_invitador4 = $("#telefono_invitador4");
            var ce_invitador5 = $("#ce_invitador5");

            var patrocinio5 = $("#patrocinio5");
            var cupo5 = $("#cupo5");
            var biblioteca5 = $("#biblioteca5");
            var afiliado5 = $("#afiliado5");
            var consignacion5 = $("#consignacion5");
            var empresa5 = $("#empresa5");
            var asesor5 = $("#asesor5");
            var cedula5 = $("#cedula5");
            var telefono5 = $("#telefono5");
            var celular5 = $("#celular5");

            var cheque6 = $("#cheque6");
            var nombre6 = $("#input_nombre6");    
            var ce_invitador6 = $("#ce_invitador6");
            var telefono_invitador6 = $("#telefono_invitador6");
            var cedula_invitador6 = $("#cedula_invitador6");
            // var tipo_regalo5 = $("#tipo_regalo5");
            var fecha_consignacion = $("#fecha_consignacion");
            var id_invitador;
            var invitador;

            // Datos del cheque
            var tipo_cheque = $('input:radio[name=metodo_afiliacion]:checked');
            var codigo_cheque = $("#input_codigo_cheque");
            var clave_cheque = $("#input_clave_cheque");

            //Campos obligatorios a validar
            var campos_vacios = new Array(
                nombre.val(), 
                cedula.val(), 
                email.val(),
                password1.val(),
                password2.val(),
                telefono.val(),
                id_municipio.val()
            );
            // console.log(campos_vacios);
            
            // si no supera la validación
            if (!validar_campos_vacios(campos_vacios)) {
                //Se muestra el error
                mostrar_error($("#mensajes"), "Por favor diligencie todos los campos marcados con *");

                return false;
            }
            
            // Si no coincide los cheques
            if (!validar_claves(password1, password2)) {
                //Se muestra el error
                mostrar_error($("#mensajes"), "Las contraseñas no coinciden. Por favor verifique.");

                return false;
            }

            validar_cedula = ajax("<?php echo site_url('registro/validar_cedula'); ?>", {'cedula': cedula.val()}, 'html');

            // Si ya existe la cédula
            if (validar_cedula) {
                //Se muestra el error
                alert("El número de cédula ya se encuentra registrado. Verifique y vuelva a intentarlo");

                return false;
            }

            //Obtenemos un código de afiliación
            codigo_afiliacion = ajax("<?php echo site_url('registro/generar_codigo_afiliacion'); ?>", {'datos': {}}, 'html');

            //Si no se generó el código
            if (codigo_afiliacion == 'false') {
                //Mensaje de error
                mostrar_error($("#mensajes"), "No se ha podido guardar su afiliación. Intente nuevamente por favor.");

                // Se detiene el formulario
                return false;
            }

            if ($("#es_prestamo").is(":checked")) {
                es_prestamo = 1;
            } else {
                es_prestamo = 0;
            }

            //Datos a guardar
            datos = {
                'Cedula': cedula.val(),
                'Codigo_Afiliacion': codigo_afiliacion,
                'Codigo_Empleo': 'Pendiente',
                'Direccion': direccion.val(),
                'Email': email.val(),
                'Fecha_Registro': "<?php echo date('Y-m-d') ?>",
                'Nombre': nombre.val(),
                'Fk_Id_Municipio': id_municipio.val(),
                'Password': password1.val(),
                'Telefono': telefono.val(),
                'Fecha_Prestamo': $("#fecha_prestamo").val(),
                'Es_Prestamo': es_prestamo,
            }; // datos

            // Dependiendo del tipo
            switch($("#id_tipo_usuario").val()) {
                case "1":
                    //Campos obligatorios a validar
                    var campos_pago_vacios = new Array(
                        consignacion1.val(), 
                        empresa1.val()
                    );

                    datos["Tipo_Afiliacion"] = 1;
                    datos["Consignacion"] = consignacion1.val();
                    datos["Empresa"] = empresa1.val();
                break;
                    
                case "2":
                    //Campos obligatorios a validar
                    var campos_pago_vacios = new Array(
                        empresa2.val(),
                        codigo_empresa2.val()
                    );

                    datos["Tipo_Afiliacion"] = 2;
                    datos["Nombre_Empresa"] = empresa2.val();
                    datos["Empresa"] = codigo_empresa2.val();
                break;

                case "3":
                    //Campos obligatorios a validar
                    var campos_pago_vacios = new Array(
                        ce_invitador3.val(), 
                        consignacion3.val(),
                        empresa3.val()
                    );

                    // Se consulta si existe el invitador
                    invitador = ajax("<?php echo site_url('usuario/consultar_invitador'); ?>", {'codigo_empleo': ce_invitador3.val()}, 'json');
                    
                    // Si trae algo
                    if(invitador.length == 0){
                        //Se muestra el error
                        mostrar_error($("#mensajes"), "El usuario con el código de empleo <b>" + ce_invitador3.val() + "</b> no exise.");

                        return false;
                    }else{
                        datos["Fk_Id_Usuario_Invitador"] = invitador.Pk_Id_Usuario;
                    }

                    datos["Tipo_Afiliacion"] = 3;
                    datos["CE_Invitador"] = ce_invitador3.val();
                    datos["Consignacion"] = consignacion3.val();
                    datos["Empresa"] = empresa3.val();
                break;

                case "4":
                    //Campos obligatorios a validar
                    var campos_pago_vacios = new Array(
                        cheque4.val(), 
                        nombre_invitador4.val(),
                        cedula_invitador4.val(),
                        telefono_invitador4.val()
                    );

                    // Si el número de cheque no contiene la cadena ASV
                    if(cheque4.val().indexOf("ASV")){
                        //Se muestra el error
                        mostrar_error($("#mensajes"), "El número de cheque no cumple con las condiciones para el registro de Asesor Voluntario");

                        return false;
                    }

                    datos["Tipo_Afiliacion"] = 4;
                    datos["Cheque"] = cheque4.val();
                    datos["Nombre_Invitador"] = nombre_invitador4.val();
                    datos["Cedula_Invitador"] = cedula_invitador4.val();
                    datos["Telefono_Invitador"] = telefono_invitador4.val();
                break;

                case "5":
                    //Campos obligatorios a validar
                    var campos_pago_vacios = new Array(
                        patrocinio5.val(),
                        biblioteca5.val(),
                        consignacion5.val(),
                        empresa5.val(),
                        asesor5.val(),
                        cedula5.val(),
                        celular5.val()
                    );

                    // // Se consulta si existe el invitador
                    // invitador = ajax("<?php // echo site_url('usuario/consultar_invitador'); ?>", {'codigo_empleo': ce_invitador5.val()}, 'json');
                    
                    // // Si trae algo
                    // if(invitador.length == 0){
                    //     //Se muestra el error
                    //     mostrar_error($("#mensajes"), "El usuario con el código de empleo <b>" + ce_invitador5.val() + "</b> no exise.");

                    //     return false;
                    // }else{
                    //     datos["Fk_Id_Usuario_Invitador"] = invitador.Pk_Id_Usuario;
                    // }

                    datos["Tipo_Afiliacion"] = 5;
                    datos["Numero_Patrocinio"] = patrocinio5.val();
                    datos["Numero_Biblioteca"] = biblioteca5.val();
                    datos["Consignacion"] = consignacion5.val();
                    datos["Empresa"] = empresa5.val();
                    datos["Nombre_Asesor"] = asesor5.val();
                    datos["Cedula_Asesor"] = cedula5.val();
                    datos["Celular_Asesor"] = celular5.val();
                break;

                case "6":
                    //Campos obligatorios a validar
                    var campos_pago_vacios = new Array(
                        cheque6.val(), 
                        nombre6.val(),
                        cedula_invitador6.val(),
                        telefono_invitador6.val()
                    );
                    console.log(campos_pago_vacios);

                    // Si el número de cheque no contiene la cadena ASV
                    if(cheque6.val().indexOf("pst")){
                        //Se muestra el error
                        mostrar_error($("#mensajes"), "El número de cheque no cumple con las condiciones para el registro de Préstamos");

                        return false;
                    }

                    datos["Tipo_Afiliacion"] = 6;
                    datos["Cheque"] = cheque6.val();
                    datos["Cedula_Invitador"] = cedula_invitador6.val();
                    datos["Telefono_Invitador"] = telefono_invitador6.val();
                    datos["Nombre_Invitador"] = nombre6.val();
                break;
            }
                
            // si no supera la validación
            if (!validar_campos_vacios(campos_pago_vacios)) {
                //Se muestra el error
                mostrar_error($("#mensajes"), "Falta diligenciar los datos del pago. Por favor ingrese todos los datos *");

                return false;
            }

            //Teniendo todo listo, procedemos a guardar el usuario
            usuario = ajax("<?php echo site_url('registro/guardar'); ?>", {'datos': datos}, 'html');
            // console.log(usuario)

            //Si se guarda correctamente
            if(usuario != 'false'){
                if (invitador) {
                    // Se actualiza el id de usuario invitador
                    actualizar = ajax("<?php echo site_url('usuario/actualizar'); ?>", {'tipo': 'invitador', 'id_usuario': usuario.Pk_Id_Usuario}, 'html');
                };

                //Declaramos un arreglo con los datos a enviar por correo
                datos_email = {
                    'nombre': nombre.val(),
                    'codigo_afiliacion': codigo_afiliacion,
                    'password': password1.val(),
                    'destinatario': email.val()
                }//Fin datos email
                //console.log(datos_email)

                //Se envía el correo electrónico de bienvenida
                email = ajax("<?php echo site_url('email/enviar'); ?>", {'datos': datos_email, 'tipo': 'bienvenido'}, 'html');

                // Se inactiva el botón
                $("#guardar_registro").attr('disabled', true);

                //Se muestra el mensaje de exito
                mostrar_exito($("#mensajes"), "¡Se ha afiliado correctamente! Le hemos enviado a su correo electrónico el código de afiliación y la contraseña con la que ingresará a partir de ahora. <h1>Su código de afiliación es " + codigo_afiliacion + "</h1>");
            }// if usuario guardado
        });//Fin guardar
    });//Fin document.ready
</script>