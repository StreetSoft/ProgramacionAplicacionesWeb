<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed ');

class Alumnos extends CI_Controller{

	    /**
 * se hara uso del grocery para administrar alumnos
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
	if(!$this->session->userdata('curp_usuario')){
		redirect();
	}

		}
			public function index(){
				 $data['titulo'] = 'Alumnos';
				try{

					$crud = new grocery_CRUD();
					$this->load->view('template/backend/header',$data);

					$crud->set_theme('bootstrap-v4');
					$crud->set_table('alumnos');
					$crud->set_subject('Estudiantes');//cambiar nombre tabla
					$crud->columns('curp_Alumno','nombreAlumno','contrasena_Alum','id_Grupo');
					$crud->required_fields('curp_Alumno','nombreAlumno','contrasena_Alum','id_Grupo');
					$crud->display_as('Alumno','nombre','password','grupo');

					//$crud->set_relation("G_idGrupo","grupo","grupo");//poner relaciones en las tablas
					//$crud->display_as("C_idColonia","Colonia");
					//$crud->set_relation_n_n('Materias','detmateria,'materia','M_idMAteria','A_matricula,'materia');//relacion muchos a muchos
					//$crud->set_relation("G_idGrupo","grupo","grupo");
					//$crud->display_as("G_idGrupo","Grupo");

					$this->load->view('template/backend/footer');
					$output = $crud->render();

					$this->load->view('alumnos.php',(array)$output);

				}catch(Exception $ec){

					show_error($ec->getMessage());

				}
			}

  }