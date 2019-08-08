<?php
/**
* 
*/
class Cexcel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('calificaciones_model');
		$this->load->library('export_excel');
	}
    public function dExcel(){
		$result = $this->calificaciones->getCalificaciones();
		$this->export_excel->to_excel($result, 'calificaciones');
	}

}