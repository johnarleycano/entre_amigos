<?php
//Zona horaria
date_default_timezone_set('America/Bogota');

if ( ! defined('BASEPATH')) exit('Lo sentimos, usted no tiene acceso a esta ruta');

/**
 * Administracion
 * 
 * @author              John Arley Cano Salinas - johnarleycano@hotmail.com
 */
Class Administracion extends CI_Controller{
	/**
	 * Constructor
	 */
	function __construct() {
        parent::__construct();
        
       /* //Si no ha iniciado sesion, se redirecciona
        if($this->session->userdata('Pk_Id_Usuario') != true){
            redirect('sesion');
        }//Fin if
        */
        //Se cargan los modelos, librerias y helpers
        $this->load->model(array('administracion_model'));
    }//Fin construct()

    /**
     * Index
     */
    function index(){
        //se establece el titulo de la pagina
        $this->data['titulo'] = 'Administración';
        //Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'administracion/index_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'administracion/admin_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
    }//Fin index()

    /**
     * Asesores voluntarios
     * 15 de diciembre de 2018
     */
    function asesores_voluntarios(){
        //se establece el titulo de la pagina
        $this->data['titulo'] = 'Asesores voluntarios';
        //Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'administracion/asesores_voluntarios/index_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'administracion/asesores_voluntarios/cabecera_view';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
    }//Fin asesores_voluntarios()

    /**
     * Contador de visitas a la biblioteca
     */
    function visitas_biblioteca(){
        //se establece el titulo de la pagina
        $this->data['titulo'] = 'Visitas a la bilbioteca';
        $this->data['visitas'] = $this->administracion_model->visitas_biblioteca();
        //Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'administracion/visitas_biblioteca/index_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'administracion/visitas_biblioteca/visitas_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
    }//Fin visitas_biblioteca()

    /**
     * Bonos
     */
    function bonos(){
        //se establece el titulo de la pagina
        $this->data['titulo'] = 'Bonos cheques';
        //Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'administracion/bonos/index_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'administracion/bonos/bono_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
    }//Fin bonos

    /**
     * Códigos y sorteos
     */
    function codigos_sorteos(){
        //se establece el titulo de la pagina
        $this->data['titulo'] = 'Códigos y sorteos';
        //Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'administracion/codigos_sorteos_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'administracion/admin_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
    }//Fin codigos_sorteos()

    /**
     * Libros comprados
     */
    function compras(){
        //se establece el titulo de la pagina
        $this->data['titulo'] = 'Libros comprados';
        //Se establece la vista que tiene el contenido principal
        $this->data['contenido_principal'] = 'administracion/compras_view';
        //Se establece la vista que tiene la cabecera
        $this->data['cabecera'] = 'administracion/admin_cabecera';
        //Se carga la plantilla con las demas variables
        $this->load->view('plantillas/template', $this->data);
    }//Fin compras()

    /**
     * actualizar_cuadro
     */
    function actualizar_cuadro(){
        //Se ejecuta el guardado
        if($this->administracion_model->actualizar_cuadro($this->input->post('id_cuadro') ,$this->input->post('datos'))){
            echo true;
        }
    }// actualizar_cuadro

    /**
     * cargar_municipios
     */
    function cargar_municipios(){
        //Se carga la vista
        print json_encode($this->administracion_model->cargar_municipios($this->input->post('id_departamento')));
    }// cargar_municipios

    /**
     * agregar_cuadro
     */
    function agregar_cuadro(){
        //Se carga la vista
        $this->load->view('administracion/agregar_cuadros_view');
    }// agregar_cuadro

    /**
     * eliminar_foto
     */
    function eliminar_foto(){
        // Si se elimina el registro en base de datos
        if ($this->administracion_model->eliminar_foto($this->input->post('id_cuadro')) == 'true') {
            // Se borra el archivo del servidor
            unlink("./img/cuadros/".$this->input->post('id_cuadro').".jpg");
        }
    }// eliminar_foto

    /**
     * foto
     */
    function foto(){
        //Se carga la vista
        $this->load->view('administracion/subir_foto');
    }// foto

    /**
     * mostrar_cuadro
     */
    function mostrar_cuadro(){
        //Se carga la vista
        print json_encode($this->administracion_model->listar_cuadros($this->input->post('id_cuadro')));
    }// mostrar_cuadro

    /**
     * guardar_cuadro
     */
    function guardar_cuadro(){
        //Se ejecuta el guardado
        if($this->administracion_model->guardar_cuadro($this->input->post('datos'))){
            echo "true";
        }
    }// guardar_cuadro

    function guardar_asesor_voluntario(){
        echo $this->administracion_model->guardar_asesor_voluntario($this->input->post('datos'));
    }

    /**
     * guardar_compra
     */
    function guardar_compra(){
        //Se ejecuta el guardado
        if($this->administracion_model->guardar_compra($this->input->post('datos'))){
            echo "true";
        }
    }// guardar_compra

    /**
     * listar_bonos
     */
    function listar_bonos(){
        //Se carga la vista
        $this->load->view('administracion/bonos/tabla_view');
    } // listar_bonos

    /**
     * listar_cuadros
     */
    function listar_cuadros(){
        //Se carga la vista
        $this->load->view('administracion/cuadros_lista_view');
    } // listar_cuadros

    function listar_asesores_voluntarios(){
        $this->load->view('administracion/asesores_voluntarios/lista');
    }

    /**
     * subir_foto
     */
    function subir_foto(){
        //Se declara la variable que contiene la ruta predeterminada para la subida de imágenes de los cuadros
        $ruta = "./img/cuadros/";

        //Almacenamos el id de cuadro que usaremos para el nombre
        $id_cuadro = $this->input->post('id_cuadro');

        //Se asigna el nombre del archivo
        $nombre = $ruta.$id_cuadro.".".$extension = end(explode(".", $_FILES['userfile']['name']));

        //Si se sube el archivo exitosamente
        // if (move_uploaded_file($_FILES['userfile']['tmp_name'], $directorio.$_FILES['userfile']['name'])) {
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $nombre)) {
            // Se actualiza la foto en base de datos
            $this->administracion_model->checkear_foto($id_cuadro);

            echo "true";
        } else {
            echo "false";
        } // if
    } // subir_foto

    function quitar_invitador(){
        // Si se elimina el registro en base de datos
        if ($this->administracion_model->quitar_invitador($this->input->post('id_usuario')) == 'true') {
            echo "true";
        }
    }// quitar_invitador

    function quitar_cheque(){
        // Si se elimina el registro en base de datos
        if ($this->administracion_model->quitar_cheque($this->input->post('id_usuario')) == 'true') {
            echo "true";
        }
    }// quitar_cheque

    function quitar_usuario(){
        // Si se elimina el registro en base de datos
        if ($this->administracion_model->quitar_usuario($this->input->post('id_usuario')) == 'true') {
            echo "true";
        }
    }// quitar_usuario
}
/* Fin del archivo administracion.php */
/* Ubicación: ./application/controllers/administracion.php */