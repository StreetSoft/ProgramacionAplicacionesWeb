

<?php if(! defined('BASEPATH')) exit ('No direct Scrpt access allowed ');

class Usuario_model extends CI_Model {
    /**
 * se hara uso de un login 
 *
 * Descripcion larga de la clase (si la hubiera)...
 *
 * @category   Zend
 * @package    Zend_Magic
 * @subpackage Wand
 * @copyright  Copyright (c)  Street soft.
 * @license    http://framework.zend.com/license   BSD License
 * @version    Release: @package_version@
 * @link       http://framework.zend.com/package/PackageName
 * @since      Class available since Release 1.5.0
 * @deprecated Class deprecated in Release 2.0.0
 */

    public function __constrcut(){
        parent::___constrcuct();
    }

    public function login($curp_usuario,$contrasenia){
        $this->db->where('curp_usuario',$curp_usuario);
        $this->db->where('contrasenia',$contrasenia);
        $q = $this->db->get('usuarios');
        if($q->num_rows()>0){
            return true;
        }else{
            return false;
        }


    }// fin login


}// fin class 