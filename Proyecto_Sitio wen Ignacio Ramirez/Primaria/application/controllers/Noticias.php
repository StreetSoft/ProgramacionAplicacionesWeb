<?php 

class Noticias extends CI_Controller{

	public function __construct(){
	parent::__construct();
	$this->load->library('grocery_CRUD');
	$this->load->model('Comentarios_model');


		}
			public function index(){
				 $data['titulo'] = 'Noticias';
				try{

					$crud = new grocery_CRUD();
					$this->load->view('template/backend/header',$data);

					$crud->set_theme('bootstrap-v4');
					$crud->set_table('noticias');
					$crud->columns('Titulo','contenido','imagen','fechaN','Curp_usuario');
					$crud->required_fields('Titulo','contenido','imagen','fechaN','Curp_usuario');
					//$crud->set_rules('buyPrice','buy Price','numeric'); validaciones
					$crud->set_field_upload('imagen','assets/uploads/files','jpg|jpeg|png');
					$crud->set_relation("Curp_usuario","usuarios","curp_usuario");
					$this->load->view('template/backend/footer');
					$output = $crud->render();
					$this->load->view('noticias.php',(array)$output);

				}catch(Exception $ex){

					show_error($ex->getMessage());

				}
			}

		public function comen($id_Noticia){
		$this->Comentarios_model->setid_Noticia($id_Noticia);
		$data['noticias1']=$this->Comentarios_model->mostrar1();
		$this->load->view('template/header',$data);
		$this->load->view('comentarios_view.php');
		$this->load->view('template/footer');
	}

  }//cierre de clase

