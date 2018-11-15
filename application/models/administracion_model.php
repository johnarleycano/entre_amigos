<?php
/**
 * Administracion_model
 * 
 * @author              John Arley Cano Salinas - johnarleycano@hotmail.com
 */
Class Administracion_model extends CI_Model{
    function actualizar_cuadro($id_cuadro, $datos){
        $this->db->where('id', $id_cuadro);
        if($this->db->update('cuadros', $datos)){
            //Retorna verdadero
            return true;
        }
    }//actualizar_cuadro

    function cargar_municipios($id_departamento){
        $this->db->select('*');
        $this->db->order_by('Nombre', 'ASC');
        $this->db->where('Fk_Id_Departamento', $id_departamento);

        return $this->db->get('municipios')->result();
    }//cargar_municipios

    function cargar_paises(){
        $this->db->select('*');
        $this->db->order_by('Nombre', 'ASC');

        return $this->db->get('departamentos')->result();
    }//cargar_paises

    function cargar_departamentos(){
        $this->db->select('*');
        $this->db->order_by('nombre', 'ASC');

        return $this->db->get('departamentos')->result();
    }//cargar_departamentos

    function cargar_tipos(){
        $this->db->select('*');
        $this->db->order_by('nombre', 'ASC');

        return $this->db->get('tipos')->result();
    }//cargar_tipos

    function checkear_foto($id_cuadro){
        $this->db->where('id', $id_cuadro);
        if($this->db->update('cuadros', array("imagen" => "1"))){
            //Retorna verdadero
            return true;
        }
    }//checkear_foto

    /**
    * Formatea las fechas de manera que salgan los meses y d&iacute;s alfab&eacute;ticos
    *
    * @access   public
    */
    function formato_fecha($fecha){
        //Si No hay fecha, devuelva vac&iacute;o en vez de 0000-00-00
        if($fecha == '0000-00-00' || $fecha == '1969-12-31 19:00:00' || !$fecha){
            return false;
        }
        
        $dia_num = date("j", strtotime($fecha));
        $dia = date("N", strtotime($fecha));
        $mes = date("m", strtotime($fecha));
        $anio_es = date("Y", strtotime($fecha));

        //Nombres de los d&iacute;as
        if($dia == "1"){ $dia_es = "Lunes"; }
        if($dia == "2"){ $dia_es = "Martes"; }
        if($dia == "3"){ $dia_es = "Miercoles"; }
        if($dia == "4"){ $dia_es = "Jueves"; }
        if($dia == "5"){ $dia_es = "Viernes"; }
        if($dia == "6"){ $dia_es = "Sabado"; }
        if($dia == "7"){ $dia_es = "Domingo"; }

        //Nombres de los meses
        if($mes == "1"){ $mes_es = "enero"; }
        if($mes == "2"){ $mes_es = "febrero"; }
        if($mes == "3"){ $mes_es = "marzo"; }
        if($mes == "4"){ $mes_es = "abril"; }
        if($mes == "5"){ $mes_es = "mayo"; }
        if($mes == "6"){ $mes_es = "junio"; }
        if($mes == "7"){ $mes_es = "julio"; }
        if($mes == "8"){ $mes_es = "agosto"; }
        if($mes == "9"){ $mes_es = "septiembre"; }
        if($mes == "10"){ $mes_es = "octubre"; }
        if($mes == "11"){ $mes_es = "noviembre"; }
        if($mes == "12"){ $mes_es = "diciembre"; } 

        //a&ntilde;o
        //$anio_es = $anio_es;

        //Se foramtea la fecha
        $fecha = /*$dia_es." ".*/$dia_num." de ".$mes_es." de ".$anio_es;
        
        return $fecha;
    }//Fin formato_fecha()

    function eliminar_foto($id_cuadro){
        //Si se elimina
        if ($this->db->delete('cuadros', array('id' => $id_cuadro))) {
            //Se retorna true
            return 'true';
        }
    }//eliminar_foto

    function guardar_cuadro($datos){
        if ($this->db->insert('cuadros', $datos)) {
             return true;
        } //if
    }//Fin guardar_cuadro

	function guardar_compra($datos){
		if ($this->db->insert('compras', $datos)) {
             return true;
        } //if
	}//Fin guardar_compra

    function listar_bonos(){
        $sql =
        "SELECT
        bonos.Pk_Id_Bono,
        bonos.Codigo_Cheque,
        bonos.Clave,
        bonos.Fk_Id_Usuario
        FROM
        bonos";

        return $this->db->query($sql)->result();
    }//listar_bonos

    function listar_cheques($tipo){
        $sql =
        "SELECT
        cheques.Pk_Id_Cheque,
        cheques.Clave,
        cheques.Codigo_Cheque,
        cheques.Fk_Id_Usuario,
        tbl_usuarios.Nombre AS Usuario
        FROM
        cheques
        LEFT JOIN tbl_usuarios ON cheques.Fk_Id_Usuario = tbl_usuarios.Pk_Id_Usuario";

        
        return $this->db->query($sql)->result();
    } // listar_cheques

    function listar_cuadros($id_cuadro){
        $this->db->select('*');
        $this->db->order_by('fecha_creacion', 'DESC');
        $this->db->order_by('nombre', 'ASC');

        if($id_cuadro){
            $this->db->where('id', $id_cuadro);
            return $this->db->get('cuadros')->row();
        }else{
            return $this->db->get('cuadros')->result();
        }
    }//listar_cuadros

    function listar_cuadros_principales($numero){
        $this->db->select('*');
        $this->db->order_by('fecha_creacion', 'DESC');

        return $this->db->get('cuadros', $numero, 0)->result();
    }//listar_cuadros_principales

    function listar_libros_comprados(){
        $this->db->select('*');
        $this->db->order_by('Fecha', 'DESC');

        return $this->db->get('compras')->result();
    }//listar_libros_comprados

    function listar_referidos_sorteo(){
        $sql =
        "SELECT
            referidos.Pk_Id_Usuario,
            referidos.Nombre AS Referido,
            invitador.Fecha_Registro,
            invitador.Nombre AS Invitador,
            invitador.Codigo_Empleo,
            referidos.Codigo_Empleo Codigo_Empleo_Referido
        FROM
            tbl_usuarios AS referidos
            INNER JOIN tbl_usuarios AS invitador ON referidos.Fk_Id_Usuario_Invitador = invitador.Pk_Id_Usuario
        WHERE
            referidos.Fk_Id_Usuario_Invitador IS NOT NULL
        ORDER BY
            referidos.Fecha_Registro DESC";

        
        return $this->db->query($sql)->result();
    }//listar_referidos_sorteo

    function quitar_invitador($id_usuario){
        $this->db->where('Fk_Id_Usuario_Invitador', $id_usuario);
        if($this->db->update('tbl_usuarios', array("Fk_Id_Usuario_Invitador" => NULL))){
            //Retorna verdadero
            return true;
        }
    }//quitar_invitador

    function quitar_cheque($id_usuario){
        //Si se elimina
        if ($this->db->delete('cheques', array('Fk_Id_Usuario' => $id_usuario))) {
            //Se retorna true
            return 'true';
        }
    }//quitar_cheque

    function quitar_usuario($id_usuario){
        //Si se elimina
        if ($this->db->delete('tbl_usuarios', array('Pk_Id_Usuario' => $id_usuario))) {
            //Se retorna true
            return 'true';
        }
    }//quitar_usuario

    function visitas_biblioteca(){
        $this->db->select('*');

        return count($this->db->get('visitas_biblioteca')->result());
    }//visitas_biblioteca

    function registrar_visita(){
        if (isset($_SERVER["HTTP_CLIENT_IP"]))
        {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
        {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
        {
            $ip = $_SERVER["HTTP_X_FORWARDED"];
        }
        elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
        {
            $ip = $_SERVER["HTTP_FORWARDED_FOR"];
        }
        elseif (isset($_SERVER["HTTP_FORWARDED"]))
        {
            $ip = $_SERVER["HTTP_FORWARDED"];
        }
        else
        {
            $ip = $_SERVER["REMOTE_ADDR"];
        }

        if ($this->db->insert('visitas_biblioteca', array("ip" => $ip))) {
             return true;
        } //if
    }//Fin registrar_visita
}
/* Fin del archivo administracion_model.php */
/* Ubicación: ./application/models/administracion_model.php */