<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengecer extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('PengecerModel');
		$this->load->library('form_validation', 'session', 'database');
	}

	public function index(){
		$data['Pengecer'] = $this->PengecerModel->GetAll();	
		$this->load->view('Template/HeaderPangkalan');
		$this->load->view('Pengecer/DataPengecer',$data);
		$this->load->view('Template/FooterPangkalan');

	}

	public function panggilpengecer(){
		$data['Pengecer'] = $this->PengecerModel->GetAll();	
		$this->load->view('Header');
		$this->load->view('Pengecer/LihatPengecer',$data);
		$this->load->view('Footer');
		
	}

	function do_insert(){
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('nama_member', 'NAMA PEMBELI', 'required');
		$this->form_validation->set_rules('alamat', 'ALAMAT PEMBELI', 'required');
		$this->form_validation->set_rules('no_tlp', 'NO TELEPON PEMBELI', 'required');
		//$this->form_validation->set_rules('paraf_pembeli', 'PARAF PEMBELI', 'required');
		$this->form_validation->set_rules('jenis', 'JENIS', 'required');

		// $data['jenis'] = $this->PengecerModel->dropdown_jenis($id);
		if ($this->form_validation->run() == FALSE)
	    {
	    	$this->load->view('Template/HeaderPangkalan');
	    	$this->load->view('Pengecer/Addpengecer');
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
                	'no_reg' => $this->input->post('no_reg'),
                    'nama_member' => $this->input->post('nama_member'),
                    'nama_pangkalan' => $this->input->post('nama_pangkalan'),
                    'alamat' => $this->input->post('alamat'),
                    'no_ktp' => $this->input->post('no_ktp'),
                    'no_tlp' => $this->input->post('no_tlp'),
                    // 'id_login' => $this->input->post('id_login'),
                    'paraf_pembeli' => $this->upload->data('file_name'),
                    'jenis' => $this->input->post('jenis')
                );
                        
                $this->PengecerModel->InsertData($data['input']);
                        
                redirect('Pengecer/index');
            }
		}
	}

	public function do_delete($id){
	  $this->PengecerModel->DeleteData($id);
	   redirect('Pengecer/index');
	 }

	 public function updatepengecer($id) {
		$where = array('id_member' => $id);
		$data['ngecer'] = $this->PengecerModel->getedit('pengecer',$where)->result();
		
		       $this->load->view('Template/HeaderPangkalan');
	       $this->load->view('Pengecer/index', $data);
		$this->load->view('Template/FooterPangkalan');
	}

	 function do_update($id){
	 	$this->load->helper('form');
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('nama_member', 'NAMA PEMBELI', 'required');
		$this->form_validation->set_rules('alamat', 'ALAMAT PEMBELI', 'required');
		$this->form_validation->set_rules('no_tlp', 'NO TELEPON PEMBELI', 'required');
		// $this->form_validation->set_rules('paraf_pembeli', 'PARAF PEMBELI', 'required');
		$this->form_validation->set_rules('jenis', 'JENIS', 'required');


		$id = $this->uri->segment(3);
		$data['show_pengecer'] = $this->PengecerModel->getsingle($id);
		$old_image = $data['show_pengecer']->paraf_pembeli;
		// $data['show_gambar'] = $this->PengecerModel->get_preview($id);
		// $old_image = $data['show_gambar']->gambar;

		// $data['jenis'] = $this->PengecerModel->dropdown_jenis();
			
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Template/HeaderPangkalan');
	        $this->load->view('Pengecer/UpdatePengecer', $data);
			$this->load->view('Template/FooterPangkalan');	

		} else {       
			// // Apakah user upload gambar?
    		if ( isset($_FILES['paraf_pembeli']) && $_FILES['paraf_pembeli']['size'] > 0 )
    		{

           		$config['upload_path'] = 'assets/img/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                //Memulai Upload
                $this->load->library('upload', $config);
                //Cek kondisi upload
                if ( ! $this->upload->do_upload('paraf_pembeli')){
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                    $post_image = '';
	            } else {
	            	if( !empty($old_image) ) {
    	        		if ( file_exists( './assets/img/'.$old_image ) ){
    	        		    unlink( './assets/img/'.$old_image );
    	        		} else {
    	        		    echo 'File tidak ditemukan.';
    	        		}
    	        	}
    	        	// Simpan nama file-nya jika berhasil diupload
    	            $img_data = $this->upload->data();
    	            $post_image = $img_data['file_name'];
    	        }  
    	    } else {
	    			$post_image = ( !empty($old_image) ) ? $old_image : '';
	    		}

	                // $data = array('upload_data' => $this->upload->data());
	                    // Data input ke model
	            //         $data = array(
	            //            	'no_reg' => $this->input->post('no_reg'),
	            //         	'nama_member' => $this->input->post('nama_member'),
	            //         	'nama_pangkalan' => $this->input->post('nama_pangkalan'),
	            //         	'alamat' => $this->input->post('alamat'),
	            //         	'no_ktp' => $this->input->post('no_ktp'),
	            //         	'no_tlp' => $this->input->post('no_tlp'),
	            //         	'id_login' => $this->input->post('id_login'),
	            //         	// 'paraf_pembeli' => $this->upload->data('file_name'),
	            //         	'paraf_pembeli' => $post_image,
	            //         	'jenis' => $this->input->post('jenis')
	            //         );
	            $res = $this->PengecerModel->UpdateData($id, $post_image);
	            if($res>=1){
	            	//kembali ke home
                    redirect('Pengecer/index');
	            }
                    
    		}       
		
	}
}


