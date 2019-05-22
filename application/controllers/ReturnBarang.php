<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReturnBarang extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('ReturnBarangModel');
		$this->load->library('form_validation', 'session', 'database');
	}

	function index(){
		$data['ReturnBarang'] = $this->ReturnBarangModel->GetAll();	
		$this->load->view('Template/HeaderPangkalan');
		$this->load->view('ReturnBarang/DataReturnBarang',$data);
		$this->load->view('Template/FooterPangkalan');
	}
			
	function do_insert(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		//$this->form_validation->set_rules('asal', 'Asal', 'required');

		$data['asal'] = $this->ReturnBarangModel->dropdown_asal();

		if ($this->form_validation->run() == FALSE) {
	    	$this->load->view('Template/HeaderPangkalan');
	    	$this->load->view('ReturnBarang/Addreturnbarang', $data);
			$this->load->view('Template/FooterPangkalan');
	    } else {
	    	$data['input'] = array(
                'tanggal' => date("Y/m/d"),
                'jumlah' => $this->input->post('jumlah'),
                'keterangan' => $this->input->post('keterangan'),
                'asal' => $this->input->post('asal')
            );
            $this->ReturnBarangModel->InsertData($data['input']);
                        
            redirect('ReturnBarang/index');
	    }
	}

	function do_delete($id){
	   $this->ReturnBarangModel->DeleteData($id);
	   redirect('ReturnBarang/index');
	} 


	public function panggilreturnbarang(){
		$data['ReturnBarang'] = $this->ReturnBarangModel->GetAll();	
		$this->load->view('Header');
		$this->load->view('ReturnBarang/LihatReturnBarang',$data);
		$this->load->view('Footer');
		
	}

	function do_update(){
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('asal', 'Asal', 'required');

		$id = $this->uri->segment(3);
		$data['show_return'] = $this->ReturnBarangModel->getsingle($id);
		$data['asal'] = $this->ReturnBarangModel->dropdown_asal();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Template/HeaderPangkalan');
	        $this->load->view('ReturnBarang/UpdateReturnBarang', $data);
			$this->load->view('Template/FooterPangkalan');	
		} else {
            $data['input'] = array(
            	'tanggal' => $this->input->post('tanggal'),
                'jumlah' => $this->input->post('jumlah'),
            	'keterangan' => $this->input->post('keterangan'),
            	'asal' => $this->input->post('asal')
            );

            $this->ReturnBarangModel->UpdateData($id, $data['input']);
                    
            redirect('ReturnBarang/index');
		}
	}
}

?>