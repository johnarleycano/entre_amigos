<?php

//Zona horaria

date_default_timezone_set('America/Bogota');



//Si se intenta hacer acceso indebido

if ( ! defined('BASEPATH')) exit('Lo sentimos, usted no tiene acceso a esta ruta');



/**

 * Email

 *

 * @autor John Arley Cano Salinas

 */

Class Email extends CI_Controller{

	/**

	 * Constructora de la clase

	 */

	function __construct() {

		parent::__construct();



		//Carga de modelos y librerías

		$this->load->model(array('email_model'));

		$this->load->library(array('email'));

	}//Fin construct()



	function index(){

		/*$this->load->library('email');



		//Se definen los parametros de configuracion

        $config['protocol'] = 'IMAP';

        $config['smtp_host'] = 'mail.empleosystemthree.org';

        $config['smtp_timeout'] = '10';

        $config['wordwrap'] = true;

        $config['smtp_user'] = 'info';

        $config['smtp_pass'] = '1nf0rm4c1on';

        $config['mailtype'] = 'html';



        //Se inicializa la configuración

        $this->email->initialize($config);





		$this->email->from('info@empleosystemthree.org', 'Your Name');

		$this->email->to('johnarleycano@hotmail.com'); 

		// $this->email->cc('another@another-example.com'); 

		// $this->email->bcc('them@their-example.com'); 



		$this->email->subject('Email Test');

		$this->email->message('Testing the email class.');	



		$this->email->send();



		echo $this->email->print_debugger();*/

	}



	function enviar(){

		// Se reciben los datos

		$datos = $this->input->post('datos');

		

		// suiche

		switch ($this->input->post('tipo')) {



			case "bienvenido":

				$texto = "<h3>Estimado <b>".$datos['nombre'].":</b></h3><br>Le damos la bienvenida al programa. Desde ahora cuenta con un código de afiliación para ingresar a la aplicación y participar.<br><br>Su código es ".$datos['codigo_afiliacion'].". Su clave es ".$datos['password'].".<br>Por favor no olvide sus datos y nunca le entregue su clave a otra persona.";



				//Se envía el email

				$this->email_model->enviar_info($datos['destinatario'], "Bienvenido", $texto, false);

				break;



			case "denuncia":

				$texto = "<h3>Estimado <b>".$datos['nombre'].":</b></h3><br>Hemos recibido su denuncia: <br>".$datos['denuncia']."<br><br>Pronto estaremos en contacto con usted.";



				//Se envía el email

				$this->email_model->enviar_info($datos['destinatario'], "Denuncia recibida", $texto, false);

				$this->email_model->enviar_info("info@entreamigossystemthree.org", "Denuncia recibida", $texto, false);

				break;



			case "compra":

				$texto = "<h3>Estimado <b>".$datos['nombre'].":</b></h3><br>Le damos la bienvenida al <b>Club Entreamigos LEC</b>.<br><p>Queremos que haga parte de nuestro club y juntos apoyemos el plan de empleo, y el plan cultural que beneficiará a muchas mujeres cabeza de familia y a otras personas que por diversas causas no logran conseguir empleo.</p><p>Lea la información que le enviamos y además uno de nuestros libros de la Biblioteca Privada es un pastelito literario. Lo esperamos.</p>";



				//Se envía el email

				$this->email_model->enviar_info($datos['destinatario'], "Ha recibido su libro", $texto, true);

				break;



			case "autorizacion":

				$texto = "<h3><b>Estimado:</b></h3><br>La Fundación lo ha autorizado y le ha generado el Código de Empleo.<br><br>Su código de empleo es ".$datos['codigo_empleo'].".";



				//Se envía el email

				$this->email_model->enviar_info($datos['destinatario'], "Ha sido Autorizado", $texto, false);

				break;



			case "desautorizacion":

				$texto = "<h3><b>Estimado:</b></h3><br>usted estaba autorizado en la fundación y ha sido desautorizado en este momento.";



				//Se envía el email

				$this->email_model->enviar_info($datos['destinatario'], "Ya no está autorizado", $texto, false);

				break;

		} // suiche

	}//Fin enviar

	function enviar_masivo()
	{
		$correos = Array();

		foreach ($this->email_model->listar_correos_masivos() as $correo) {
			array_push($correos, $correo->Email);
		}
		// print_r($correos);

		$this->email_model->enviar_info($correos, "Un mensaje para tí", $this->input->post("mensaje"), false);
		// echo $this->input->post("mensaje");
		// echo "conectado";

	}


	function masivo(){

		//Se envía el email

		// $this->email_model->enviar_info("johnarleycano@hotmail.com", "Prueba", "Prueba", false);



		//se establece el titulo de la pagina

        $this->data['titulo'] = 'Correos masivos';

        //Se establece la vista que tiene el contenido principal

        $this->data['contenido_principal'] = 'email/masivos_view';

        //Se establece la vista que tiene la cabecera

        $this->data['cabecera'] = 'email/masivos_cabecera';

        //Se carga la plantilla con las demas variables

        $this->load->view('plantillas/template', $this->data);

	}

}

/* Fin del archivo email.php */

/* Ubicación: ./application/controllers/email.php */