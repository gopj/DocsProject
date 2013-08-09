<?php 

class User_model extends My_Model {

	public function __construct() {

		$this->tableName = 'users';
		$this->primaryKey = 'idUser';
		$this->load->database();

		parent::__construct();

	}

	public function identificar($user, $password){

		$identificar = FALSE;

		// Limpiamos los valores de posible inyeccion XSS
		$user = $this->security->xss_clean($user);
		$password = $this->security->xss_clean($password);

		// Preparar la consulta
		$this->db->where('userName', $user);
		$this->db->where('password', MD5($password));
		$this->db->join('profiles', "users.idProfile = profiles.idProfile");
		$this->db->limit(1);

		// Obtenemos el resultado de la consulta
		$query = $this->db->get($this->tableName);

		// Si se encontro un resultado
		if($query->num_rows() == 1){
			// Asignar los valores al record
			$this->record = $query->row_array();
			// Asignar identificacion positiva
			$identificar = TRUE;
		}

		return $identificar;
	}

	public function getUsers(){

		$query = $this->db->query("
					SELECT 
						u.idUser, p.txtProfile, u.userName, u.name, u.lastName
					FROM 
						users as u, profiles as p
					WHERE 
						u.idProfile = p.idProfile;
				");

		if ($query->num_rows() > 0){
			return $query;
		} else {
			return false;
		}
	}

}

 ?>