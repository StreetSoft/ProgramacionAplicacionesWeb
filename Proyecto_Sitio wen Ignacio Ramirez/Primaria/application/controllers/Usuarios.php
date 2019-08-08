<?php 

class Usuarios extends CI_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->library('grocery_CRUD');

		}
			public function index(){
				 $data['titulo'] = 'Usuarios';
				try{

					$crud = new grocery_CRUD();
					$this->load->view('template/backend/header',$data);
					$crud->set_theme('bootstrap-v4');
					$crud->set_table('usuarios');
					$crud->set_subject('Usurias del sistema');//cambiar nombre tabla
					$crud->columns('curp_usuario','nombreUsuario','correo','contrasenia','id_Privilegios');
					$crud->required_fields('curp_usuario','nombreUsuario','correo','contrasenia','id_Privilegios');
					$crud->display_as('curp','nombre','correo','password','privilegio');
					$crud->set_relation("id_Privilegios","privilegios","id_Privilegios");//poner relaciones en las tablas
						$this->load->view('template/backend/footer');
					$output = $crud->render();

					$this->load->view('usuarios.php',(array)$output);

				}catch(Exception $ec){

					show_error($ec->getMessage());

				}
			}

  }