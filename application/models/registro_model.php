<?php
/**
 * Modelo encargado de gestionar tel registro de los usuarios
 * 
 * @author 		       John Arley Cano Salinas
 */
Class Registro_model extends CI_Model{

    function actualizar_cheque_usuario($id_cheque, $id_usuario){
        $this->db->where('Pk_Id_Cheque', $id_cheque);
        if($this->db->update('cheques', array("Fk_Id_Usuario" => $id_usuario))){
            //Retorna verdadero
            return true;
        }
    }//actualizar_cheque_usuario

	function cargar_cheques(){
		$this->db->select('*');
		return $this->db->get('cheques')->result();
	}

	function validar_codigo_afiliacion($codigo){
		//Se consulta el código
		$this->db->where('Codigo_Afiliacion', $codigo);

		$resultado = $this->db->get('tbl_usuarios')->row();

		//Si existe
		if (count($resultado) == 1) {
			//Retorna true
			return 'true';
		} else {
			//Retorna tfalse
			return 'false';
		}
	}

	function validar_cheque($datos){
		$this->db->where($datos);

		$resultado = $this->db->get('cheques')->row();

		//Si existe
		if (count($resultado) > 0) {
			//Retorna true
			return $resultado->Pk_Id_Cheque;
		} else {
			//Retorna tfalse
			return false;
		}
	}

	function validar_cedula($numero){
		//Se consulta el código
		$this->db->where('Cedula', $numero);

		if ($this->db->get('tbl_usuarios')->row()) {
			return true;
		} else {
			return false;
		}
	}

	function validar_codigo_empleo($codigo){
		//Se consulta el código
		$this->db->where('Codigo_Empleo', $codigo);

		$resultado = $this->db->get('tbl_usuarios')->row();

		//Si existe
		if (count($resultado) == 1) {
			//Retorna true
			return 'true';
		} else {
			//Retorna tfalse
			return 'false';
		}
	} // validar_codigo_empleo
	
	function generar_codigo_afiliacion(){
		//Se crea un código
		$codigo = str_pad(rand(1, 999999), 6, 0, STR_PAD_LEFT);

		//Si el código ya existe
		if($this->validar_codigo_afiliacion($codigo) == "true"){
			return "false";
		} else {
			return $codigo;
		}
	} // generar_codigo_afiliacion

	function generar_codigo_empleo(){
		//Se crea un código
		$codigo = str_pad(rand(1, 999999), 6, 0, STR_PAD_LEFT)."CE";

		//Si el código ya existe
		if($this->validar_codigo_empleo($codigo) == "true"){
			return "false";
		} else {
			return $codigo;
		}
	} // generar_codigo_empleo

	function guardar($tipo, $datos){
		switch ($tipo) {
			case 'registro':
				//Si se insertan bien
				if ($this->db->insert('tbl_usuarios', $datos)) {
					return 'true';
				} else {
					return 'false';
				}
				break;

			case 'sorteos':
				return $this->db->insert_batch('sorteos', $datos);
			break;

			case 'sorteos_baloto':
				return $this->db->insert('sorteos_baloto', $datos);
			break;

			case 'sorteos_system':
				return $this->db->insert('sorteos_system', $datos);
			break;

			case 'cheque':
				//Si se insertan bien
				if ($this->db->insert('cheques', $datos)) {
					return 'true';
				} else {
					return 'false';
				}
				break;

			
			/*case 'autorizacion':
				//Si se insertan bien
				if ($this->db->insert('autorizaciones', $datos)) {
					return true;
				} else {
					return false;
				}
				break;*/

			/*case 'pre_registro':
				//Si se insertan bien
				if ($this->db->insert('pre_registros', $datos)) {
					return true;
				} else {
					return false;
				}
				break;*/
		}
		
	} // guardar

	function eliminar_sorteos(){
        return $this->db->delete('sorteos', array("Valor <>" => 1000));
    }//eliminar_foto

	function eliminar_sorteos_baloto($datos){
        return $this->db->where($datos)->delete('sorteos_baloto', array("Valor <>" => 1000));
    }//eliminar_foto

	function eliminar_sorteos_system(){
        return $this->db->delete('sorteos_system', array("Loteria <>" => 1000));
    }//eliminar_foto

    function cargar_sorteos($numero){
    	return $this->db->where("Numero", $numero)->get("sorteos")->row();
    	
    }

    function cargar_sorteos_baloto($numero, $posicion){
    	return $this->db->where("Numero", $numero)->where("Posicion", $posicion)->get("sorteos_baloto")->row();
    	
    }

    function cargar_sorteos_system(){
    	return $this->db->get("sorteos_system")->row();
    	
    }
}	
/* Fin del archivo registro_model.php */
/* Ubicación: ./application/models/registro_model.php */