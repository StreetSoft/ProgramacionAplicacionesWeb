<?php 

class Colegiatura extends CI_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->library('grocery_CRUD');

		}
			public function index(){
				 $data['titulo'] = 'Colegiatura';
				try{

					$crud = new grocery_CRUD();
					$this->load->view('template/backend/header',$data);

					$crud->set_theme('bootstrap-v4');
					$crud->set_table('colegiaturas');
					$crud->columns('id_Colegiatura','curp_Alumno','ficha');
					$crud->required_fields('id_Colegiatura''curp_Alumno','ficha');
					$crud->set_relation("curp_Alumno","alumnos","curp_alumno");
					//$crud->set_relation("curp_Usuario","usuarios","curp_usuario");//poner relaciones en las tablas
					$crud->display_as("curp Alumno","Alumno");
					$this->load->view('template/backend/footer');
					$output = $crud->render();
					$this->load->view('colegiatura.php',(array)$output);


				}catch(Exception $ex){

					show_error($ex->getMessage());

				}
			}

  }//cierre de clase

