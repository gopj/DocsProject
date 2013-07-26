<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends My_Controller {

	public function __construct(){
		parent::__construct();
		$this->setLayout('blank');
	}
	
	public function index(){

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$this->load->model("User_model", "user");

			if($this->user->identificar($this->input->post('usuario'), $this->input->post('clave'))){
				// Preparar información para la sesión
				$user = array(
					'idUser' => $this->user['idUser'],
					'user' => $this->user['userName'],
					'idType' => $this->user['idTipo_usuario']
				);

				$this->session->set_userdata('user', $user);
				
				switch ($this->session->userdata['user']['perfil']){
					case '1':
						redirect("admin/index/");
						break;
					case '2':
						redirect("user/index/");
						break;					
				}
	

			} else {
				// Mostrar motivo de error

			}
		}

		$this->load->view('login/index');
	}

	public function test(){
		$this->load->view('login/test');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect("index");
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */