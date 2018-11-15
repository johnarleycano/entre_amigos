<!-- Aviso de eliminación -->
<div id="modal_eliminar" class="modal fade" >
    <!-- modal-content -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="titulo_mensaje" class="modal-title">Aviso</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input id="id_usuario" type="hidden">

                    <p>Está seguro que desea eliminar este usuario? Se perderán todos los referidos y datos asociados al cheque.</p>
                </div>
            </div>

            <div class="modal-footer">
                <button id="btn_eliminar_usuario" type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">No, Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="cont_detalles"></div>

<!-- Tabla -->
<table id="tbl_usuarios">
    <thead>
        <th>Nro.</th>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Ciudad</th>
        <th>Tipo</th>
        <th>Afiliacion</th>
        <th>Código Empleo</th>
        <th>Consignación</th>
        <th>Empresa</th>
        <th>Fecha registro</th>
        <th width="15%">Opc</th>
    </thead>
    <tbody>
        <?php
        // Contador
        $cont = 1;
        
        // se recorren los usuarios
        foreach ($usuarios as $usuario) {
        ?>
            <tr>
                <td class="text-right"><?php echo $cont++; ?></td>
                <td>
                    <?php if($usuario->Codigo_Empleo != "Pendiente"){ ?>
                        <!-- Afiliados -->
                        <span class="glyphicon glyphicon-ok" title="Autorizado"></span>
                    <?php }else{ ?>
                        <!-- desafiliados -->
                        <span class="glyphicon glyphicon-remove" title="Pendiente de autorización"></span>
                    <?php } ?>
                    <?php echo $usuario->Nombre; ?>
                </td>
                <td class="text-right"><?php echo $usuario->Cedula; ?></td>
                <td><?php echo $usuario->Municipio; ?></td>
                <td><?php echo $usuario->Nombre_Tipo_Afiliacion; ?></td>
                <td><?php echo $usuario->Codigo_Afiliacion; ?></td>
                <td><?php echo $usuario->Codigo_Empleo; ?></td>
                <td><?php echo $usuario->Consignacion; ?></td>
                <td><?php echo $usuario->Nombre_Empresa; ?></td>
                <td><?php echo date("d-m-Y", strtotime($usuario->Fecha_Registro)); ?></td>
                <td>
                    <!-- Afiliar -->
                    <a href="javascript:ver_detalles('<?php echo $usuario->Pk_Id_Usuario; ?>')">
                        <span class="glyphicon glyphicon-search" title="Ver detalles"></span>
                    </a>
                    
                    <!-- Si ya está autorizado -->
                    <?php if($usuario->Codigo_Empleo != "Pendiente"){ ?>
                        <!-- Desafiliar -->
                        <a href="javascript:desafiliar('<?php echo $usuario->Pk_Id_Usuario; ?>')">
                            <span class="glyphicon glyphicon-import" title="Quitar autorización"></span>
                        </a>
                    <!-- Si no está autorizado todavía -->
                    <?php }else{ ?>
                        <!-- Si es tipo 5 (patrocinador) -->
                        <?php if($usuario->Tipo_Afiliacion == 5){ ?>
                            <!-- Afiliar (dos íconos) -->
                            <a href="javascript:autorizar('<?php echo $usuario->Pk_Id_Usuario; ?>', 1)"><span class="badge">1</span></a>
                            <a href="javascript:autorizar('<?php echo $usuario->Pk_Id_Usuario; ?>', 2)"><span class="badge">2</span></a>
                        <?php }else{ ?>
                            <!-- Afiliar (ícono normal) -->
                            <a href="javascript:autorizar('<?php echo $usuario->Pk_Id_Usuario; ?>')">
                                <span class="glyphicon glyphicon-thumbs-up" title="Autorizar y generar código de empleo"></span>
                            </a>
                        <?php } // if ?>
                        
                    <?php } // if ?>

                    <!-- Eliminar -->
                    <a href="javascript:eliminar('<?php echo $usuario->Pk_Id_Usuario; ?>')">
                        <span class="glyphicon glyphicon-remove" title="Eliminar usuario"></span>
                    </a>
                </td>
            </tr>
        <?php
        } // foreach
        ?>
    </tbody>
</table><!-- Tabla -->

