<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends My_Controller {

	function __construct() {
		parent::__construct(true);

		$this->load->model("user_model","user");

		$this->setLayout('admin');
	}

	public function index($pag = null){
		
		if($this->session->userdata['user']['profile'] == FALSE || $this->session->userdata['user']['profile'] != '1'){
			redirect(base_url().'login');
		}
		
		$data['users'] = $this->user->getUsers();	

		$this->load->view('users/index', $data);
	}

	public function create($id = null){

		if ( $this->input->post() ){

			$user = new User_model();

			$user['nombre_usuario'] = $this->input->post("nombre_usuario");
			$user['clave'] = MD5($this->input->post("clave"));
			$user['idTipo_usuario'] = $this->input->post("idTipo_usuario");
			$user['status'] = 1;
			if ( $user->save() ){

				redirect('admin/users');

			}
		}

		$profile = new Profile_model();

		$data['profile'] = $this->profile->getByIdAsArray($id);
		$data['profiles'] = $this->profile->getAllToSelect();

		$this->load->view("usuarios/create", $data);
	}

	public function update($id = null){
		$data['user'] = $this->user->getByIdAsArray($id);
		if (is_null($id)){
			redirect("admin/users");
		}


		if ( $this->input->post() ){

			$user = new User_model();

			$user['idUsuario'] = $id;
			$user['idTipo_usuario'] = $this->input->post("idTipo_usuario");
			$user['nombre_usuario'] = $this->input->post("nombre_usuario");
			$user['clave'] = MD5($this->input->post("clave"));
			$user['status'] = $this->input->post("estado");

			if ( $user->save() ){

				redirect('admin/users');

			}
		}

		$profile = new Profile_model();

		$data['profile'] = $this->perfil->getByIdAsArray($id);
		$data['profile'] = $this->perfil->getAllToSelect();

		$this->load->view("users/update", $data);
	}

	public function delete($id = null){
		$user = new User_model();

		$user['idUser'] = $id;

		if ( $usr->delete() ){
			redirect('admin/users');
		}
	}		
}
