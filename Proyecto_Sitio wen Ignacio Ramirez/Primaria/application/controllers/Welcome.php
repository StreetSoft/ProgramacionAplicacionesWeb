<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Noticias_model');
		$this->load->model('Evento_model');
		$this->load->model('Calificaciones_model');
	
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('sitio.php');
		$this->load->view('template/footer');
	}

	public function acer()
	{
		$this->load->view('template/header');
		$this->load->view('AcercaDe.php');
		$this->load->view('template/footer');
	}

	public function galeria()
	{
		$this->load->view('template/header');
		$this->load->view('Galeria.php');
		$this->load->view('template/footer');
	}

	public function contact()
	{
		$this->load->view('template/header');
		$this->load->view('Contacto.php');
		$this->load->view('template/footer');
	}
	public function noti()
	{
		$data['noticias']=$this->Noticias_model->mostrar();
		$this->load->view('template/header',$data);
		$this->load->view('Noticiass.php');
		$this->load->view('template/footer');
	}


	public function faq()
	{
		$this->load->view('template/header');
		$this->load->view('faq.php');
		$this->load->view('template/footer');
	}

	public function bio()
	{
		$this->load->view('template/header');
		$this->load->view('biografia.php');
		$this->load->view('template/footer');
	}

	public function his()
	{
		$this->load->view('template/header');
		$this->load->view('historia.php');
		$this->load->view('template/footer');
	}

	public function plan()
	{
		$this->load->view('template/header');
		$this->load->view('plan.php');
		$this->load->view('template/footer');
	}

	public function plan2()
	{
		$this->load->view('template/header');
		$this->load->view('plan2.php');
		$this->load->view('template/footer');
	}

	public function plan3()
	{
		$this->load->view('template/header');
		$this->load->view('plan3.php');
		$this->load->view('template/footer');
	}

	public function fich()
	{
		$this->load->view('template/header');
		$this->load->view('ficha.php');
		$this->load->view('template/footer');
	}

	public function event()
	{
		$data['eventos']=$this->Evento_model->mostrar();
		$this->load->view('template/header',$data);
		$this->load->view('eventos.php');
		$this->load->view('template/footer');
	}

	public function cali()
	{
		$data['califiaciones']=$this->Calificaciones_model->mostrar();
		$this->load->view('template/header',$data);
		$this->load->view('calificacionesD.php');
		$this->load->view('template/footer');
	}

	public function docu()
	{
		$this->load->view('template/header');
		$this->load->view('documentos.php');
		$this->load->view('template/footer');
	}

	public function indexBack()
	{
		
		$data['titulo'] = 'Inicio';
		$this->load->view('template/backend/header',$data);
		$this->load->view('template/backend/footer');
		$this->load->view('index');
	}
}