<script>
    /**
     * Autorizar
     */
    function autorizar(id_usuario, anios){
        // Se ejecuta el ajax que genera el Código de Empleo
        codigo_empleo = ajax("<?php echo site_url('registro/generar_codigo_empleo'); ?>", {'datos': {}}, 'html');

        // Se le ingresa el código de empleo al usuario
        actualizar = ajax("<?php echo site_url('usuario/actualizar'); ?>", {'tipo': 'codigo_empleo', 'id_usuario': id_usuario, 'codigo_empleo': codigo_empleo}, 'HTML');

        // Si trae dato de años (1 o 2)
        if(anios){
            // Se actualiza el usuario
            ajax("<?php echo site_url('usuario/actualizar_anios'); ?>", {'tipo': 'anios', 'id_usuario': id_usuario, 'anios': anios}, 'HTML');
        } // if

        //Si no se generó el código
        if (codigo_empleo == 'false') {
            //Mensaje de error
            mostrar_error($("#mensajes"), "No se ha podido generar el código. Intente nuevamente por favor.");

            // Se detiene el formulario
            return false;
        }else{
            // Se traen todos los datos del usuario
            usuario = ajax("<?php echo site_url('usuario/consultar_datos'); ?>", {'id_usuario': id_usuario}, 'JSON');

            //Declaramos un arreglo con los datos a enviar por correo
            datos_email = {
                'nombre': usuario.Nombre,
                'codigo_empleo': usuario.Codigo_Empleo,
                'destinatario': usuario.Email
            }//Fin datos email
            // console.log(datos_email)
                        
            //Se envía el correo electrónico informando que se le dio código de empleo
            email = ajax("<?php echo site_url('email/enviar'); ?>", {'datos': datos_email, 'tipo': 'autorizacion'}, 'html');

            //Se recara la tabla
            $("#cont_tabla").load("<?php echo site_url('usuario/cargar_interfaz'); ?>", {'tipo': 'todos'});

            //Se muestra el mensaje de exito
            mostrar_exito($("#mensajes"), "Le ha generado el código de empleo " + codigo_empleo + " correctamente. Se le ha enviado un correo electrónico notificándole.");
        } // if codigo de empleo
    } // autorizar

    /**
     * Desafiliar
     */
    function desafiliar(id_usuario){
        // Se le ingresa el código de empleo vacío
        actualizar = ajax("<?php echo site_url('usuario/actualizar'); ?>", {'tipo': 'codigo_empleo', 'id_usuario': id_usuario, 'codigo_empleo': 'Pendiente'}, 'HTML');

        // Se traen todos los datos del usuario
        usuario = ajax("<?php echo site_url('usuario/consultar_datos'); ?>", {'id_usuario': id_usuario}, 'JSON');

        //Declaramos un arreglo con los datos a enviar por correo
        datos_email = {
            'nombre': usuario.Nombre,
            'codigo_empleo': usuario.Codigo_Empleo,
            'destinatario': usuario.Email
        }//Fin datos email
        // console.log(datos_email)
                    
        //Se envía el correo electrónico informando que se le dio código de empleo
        email = ajax("<?php echo site_url('email/enviar'); ?>", {'datos': datos_email, 'tipo': 'desautorizacion'}, 'html');

        //Se recara la tabla
        $("#cont_tabla").load("<?php echo site_url('usuario/cargar_interfaz'); ?>", {'tipo': 'todos'});

        //Se muestra el mensaje de exito
        mostrar_exito($("#mensajes"), "Se le ha quitado la autorización correctamente. Se le ha enviado un correo electrónico notificándole.");
    } // desafiliar

    /**
     * Eliminar
     */
    function eliminar(id_usuario){
        // Se manda el id de usuario a un input oculto
        $("#id_usuario").val(id_usuario);

        // Se abre un modal
        $('#modal_eliminar').modal('show');
    } // eliminar

    /**
     * Ver detalles
     */
    function ver_detalles(id_usuario){
     $("#cont_detalles").load("<?php echo site_url('usuario/cargar_detalles'); ?>", {'id_usuario': id_usuario});
    } // ver_detalles

    // Cuando el documento esté listo
    $(document).ready(function(){
        // Inicialización de la tabla
        $('#tbl_usuarios').dataTable( {
            "bProcessing": true
        }); // Tabla

        $("#btn_eliminar_usuario").on("click", function(){
            // Se quita el id de usuario donde haya sido el invitador
            quitar_invitador = ajax("<?php echo site_url('administracion/quitar_invitador') ?>", {"id_usuario": $("#id_usuario").val()}, 'html');
            console.log(quitar_invitador);

            // Se elimina el cheque de ese usuario
            ajax("<?php echo site_url('administracion/quitar_cheque') ?>", {"id_usuario": $("#id_usuario").val()}, 'html');
            
            // Se elimina el usuario
            ajax("<?php echo site_url('administracion/quitar_usuario') ?>", {"id_usuario": $("#id_usuario").val()}, 'html');

            //Cuando se termine de cerrar
            $('#modal_eliminar').on('hidden.bs.modal', function (e) {
                //Se recara la tabla
                $("#cont_tabla").load("<?php echo site_url('usuario/cargar_interfaz'); ?>", {'tipo': 'todos'});
            });
        });
    });// document.ready
</script>
