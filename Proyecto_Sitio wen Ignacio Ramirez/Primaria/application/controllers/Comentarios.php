<?php 

class Comentarios extends CI_Controller{
	/**
 * se hara uso del grocery para administrar Comentarios
 *
 * Descripcion larga de la clase (si la hubiera)...
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c)  Street soft.
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       https://github.com/StreetSoft/ProgramacionAplicacionesWeb/
 * @since      Class available since Release 1.0.0
 * @deprecated Class deprecated in Release 2.0.0
 */

	public function __construct(){
	parent::__construct();
	$this->load->library('grocery_CRUD');
	$this->load->model('Noticias_model');
	$this->load->model('Comentarios_model');


		}
			public function index(){
				 $data['titulo'] = 'Comentarios';
				try{


					$crud = new grocery_CRUD();
					$this->load->view('template/backend/header',$data);

					$crud->set_theme('bootstrap-v4');
					$crud->set_table('comentarios');
					$crud->set_subject('Profesores');//cambiar nombre tabla
					$crud->columns('contenidoCon','fechaC','id_noticia','curp_Usuario');
					$crud->required_fields('contenidoCon','fechaC','id_noticia','curp_Usuario');
					
					$crud->display_as('Contenido','fecha','noticia','Usuario');
					$crud->set_relation("id_noticia","noticias","id_Noticia");
					$crud->set_relation("curp_Usuario","usuarios","curp_usuario");//poner relaciones en las tablas
					$this->load->view('template/backend/footer');
					$output = $crud->render();

					$this->load->view('comentarios.php',(array)$output);

				}catch(Exception $ec){

					show_error($ec->getMessage());

				}
			}

		

  }