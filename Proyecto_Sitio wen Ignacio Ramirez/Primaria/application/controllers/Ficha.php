<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ficha extends CI_Controller {
    function __construct(){
		parent::__construct();
    $this->load->model('Evento_model');
    }

        /**
 * se descargara una ficha
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

	public function descargar(){

		$data = [];

		$hoy = date("dmyhis");

        //load the view and saved it into $html variable
        $html = 
        "<style>@page {
			    margin-top: 0.5cm;
			    margin-bottom: 0.5cm;
			    margin-left: 0.5cm;
			    margin-right: 0.5cm;
			}
            </style>".
            
        "<body>
            <div style='color:#006699;'><b>".
        
                                        "<ul >
                                            <li>".$this->input->post('curp')."</li>
                                            <li>".$this->input->post('correo')."</li>
                                            <li>".$this->input->post('grado')."</li>
                                            <li>Monto a pagar: 1000 </li>
                                            <li>6439-7832-9543-0098</li>
                                         

                                        </ul>".
            


        "</body>";

        // $html = $this->load->view('v_dpdf',$date,true);
 		
 		//$html="asdf";
        //this the the PDF filename that user will get to download
        $pdfFilePath = "fich_".$hoy.".pdf";
 
        //load mPDF library
        $this->load->library('M_pdf');
        $mpdf = new mPDF('c', 'A4-L'); 
 		$mpdf->WriteHTML($html);
		$mpdf->Output($pdfFilePath, "D");
       // //generate the PDF from the given html
       //  $this->m_pdf->pdf->WriteHTML($html);
 
       //  //download it.
       //  $this->m_pdf->pdf->Output($pdfFilePath, "D"); 
	}

	public function Eventos(){


		$data = [];

		$hoy = date("dmyhis");

        //load the view and saved it into $html variable
        $html = 
        "<style>@page {
			    margin-top: 0.5cm;
			    margin-bottom: 0.5cm;
			    margin-left: 0.5cm;
			    margin-right: 0.5cm;
			}
			</style>".
        "<body>
        	<div style='color:#006699;'><b>".$this->input->post('txtEPDF')."<b></div>".
        		"<div style='width:50px; height:50px; background-color:red;'>prueba 1</div>

        </body>";

        // $html = $this->load->view('v_dpdf',$date,true);
 		
 		//$html="asdf";
        //this the the PDF filename that user will get to download
        $pdfFilePath = "Event_".$hoy.".pdf";
 
        //load mPDF library
        $this->load->library('M_pdf');
        $mpdf = new mPDF('c', 'A4-L'); 
 		$mpdf->WriteHTML($html);
		$mpdf->Output($pdfFilePath, "D");
       // //generate the PDF from the given html
       //  $this->m_pdf->pdf->WriteHTML($html);
 
       //  //download it.
       //  $this->m_pdf->pdf->Output($pdfFilePath, "D"); 
	}

	public function Calificaciones(){

		$data = [];

		$hoy = date("dmyhis");

        //load the view and saved it into $html variable
        $html = 
        "<style>@page {
			    margin-top: 0.5cm;
			    margin-bottom: 0.5cm;
			    margin-left: 0.5cm;
			    margin-right: 0.5cm;
			}
			</style>".
        "<body>
        	<div style='color:#006699;'><b>".$this->input->post('txtCPDF')."<b></div>".
        		"<div style='width:50px; height:50px; background-color:red;'>prueba 1</div>

        </body>";

        // $html = $this->load->view('v_dpdf',$date,true);
 		
 		//$html="asdf";
        //this the the PDF filename that user will get to download
        $pdfFilePath = "cal_".$hoy.".pdf";
 
        //load mPDF library
        $this->load->library('M_pdf');
        $mpdf = new mPDF('c', 'A4-L'); 
 		$mpdf->WriteHTML($html);
		$mpdf->Output($pdfFilePath, "D");
       // //generate the PDF from the given html
       //  $this->m_pdf->pdf->WriteHTML($html);
 
       //  //download it.
       //  $this->m_pdf->pdf->Output($pdfFilePath, "D"); 
	}



}



