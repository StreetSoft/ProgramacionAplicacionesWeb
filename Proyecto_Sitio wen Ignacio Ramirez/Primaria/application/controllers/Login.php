
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed ');

class Login extends CI_Controller{
    /**
 * se hara uso de un login para entrar a al backed
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
 * @since      Class available since Release 1.0.0
 * @deprecated Class deprecated in Release 2.0.0
 */

    public function __construct(){
        parent::__construct();
    } 

    public function index(){
        if($this->session->userdata('curp_usuario')){
            redirect('welcome/indexBack');
        }

        if(isset($_POST['contrasenia'])){
        $this->load->model('usuario_model');
        if($this->usuario_model->login($_POST['curp_usuario'],$_POST['contrasenia'])){
            $this->session->set_userdata('curp_usuario', $_POST['curp_usuario']);
            redirect('welcome/indexBack');
        }else{
            redirect('login#bad-pasword');
            }
        }

        $this->load->view('login2.php');

    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('welcome/index');
    }
}