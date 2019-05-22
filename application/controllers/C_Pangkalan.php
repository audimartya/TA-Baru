<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class C_Pangkalan extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url','form');
			$this->load->database();
			$this->load->model('modelPangkalan');
			$this->load->library('form_validation');
			$this->load->library('session');
		}

		public function index()
		{
			$dataPangkalan['Pangkalan']=$this->modelPangkalan->readPangkalan();
			$this->load->view('V_DataPangkalan',$dataPangkalan);
		}

		public function viewAdd()
		{
			//$data['last']=$this->modelPangkalan->lastPangkalan();
			$data['level'] = $this->modelPangkalan->dropdown_level();
			$this->load->view('V_AddDataPangkalan',$data);
		}

		public function addPangkalan()
		{
			$this->form_validation->set_rules('no_reg', 'no_reg', 'trim|required');
			$this->form_validation->set_rules('nama_member', 'nama_member', 'trim|required');
			$this->form_validation->set_rules('nama_pangkalan', 'nama_pangkalan', 'trim|required');
			$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
			$this->form_validation->set_rules('no_ktp', 'no_ktp', 'trim|required');
			$this->form_validation->set_rules('no_tlp', 'no_tlp', 'trim|required');
			// $this->form_validation->set_rules('id_login', 'id_login', 'trim|required');
			// $this->form_validation->set_rules('paraf_pembeli', 'paraf_pembeli', 'trim|required');
			// $this->form_validation->set_rules('jenis', 'jenis', 'trim|required');

			$data['level'] = $this->modelPangkalan->dropdown_level();

			if($this->form_validation->run() == FALSE)
			{
				redirect('C_Pangkalan/viewAdd', $data, FALSE);
			} else {
	    		$senddata['no_reg_in']=$this->input->post('no_reg');
	    		$senddata['nama_member_in']=$this->input->post('nama_member');
	    		$senddata['nama_pangkalan_in']=$this->input->post('nama_pangkalan');
	    		$senddata['alamat_in']=$this->input->post('alamat');
	    		$senddata['no_ktp_in']=$this->input->post('no_ktp');
	    		$senddata['no_tlp_in']=$this->input->post('no_tlp');
	    		// $senddata['id_login_in']=$this->input->post('id_login');
	    		// // $senddata['paraf_pembeli_in']=$this->input->post('paraf_pembeli');
	    		// $senddata['jenis_in']=$this->input->post('jenis');
				$back['jumlah']=$this->modelPangkalan->addPangkalan($senddata);
				$kembali['Pangkalan']=$this->modelPangkalan->readPangkalan();
				$this->load->view('V_DataPangkalan', $kembali);
			}
		}

		function editPangkalan($indexdata)
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('no_reg', 'no_reg', 'trim|required');
			$this->form_validation->set_rules('nama_member', 'nama_member', 'trim|required');
			$this->form_validation->set_rules('nama_pangkalan', 'nama_pangkalan','trim|required');
			$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
			$this->form_validation->set_rules('no_ktp', 'no_ktp', 'trim|required');
			$this->form_validation->set_rules('no_tlp', 'no_tlp', 'trim|required');
			// $this->form_validation->set_rules('id_login', 'id_login', 'trim|required');
			// $this->form_validation->set_rules('jenis', 'jenis', 'trim|required');
		
			if($this->form_validation->run() == FALSE)
			{
				$datarow['satubaris']=$this->modelPangkalan->readdata_indexPangkalan($indexdata);
				$this->load->view('V_EditDataPangkalan', $datarow);
			} else {
				$krm['no_reg_up']=$this->input->post('no_reg');
				$krm['nama_member_up']=$this->input->post('nama_member');
		
				$krm['nama_pangkalan_up']=$this->input->post('nama_pangkalan');
				$krm['alamat_up']=$this->input->post('alamat');
				$krm['no_ktp_up']=$this->input->post('no_ktp');
				$krm['no_tlp_up']=$this->input->post('no_tlp');
				// $krm['id_login_up']=$this->input->post('id_login');
				// $krm['paraf_pembeli_up']=$this->input->post('paraf_pembeli');
				// $krm['jenis_up']=$this->input->post('jenis');
				$krm['index']=$indexdata;
										
				$kembali['jumlah']=$this->modelPangkalan->editPangkalan($krm);
				$kembali['Pangkalan']=$this->modelPangkalan->readPangkalan();
				$this->load->view('V_DataPangkalan', $kembali);
			}
		}

		function delete($id)
		{
	  		$this->modelPangkalan->DeleteData($id);
	   		redirect('C_Pangkalan');
	 	}
	}
?>