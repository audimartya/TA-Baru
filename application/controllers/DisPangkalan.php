<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisPangkalan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('DisPangkalanModel');
		$this->load->library('form_validation', 'session', 'database');

		$sess = $this->session->userdata('id_login');
		$ses = $this->session->userdata('level');

		if($sess == null) {
			redirect('Login/');
		 } 
		// 	// else {
		// 	// if($ses['level'] != "pangkalan"){
		// 	// 	if ($ses['level'] == "agen") {
		// 	// 		redirect('C_Pangkalan/');
		// 	// 	}
		// 	// }
		// }
	}

	function index(){
		$data['DisPangkalan'] = $this->DisPangkalanModel->GetAll();	
		$this->load->view('Template/HeaderPangkalan');
		$this->load->view('DisPangkalan/DataDisPangkalan',$data);
		$this->load->view('Template/FooterPangkalan');
	}

	 // function pagination()
  //       {   
  //           $limit_per_page = 4;
  //           $start_index = ( $this->uri->segment(4) ) ? $this->uri->segment(4) : 0;
  //           $total_records = $this->DisPangkalanModel->GetAll();
  //           $data["all_news"] = $this->List_Blog->get_articles($limit_per_page, $start_index);
  //           $config['base_url'] = base_url() . 'Blog/index';
  //           $config['total_rows'] = $total_records;
  //           $config['per_page'] = $limit_per_page;
  //           $config["uri_segment"] = 4;
  //           $this->pagination->initialize($config);
  //           $data["links"] = $this->pagination->create_links();
  //           $this->load->view('Header');
  //           $this->load->view('blog/v_Blog', $data);            
  //       }

	function do_insert(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jumlah_gas', 'Jumlah Gas', 'required');
		$this->form_validation->set_rules('nama_pembeli', 'Nama Pembeli', 'required');
		$this->form_validation->set_rules('no_tlp', 'No Telepon Pembeli', 'required');
		$this->form_validation->set_rules('alamat_pembeli', 'Alamat Pembeli', 'required');
		$this->form_validation->set_rules('jenis_pembeli', 'Jenis Pembeli', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		$this->form_validation->set_rules('asal', 'Asal', 'required');
		$this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
		//$this->form_validation->set_rules('asal', 'Asal', 'required');

		$data['tujuan'] = $this->DisPangkalanModel->dropdown_tujuan();
		$data['asal'] = $this->DisPangkalanModel->asal();

		if ($this->form_validation->run() == FALSE) {
	    	$this->load->view('Template/HeaderPangkalan');
	    	$this->load->view('DisPangkalan/AddDisPangkalan', $data);
			$this->load->view('Template/FooterPangkalan');
	    } else {
	    	$config['upload_path'] = 'assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';
                    
            $this->load->library('upload', $config);
	    	if ( ! $this->upload->do_upload('paraf_pembeli')){
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $data = array('upload_data' => $this->upload->data());
	    	$data['input'] = array(
                'tanggal' => $this->input->post('tanggal'),
                'jumlah_gas' => $this->input->post('jumlah_gas'),
                'nama_pembeli' => $this->input->post('nama_pembeli'),
                'no_tlp' => $this->input->post('no_tlp'),
                'alamat_pembeli' => $this->input->post('alamat_pembeli'),
                'jenis_pembeli' => $this->input->post('jenis_pembeli'),
                'keterangan' => $this->input->post('keterangan'),
                'paraf_pembeli' => $this->upload->data('file_name'),
                'asal' => $this->input->post('asal'),
                'tujuan' => $this->input->post('tujuan')
            );
            $this->DisPangkalanModel->InsertData($data['input']);
                        
            redirect('DisPangkalan/index');
	    }
	}
	}

	function do_delete($id){
	   $this->DisPangkalanModel->DeleteData($id);
	   redirect('DisPangkalan/index');
	} 

	function do_update(){
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('jumlah_gas', 'Jumlah Gas', 'required');
		$this->form_validation->set_rules('nama_pembeli', 'Nama Pembeli', 'required');
		$this->form_validation->set_rules('no_tlp', 'No Telepon Pembeli', 'required');
		$this->form_validation->set_rules('alamat_pembeli', 'Alamat Pembeli', 'required');
		$this->form_validation->set_rules('jenis_pembeli', 'Jenis Pembeli', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		$this->form_validation->set_rules('asal', 'Asal', 'required');
		$this->form_validation->set_rules('tujuan', 'Tujuan', 'required');

		$id = $this->uri->segment(3);
		$data['show_dispa'] = $this->DisPangkalanModel->getsingle($id);
		$data['tujuan'] = $this->DisPangkalanModel->dropdown_tujuan();
		$data['asal'] = $this->DisPangkalanModel->asal();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Template/HeaderPangkalan');
	        $this->load->view('DisPangkalan/UpdateDisPangkalan', $data);
			$this->load->view('Template/FooterPangkalan');	
		} else {
				$config['upload_path'] = 'assets/img/';
            $config['allowed_types'] = 'jpg|png|jpeg';
                    
            $this->load->library('upload', $config);
	    	if ( ! $this->upload->do_upload('paraf_pembeli')){
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {

            	// if( !empty($asal && $tujuan) ) {
    	        // 		if ( file_exists( './assets/img/'.$old_image ) ){
    	        // 		    unlink( './assets/img/'.$old_image );
    	        // 		} else {
    	        // 		    echo 'File tidak ditemukan.';
    	        // 		}
    	        // 	}

                $data = array('upload_data' => $this->upload->data());
            $data['input'] = array(
                  'tanggal' => $this->input->post('tanggal'),
                'jumlah_gas' => $this->input->post('jumlah_gas'),
                'nama_pembeli' => $this->input->post('nama_pembeli'),
                'no_tlp' => $this->input->post('no_tlp'),
                'alamat_pembeli' => $this->input->post('alamat_pembeli'),
                'jenis_pembeli' => $this->input->post('jenis_pembeli'),
                'keterangan' => $this->input->post('keterangan'),
                'paraf_pembeli' => $this->upload->data('file_name'),
                'asal' => $this->input->post('asal'),
                'tujuan' => $this->input->post('tujuan')
            );

            $this->DisPangkalanModel->UpdateData($id, $data['input']);
                    
            redirect('DisPangkalan/index');
		}
	}
	}
}

?>