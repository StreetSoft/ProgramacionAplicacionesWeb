<?php if(! defined('BASEPATH')) exit ('No direct Scrpt access allowed ');

class Comentarios_model extends CI_Model {
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

    public function mostrar1(){
        $this->db->where('id_Noticia', $this->id_Noticia);
        $noticias1 = $this->db->get('noticias'); //hace referencia a la tabla
        return $noticias1->result();//retorno de los datos que contiene la variable categorias
    }

    public function mostrar2(){
        $comentarios = $this->db->get('comentarios'); //es la que estrae los dato de la tabla comentarios
        return $comnetarios->result();//retorna los datos de la base de datos en una variable.
    }
}