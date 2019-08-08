<?php 

class Profesores extends CI_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->library('grocery_CRUD');

		}
			public function index(){
				 $data['titulo'] = 'Profesores';
				try{
					$this->load->view('template/backend/header',$data);

					$crud = new grocery_CRUD();

					$crud->set_theme('bootstrap-v4');
					$crud->set_table('profesores');
					$crud->set_subject('Profesores');//cambiar nombre tabla
					$crud->columns('curp_Profesor','nombreProfesor','correoProfesor','contraseniaProfe');
					$crud->required_fields('curp_Profesor');
					$crud->display_as('curp','nombre','correo','contraseña');
					$this->load->view('template/backend/footer');
					$output = $crud->render();

					$this->load->view('profesores.php',(array)$output);

				}catch(Exception $ec){

					show_error($ec->getMessage());

				}
			}

  }