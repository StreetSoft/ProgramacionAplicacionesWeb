<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed ');

class Grupo extends CI_Controller{

	/**
 * se hara uso del grocery para administrar Grupo
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

		}
			public function index(){
				 $data['titulo'] = 'Grupo';
				try{

					$crud = new grocery_CRUD();
					$this->load->view('template/backend/header',$data);

					$crud->set_theme('bootstrap-v4');
					$crud->set_table('grupos');
					$crud->columns('nombreGrupo','curp_profesor');
					$crud->required_fields('nombreGrupo','curp_profesor');
					$crud->set_relation("curp_profesor","profesores","curp_Profesor");
					$crud->display_as('idGrupo','#');
					$this->load->view('template/backend/footer');
					$output = $crud->render();
					$this->load->view('grupo.php',(array)$output);

				}catch(Exception $ex){

					show_error($ex->getMessage());

				}
			}

  }//cierre de clase

