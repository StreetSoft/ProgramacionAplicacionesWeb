<?php if(! defined('BASEPATH')) exit ('No direct Scrpt access allowed ');

class Evento_model extends CI_Model {
    private $nombre;
    private $fechaE;
    private $lugar;

    public function __constrcut(){
        parent::___constrcuct();
    }
    public function getnombre(){
        return $this->nombre;
    }

    public function setnombre($nombre){
        $this->nombre = $nombre;
    }

    public function mostrar(){
        $eventos = $this->db->get('eventos'); //hace referencia a la tabla
        return $eventos->result();//retorno de los datos que contiene la variable categorias
    }
}