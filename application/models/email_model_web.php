<?php
/**
 * Modelo encargado de gestionar los correos electrónicos
 * 
 * @author 		       John Arley Cano Salinas
 */
Class Email_model extends CI_Model{
	/*
     * Variables globales de configuraci&oacute;n del correo
     */
    var $protocolo = 'IMAP';
    var $servidor_correo = 'mail.empleosystemthree.org';
    var $nombre = 'Fundación Entre Amigos de la Fe';

    function enviar_info($destinatario, $asunto, $cuerpo){
        //Variables del correo
        $usuario = 'info';
        $pass = '1nf0rm4c1on';
        $correo_sistema = 'info@empleosystemthree.org';

    	//Se definen los parametros de configuracion
        $config['protocol'] = $this->protocolo;
        $config['smtp_host'] = $this->servidor_correo;
        $config['smtp_timeout'] = '10';
        $config['wordwrap'] = true;
        $config['smtp_user'] = $usuario;
        $config['smtp_pass'] = $pass;
        $config['mailtype'] = 'html';

        //Se inicializa la configuración
        $this->email->initialize($config);

        //Preparando el mensaje
        $this->email->from($correo_sistema, $this->nombre);
        $this->email->to($destinatario); 
        //$this->email->cc(''); 
        $this->email->bcc(array('johnarleycano@hotmail.com')); 
        $this->email->subject($asunto);

        //Se organiza la plantilla
        $mensaje = file_get_contents('application/views/email/plantilla.php');
        $mensaje = str_replace('{TITULO}', $asunto, $mensaje);
        $mensaje = str_replace('{CUERPO}', $cuerpo, $mensaje);

        //Se deja OK el mensaje
        $this->email->message($mensaje);
        
        //Se envia
        $this->email->send();

        echo $this->email->print_debugger();
    }//Fin enviar

    function enviar_denuncia($destinatario, $asunto, $cuerpo){
        //Variables del correo
        $usuario = 'denuncia';
        $pass = 'd3nunc14';
        $correo_sistema = 'denuncia@empleosystemthree.org';

        //Se definen los parametros de configuracion
        $config['protocol'] = $this->protocolo;
        $config['smtp_host'] = $this->servidor_correo;
        $config['smtp_timeout'] = '10';
        $config['wordwrap'] = true;
        $config['smtp_user'] = $usuario;
        $config['smtp_pass'] = $pass;
        $config['mailtype'] = 'html';

        //Se inicializa la configuración
        $this->email->initialize($config);

        //Preparando el mensaje
        $this->email->from($correo_sistema, $this->nombre);
        $this->email->to($destinatario); 
        //$this->email->cc(''); 
        $this->email->bcc(array('johnarleycano@hotmail.com')); 
        $this->email->subject($asunto);

        //Se organiza la plantilla
        $mensaje = file_get_contents('application/views/email/plantilla.php');
        $mensaje = str_replace('{CUERPO}', $cuerpo, $mensaje);

        //Se deja OK el mensaje
        $this->email->message($mensaje);
        
        //Se envia
        $this->email->send();
    }
}
/* Fin del archivo email_model.php */
/* Ubicación: ./application/models/email_model.php */