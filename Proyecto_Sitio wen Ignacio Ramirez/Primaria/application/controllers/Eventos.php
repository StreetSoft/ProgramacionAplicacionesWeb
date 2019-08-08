<?php 

class Eventos extends CI_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->library('grocery_CRUD');

		}
			public function index(){
				 $data['titulo'] = 'Eventos';
				try{

					$crud = new grocery_CRUD();
					$this->load->view('template/backend/header',$data);

					$crud->set_theme('bootstrap-v4');
					$crud->set_table('eventos');
					
					$crud->columns('nombreE','fechaE','lugar');

					
					$crud->set_rules('fechaE','fechaE','Date');
					$crud->required_fields('nombreE','fechaE','lugar');
					$crud->display_as('calle','Direccion');

					
					$this->load->view('template/backend/footer');
					$output = $crud->render();

					$this->load->view('eventoss.php',(array)$output);

				}catch(Exception $ec){

					show_error($ec->getMessage());

				}
            }
        }
