<?php
/**
 * Modelo encargado de gestionar la información de
 * los usuarios
 * 
 * @author 		       John Arley Cano Salinas
 */
Class Usuario_model extends CI_Model{
	function actualizar($tipo, $id_usuario, $codigo_empleo){
		// suiche para cada tipo
		switch ($tipo) {
			//Años de patrocinador
			case 'anios':
				$sql =  "UPDATE tbl_usuarios SET Anios = {$codigo_empleo} WHERE Pk_Id_Usuario = {$id_usuario}";
				return $this->db->query($sql);
				break;	

			//Cuando son afiliados
			case 'codigo_empleo':
				$sql =  "UPDATE tbl_usuarios SET Codigo_Empleo = '{$codigo_empleo}' WHERE Pk_Id_Usuario = {$id_usuario}";
				return $this->db->query($sql)->result();
				break;	

			// invitador
			case 'invitador':
				$sql =  "UPDATE tbl_usuarios SET Fk_Id_Usuario_Invitador = '{$id_usuario}' WHERE Pk_Id_Usuario = '".$this->session->userdata("Pk_Id_Usuario")."'";
				return $this->db->query($sql)->result();
				break;	

			// invitador
			case 'invitador_afiliacion':
				$sql =  "UPDATE tbl_usuarios SET Fk_Id_Usuario_Invitador = '{$id_usuario}' WHERE Pk_Id_Usuario = '".$this->session->userdata("Pk_Id_Usuario")."'";
				return $this->db->query($sql)->result();
				break;	
		} // suiche
	} // actualizar

	function consultar_datos($id_usuario){
		$this->db->select('Nombre');
		$this->db->select('Codigo_Empleo');
		$this->db->select('Email');

		$this->db->where('Pk_Id_Usuario', $id_usuario);
		return $this->db->get('tbl_usuarios')->row();
	}

	function consultar_invitador($codigo_empleo){
		$this->db->select('*');
		$this->db->where('Codigo_Empleo', $codigo_empleo);

		return $this->db->get('tbl_usuarios')->row();
	}

	function listar($tipo, $id_usuario){
		// Variables
		$condicion = "";
		$usuario = "";

		// Si es un usuario específico
		if($id_usuario){
			$usuario = "AND tbl_usuarios.Pk_Id_Usuario = '{$id_usuario}'";
		}else{
			// Si son afiliados
			if($tipo == 'afiliados'){
				$condicion = "AND tbl_usuarios.Codigo_Empleo <> 'Pendiente'";
			}

			// Si son pendientes de afiliación
			if($tipo == 'pendientes'){
				$condicion = "AND tbl_usuarios.Codigo_Empleo = 'Pendiente'";
			}
		}

		$sql =
		"SELECT
			tbl_usuarios.Pk_Id_Usuario,
			tbl_usuarios.Nombre,
			tbl_usuarios.Cedula,
			tbl_usuarios.Email,
			tbl_usuarios.Codigo_Afiliacion,
			tbl_usuarios.Codigo_Empleo,
			tbl_usuarios.Telefono,
			tbl_usuarios.Consignacion,
			tbl_usuarios.Anios,
			departamentos.Nombre AS Departamento,
			municipios.Nombre AS Municipio,
			tbl_usuarios.Consignacion,
			tbl_usuarios.Empresa,
			tbl_usuarios.Nombre_Empresa,
			tbl_usuarios.Cheque,
			tbl_usuarios.Fecha_Registro,
			tbl_usuarios.Nombre_Invitador,
			tbl_usuarios.Cedula_Invitador,
			tbl_usuarios.Telefono_Invitador,
			tbl_usuarios.Fecha_Entrega_Volante,
			tbl_usuarios.Fecha_Consignacion,
			tbl_usuarios.Tipo_Afiliacion,
			CASE  tbl_usuarios.Tipo_Afiliacion
			  WHEN 1 THEN 'Sin Referido'
			  WHEN 2 THEN 'Afiliado empresarial'
			  WHEN 3 THEN 'Mi referido'
			  WHEN 4 THEN 'Asesor Voluntario'
			  WHEN 5 THEN 'Patrocinador'
			 ELSE 'Ninguno'
			 END as Nombre_Tipo_Afiliacion
		FROM
			tbl_usuarios
			LEFT JOIN cheques ON cheques.Fk_Id_Usuario = tbl_usuarios.Pk_Id_Usuario
			LEFT JOIN municipios ON tbl_usuarios.Fk_Id_Municipio = municipios.Pk_Id
			LEFT JOIN departamentos ON municipios.Fk_Id_Departamento = departamentos.Pk_Id
		WHERE tbl_usuarios.Pk_Id_Usuario <> ''
			{$condicion}
			{$usuario}";

		// Si es un usuario específico
		if($id_usuario){
			return $this->db->query($sql)->row();
		}else{
			return $this->db->query($sql)->result();
		}
		
	} // listar

	function listar_referidos(){
		$sql =
		"SELECT *
		FROM
		tbl_usuarios
		WHERE
		tbl_usuarios.Fk_Id_Usuario_Invitador = {$this->session->userdata('Pk_Id_Usuario')}";

		
		return $this->db->query($sql)->result();
	}

	function cargar_referidos_patrocinados($cedula){
		$sql =
		"SELECT
			* 
		FROM
			tbl_usuarios AS u 
		WHERE
			u.Cedula_Asesor = '$cedula' 
			AND u.Tipo_Afiliacion = 5";

		
		return $this->db->query($sql)->result();
	}

	function validar($datos){
		//Campos a retornar
		$this->db->select('*');

		//Se validan el codigo y el password ingresados
        $this->db->where('Codigo_Afiliacion', $datos['Codigo_Afiliacion']);
        $this->db->where('Password', $datos['Password']);

        //Se ejecuta la consulta
        $resultado = $this->db->get('tbl_usuarios')->row();
        
        //Si lo encuentra
        if (count($resultado) == 1) {
        	//Se devuelve el arreglo
        	return $resultado;
        } else {
        	//Se devuelve falso
        	return 'false';
        }// if
	} // validar
}
/* Fin del archivo registro_model.php */
/* Ubicación: ./application/models/usuario_model.php */