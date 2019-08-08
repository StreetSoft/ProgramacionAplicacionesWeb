<?php 

class Privilegios extends CI_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->library('grocery_CRUD');

		}
			public function index(){
				 $data['titulo'] = 'Privilegios';
				try{

					$crud = new grocery_CRUD();
						$this->load->view('template/backend/header',$data);

					$crud->set_theme('bootstrap-v4');
					$crud->set_table('privilegios');
					$crud->columns('id_Privilegios','nombrePrivilegios');
					$crud->required_fields('id_Privilegio','nombrePrivilegios');
					$this->load->view('template/backend/footer');
					$output = $crud->render();
					$this->load->view('privilegios.php',(array)$output);

				}catch(Exception $ex){

					show_error($ex->getMessage());

				}
			}

  }//cierre de clase

