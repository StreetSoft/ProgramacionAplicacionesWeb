<?php 


class Usuario extends CI_CONTROLLER
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Usuario_model');
	}

		public function index(){
			$this->load->view('login');

		}
		public function mostrar(){
			$this->load->view('<?=base_url();?>index.php/welcome/indexBack');

		}

		public function login(){

				$u = $this->input->post('curp_usuario');
				$p = $this->input->post('contrasenia');

				$this->Usuario_model->setCurp_usuario($u);
				$this->Usuario_model->setContrasenia($p);
				$cantidad = $this->Usuario_model->login();

				if($cantidad <= 0){
					redirect('Usuario/index');
				}else{
					$datosUsuario = $this->Usuario_model->listar();

					foreach ($datosUsuario as $du):
						$session_data = array(
							'curp_usuario' => $du->usuarios
						);
					endforeach;

					$this->session->set_userdata($session_data);
					redirect('Usuario/mostrar');
				}


		}


	
}