<?php if(! defined('BASEPATH')) exit ('No direct Scrpt access allowed ');

class Noticias_model extends CI_Model {
    private $id_Noticia;
    private $Titulo;
    private $contenido;
    private $fechaN;
    private $Curp_usuario;
    private $imagen;

    public function __constrcut(){
        parent::___constrcuct();
    }

    public function getid_Noticia(){
        return $this->id_Noticia;
    }

    public function setid_Noticia($id_Noticia){
        $this->id_Noticia = $id_Noticia;
    }

    public function mostrar(){
        $noticias = $this->db->get('noticias'); //hace referencia a la tabla
        return $noticias->result();//retorno de los datos que contiene la variable categorias
    }
    
}