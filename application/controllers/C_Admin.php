<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class C_Admin extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url','form');
			$this->load->database();
			$this->load->model('modelAdmin');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
	//Read
		public function index()
		{
			$DataLogin['Login']=$this->modelAdmin->readLogin();
			$this->load->view('V_DataLogin',$DataLogin);
		}

		public function addLogin()
		{
				$this->form_validation->set_rules('username', 'username', 'trim|required');
				$this->form_validation->set_rules('password', 'password', 'trim|required');
				$this->form_validation->set_rules('level', 'level', 'trim|required');
				
				if($this->form_validation->run() == FALSE)
				{
					// $datarow['satubaris']=$this->modelAdmin->readdata_indexLogin($indexdata);
					// $datacategory['category']=$this->writermodel->readcategory();
					$this->load->view('V_AddDataLogin');
				}
				else
				{

	    // 				$senddata['gambar_in']=$file['file']['file_name'];
	    			 
	    				$senddata['username_in']=$this->input->post('username');
	    				$senddata['password_in']=$this->input->post('password');
	    				$senddata['level_in']=$this->input->post('level');
						$back['jumlah']=$this->modelAdmin->addLogin($senddata);
						$kembali['Login']=$this->modelAdmin->readLogin();
						$this->load->view('V_DataLogin', $kembali);
					}
		}

		public function editLogin($indexdata)
		{
				$this->form_validation->set_rules('username', 'username', 'trim|required');
				$this->form_validation->set_rules('password', 'password', 'trim|required');
				$this->form_validation->set_rules('level', 'level', 'trim|required');
				
				if($this->form_validation->run()==FALSE)
				{
					$datarow['satubaris']=$this->modelAdmin->readdata_indexLogin($indexdata);
					// $datacategory['category']=$this->writermodel->readcategory();

					$this->load->view('V_EditDataLogin', $datarow);
					// $this->load->view('kategori',$datacategory);
				}
				else
				{
						$krm['username_up']=$this->input->post('username');
						$krm['password_up']=$this->input->post('password');
						$krm['level_up']=$this->input->post('level');
						$krm['index']=intval($indexdata);
										
						$kembali['jumlah']=$this->modelAdmin->editLogin($krm);
			
						// $kembali['array']=$this->writermodel->readLogin($this->session->userdata('UID'));
						$kembali['Login']=$this->modelAdmin->readLogin();
						$this->load->view('V_DataLogin', $kembali);
					}
		}

		public function deleteLogin($indexdata)
		{
	
																
						$kembali['jumlah']=$this->modelAdmin->deleteLogin($indexdata);
						redirect('C_Admin');
					
		}
	
	}
?>