<?php
//Zona horaria
date_default_timezone_set('America/Bogota');

//Si se intenta hacer acceso indebido
if ( ! defined('BASEPATH')) exit('Lo sentimos, usted no tiene acceso a esta ruta');

/**
 * Registro
 *
 * @autor John Arley Cano Salinas
 */
Class Usuario extends CI_Controller{
	/**
	 * Constructora de la clase
	 */
	function __construct() {
		parent::__construct();

		//Carga de modelos y librerías
		$this->load->model(array('usuario_model', 'administracion_model'));
	}//Fin construct()

	function afiliados(){
		//Se establece el título de la página
		$this->data['titulo'] = 'Afiliados';
		//Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'usuario/lista/index_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'usuario/usuario_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
	}

	function invitador(){
		//Se establece el título de la página
		$this->data['titulo'] = 'Invitaciones';
		//Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'usuario/invitador/index_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'usuario/invitador/invitador_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
	}

	function patrocinador(){
		//Se establece el título de la página
		$this->data['titulo'] = 'Mi patrocinador';
		//Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'usuario/patrocinador/index_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'usuario/patrocinador/patrocinador_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
	}

	function referidos(){
		//Se establece el título de la página
		$this->data['titulo'] = 'Referidos';
		//Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'usuario/referidos/index_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'usuario/referidos/referidos_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
	}

	function actualizar(){
		//Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
			// Se hace la actualización según el tipo
			$this->usuario_model->actualizar($this->input->post('tipo'), $this->input->post('id_usuario'), $this->input->post('codigo_empleo'));
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
	}// actualizar

	function actualizar_anios(){
		//Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
			// Se hace la actualización según el tipo
			echo $this->usuario_model->actualizar($this->input->post('tipo'), $this->input->post('id_usuario'), $this->input->post('anios'));
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
	}// actualizar_anios

	function actualizar_sesion_invitador(){
		//Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
			// Se recibe el id
			$id_invitador = $this->input->post('id_invitador');

			// Se elimina el valor anterior
			$this->session->unset_userdata('Fk_Id_Usuario_Invitador');

			// Se adiciona el nuevo id
			$this->session->set_userdata('Fk_Id_Usuario_Invitador',$id_invitador);
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
	}// actualizar_sesion_invitador

	function cargar_detalles(){
		//Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
			//Se consultan los usuarios según el tipo
			$this->data['usuario'] = $this->usuario_model->listar(false, $this->input->post("id_usuario"));
			
			//Se carga la interfaz
			$this->load->view('usuario/lista/detalles', $this->data);
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
	}// cargar_interfaz

	function cargar_interfaz(){
		//Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
			//Se consultan los usuarios según el tipo
			$this->data['usuarios'] = $this->usuario_model->listar($this->input->post('tipo'), false);
			
			//Se carga la interfaz
			$this->load->view('usuario/lista/tabla_view', $this->data);
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
	}// cargar_interfaz

	function consultar_datos(){
		//Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
			// Se hace la consulta
			print json_encode($this->usuario_model->consultar_datos($this->input->post('id_usuario')));
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
	}// consultar

	function consultar_invitador(){
		//Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
			// Se retorna
			print json_encode($this->usuario_model->consultar_invitador($this->input->post('codigo_empleo')));
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
	}// consultar_invitador

	function finalizar(){
        //Se destruye la sesion actual
        $this->session->sess_destroy();
        
        //Se redirige hacia el controlador principal
        redirect('');
    }//Fin finalizar

	function validar(){
		//Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
        	//Recibo los datos por POST
			$datos = $this->input->post('datos');

			// Antes de enviar se encripta la clave
            $datos['Password'] = md5($datos['Password']);

			//Se ejecuta el modelo
			$validacion = $this->usuario_model->validar($datos);

			//Si encuentra el usuario
			if($validacion != 'false'){
				//Almacenamos las variables de sesión
				$sesion = array(
	 				"Pk_Id_Usuario" => $validacion->Pk_Id_Usuario,
	 				"Codigo_Afiliacion" => $validacion->Codigo_Afiliacion,
	 				"Patrocinador" => $validacion->Nombre_Empresa,
	 				"Codigo_Empleo" => $validacion->Codigo_Empleo,
	 				"Nombre" => $validacion->Nombre,
	 				"Fk_Id_Usuario_Invitador" => $validacion->Fk_Id_Usuario_Invitador,
	 				"Email" => $validacion->Email,
	 				"Tipo" => $validacion->Tipo
 				); // sesion

				//Se cargan los datos a la sesión
                $this->session->set_userdata($sesion);

				//Se retorna
				echo 'true';
			}else{
				// Retorna array Vacío
				echo 'false';
			} // if
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        } // if
	} //validar
}
/* Fin del archivo usuario.php */
/* Ubicación: ./application/controllers/usuario.php */