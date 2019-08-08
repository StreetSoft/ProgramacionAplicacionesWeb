<?php

/**
* 
*/
class Calificaciones_model extends CI_Model
{
    public function __constrcut(){
        parent::___constrcuct();
    }

	
	public function getCalificaciones(){
		$this->db->select('id_Calificacion','calificacion','curp_Profesor','id_Materias');
		$this->db->from('calificaciones');
		$query = $this->db->get();
		return $query;
	}

	public function mostrar(){
        $calificaciones = $this->db->get('calificaciones'); //es la que estrae los dato de la tabla comentarios
        return $calificaciones->result();//retorna los datos de la base de datos en una variable.
    }


}