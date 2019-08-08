<?php 
	/**
 * se hara uso del grocery para administrar Materias
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

class Materias extends CI_Controller{


	public function __construct(){
	parent::__construct();
	$this->load->library('grocery_CRUD');

		}
			public function index(){
				 $data['titulo'] = 'Materias';
				try{

					$crud = new grocery_CRUD();
					$this->load->view('template/backend/header',$data);

					$crud->set_theme('bootstrap-v4');
					$crud->set_table('materias');
					$crud->columns('id_Materias','nombreMateria','curp_Profesor');
					$crud->set_relation("curp_Profesor","profesores","curp_Profesor");
					$crud->required_fields('Id_materias');
					$this->load->view('template/backend/footer');
					$output = $crud->render();
					$this->load->view('materias.php',(array)$output);

				}catch(Exception $ex){

					show_error($ex->getMessage());

				}
			}

  }//cierre de clase

