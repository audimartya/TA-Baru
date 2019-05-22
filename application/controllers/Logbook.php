<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logbook extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('LogbookModel');

		$sess = $this->session->userdata('id_login');

		if($sess == null) {
			redirect('Login/');
		}
	}

	public function panggillogbook(){
		$data['Logbook'] = $this->LogbookModel->GetAll();	
		$this->load->view('Header');
		$this->load->view('Logbook/LihatLogbook',$data);
		$this->load->view('Footer');
	}

	public function logbook($month = ''){
		// $parser['filter'] = $this->input->post('bulan');
		$parser['month'] = ($month == $this->input->post('bulan'));
		$this->load->view('Template/HeaderPangkalan');
		$this->load->view('Logbook/LihatLogbook', $parser);
		$this->load->view('Template/FooterPangkalan');
	}

	public function export_excel(){
	 	$data = array(  'title' => 'LOGBOOK',
	 					'Logbook' => $this->LogbookModel->GetAll());
	 	$this->load->view('Logbook/ExportExcel', $data);
 	}

 	public function get_bulan(){
 		$data['filter'] = $this->input->post('bulan');
 		$bulan = $this->input->post('bulan');

 		// if ($data['filter'] == 'Pilih' || empty($data['filter'])) {
 		// 	$data['logbook'] = $this->LogbookModel->GetAll();
 		// } else {
 		// 	$bulan = $data['filter'];
 		// 	$data['logbook'] = $this->LogbookModel->getbulan($bulan);
 		// }

 		$data['get_logbook'] = $this->LogbookModel->getbulan($bulan);

 		$this->load->view('Header');
		$this->load->view('Logbook/Get_Bulan',$data);
		$this->load->view('Footer');
 	}
}