<?php
//Zona horaria
date_default_timezone_set('America/Bogota');

//Si se intenta hacer acceso indebido
if ( ! defined('BASEPATH')) exit('Lo sentimos, usted no tiene acceso a esta ruta');

/**
 * Biblioteca
 *
 * @autor John Arley Cano Salinas
 */
Class Biblioteca extends CI_Controller{
	/**
	 * Interfaz de inicio del módulo
	 */
	function index(){
        $this->load->model(array('administracion_model'));

		// Se crea el registro en base de datos de la visita
		$this->administracion_model->registrar_visita();
		//Se establece el título de la página
		$this->data['titulo'] = 'Biblioteca';
		//Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'biblioteca/index_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'biblioteca/biblioteca_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
	}//Fin index

}
/* Fin del archivo biblioteca.php */
/* Ubicación: ./application/controllers/biblioteca.php */