<?php 

class Calificaciones extends CI_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->library('grocery_CRUD');

		}
			public function index(){
				 $data['titulo'] = 'Calificaciones';
				try{

					$crud = new grocery_CRUD();
					$this->load->view('template/backend/header',$data);

					$crud->set_theme('bootstrap-v4');
					$crud->set_table('calificaciones');
					
					$crud->columns('id_Calificacion','calificacion','curp_Profesor','id_Materias');

					$crud->set_relation("curp_Profesor","profesores","curp_Profesor");
					$crud->set_relation("id_Materias","materias","id_Materias");
					$crud->set_rules('calificacion','calificacion','numeric');
					$crud->set_rules('curp_profesor','curp_profesor','numeric');
					$crud->required_fields('calificacion','curp_Profesor','id_Materias');
					$crud->display_as('calle','Direccion');

					
					$this->load->view('template/backend/footer');
					$output = $crud->render();

					$this->load->view('calificaciones.php',(array)$output);

				}catch(Exception $ec){

					show_error($ec->getMessage());

				}
			}

  }