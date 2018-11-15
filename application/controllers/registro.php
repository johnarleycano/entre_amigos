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
Class Registro extends CI_Controller{
	/**
	 * Constructora de la clase
	 */
	function __construct() {
		parent::__construct();

		//Carga de modelos y librerías
		$this->load->model(array('registro_model', 'administracion_model'));
	}//Fin construct()

    /**
     * Interfaz de inicio 
     */
    function index(){
        //Se establece el título de la página
        $this->data['titulo'] = 'Registro';
        //Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'registro/registro_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'registro/registro_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
    }//Fin index

	/**
	 * Interfaz de inicio 
	 */
    function index2(){
        //Se establece el título de la página
        $this->data['titulo'] = 'Registro';
        //Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'registro/registro2_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'registro/registro_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
    }//Fin index

	function codigo_empleo(){
        //Se establece el título de la página
        $this->data['titulo'] = 'Mi código de empleo';
        //Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'registro/codigo/codigo_empleo_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'registro/codigo/codigo_empleo_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
    }//Fin index

    function compra(){
        //Se establece el título de la página
        $this->data['titulo'] = 'Comprar libro';
        //Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'registro/compra/compra_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'registro/compra/compra_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
    }

    function registrar_cheque(){
		//Se establece el título de la página
		$this->data['titulo'] = 'Registro de cheque';
		//Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'registro/registro_cheque_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'registro/registro_cheque_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
	}//Fin index

	function generar_codigo_afiliacion(){
		//Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
        	//Se genera un código de afiliación y cheques
            echo $this->registro_model->generar_codigo_afiliacion();
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
	}

    function generar_codigo_empleo(){
        //Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
            //Se genera un código de afiliación y cheques
            echo $this->registro_model->generar_codigo_empleo();
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
    }

    function validar_cedula(){
        echo $this->registro_model->validar_cedula($this->input->post("cedula"));
    }// validar_cedula

	function guardar(){
		//Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
            // Se reciben los datos por post
            $datos = $this->input->post('datos');
            
            // Antes de enviar se encripta la clave
            $datos['Password'] = md5($datos['Password']);

            //Si se guarda correctamente
    		if($this->registro_model->guardar("registro", $datos) == 'true'){
    			//Se retorna el id del usuario creado
                echo mysql_insert_id();
    		} else {
    			echo 'false';
    		}//Fin if
    	}else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
    }//Fin 

    function guardar_sorteos(){
        //Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
            // Se borran los anteriores registros
            $this->registro_model->eliminar_sorteos();
            
            echo $this->registro_model->guardar("sorteos", $this->input->post('datos'));
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
    } 

    function guardar_sorteos_baloto(){
        //Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
            $datos = $this->input->post('datos');
            $algo = $datos["Valor"];

            unset($datos["Valor"]);
            print_r($datos);
            // Se borran los anteriores registros
            $this->registro_model->eliminar_sorteos_baloto($datos);
            
            $datos["Valor"] = $algo;
            echo $this->registro_model->guardar("sorteos_baloto", $datos);
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
    }

    function guardar_sorteos_system(){
        //Se valida que la peticion venga mediante ajax y no mediante el navegador
        if($this->input->is_ajax_request()){
            // Se borran los anteriores registros
            $this->registro_model->eliminar_sorteos_system();
            
            echo $this->registro_model->guardar("sorteos_system", $this->input->post('datos'));
        }else{
            //Si la peticion fue hecha mediante navegador, se redirecciona a la pagina de inicio
            redirect('');
        }
    }
}
/* Fin del archivo registro.php */
/* Ubicación: ./application/controllers/registro.php */