<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Broadcast extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('BroadcastModel');
	}

function index(){
		$data['Broadcast'] = $this->BroadcastModel->getphone();	
		$this->load->view('Template/HeaderPangkalan');
		$this->load->view('Broadcast/Broadcast',$data);
		$this->load->view('Template/FooterPangkalan');
	}


}