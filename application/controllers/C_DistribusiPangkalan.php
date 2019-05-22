<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class C_DistribusiPangkalan extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url','form');
			$this->load->database();
			$this->load->model('modelDistribusiPangkalan');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
	//Read
		public function index()
		{
			
			$data['all'] = $this->modelDistribusiPangkalan->readDistribusiPangkalan();
			$this->load->view('V_DataDistribusiPangkalan', $data);
		}

		public function viewAdd()
		{
			$this->load->model('modelPangkalan');
			$data['data'] = $this->modelPangkalan->readPangkalan();
			$data['last']=$this->modelDistribusiPangkalan->lastDistribusiPangkalan();
			$this->load->view('V_AddDataDistribusiPangkalan',$data);
		}

		public function addDistribusiPangkalan()
		{
			// if ($this->session->userdata('logged_in'))
			// {
			$data['tujuan'] = $this->modelDistribusiPangkalan->dropdown_tujuan();
				
				// $this->form_validation->set_rules('id_kirim1', 'id_kirim1', 'trim|required');
				$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
				$this->form_validation->set_rules('jumlah_gas', 'jumlah_gas', 'trim|required');
				$this->form_validation->set_rules('tujuan', 'tujuan', 'trim|required');
				
				if($this->form_validation->run() == FALSE)
				{
					// $datarow['satubaris']=$this->modelDistribusiPangkalan->readdata_indexDistribusiPangkalan($indexdata);
					// $datacategory['category']=$this->writermodel->readcategory();
					redirect('C_DistribusiPangkalan/viewAdd', $data);
				}
				else
				{
				 
	    				// $senddata['id_kirim1_in']=$this->input->post('id_kirim1');
	    				$senddata['tanggal_in']=$this->input->post('tanggal');
	    				$senddata['jumlah_gas_in']=$this->input->post('jumlah_gas');
	    				$senddata['tujuan_in']=$this->input->post('tujuan');
						$back['jumlah']=$this->modelDistribusiPangkalan->addDistribusiPangkalan($senddata);
						redirect('C_DistribusiPangkalan');

		}
	}


		public function editDistribusiPangkalan($id)
		{
			// if ($this->session->userdata('logged_in'))
			// {
				
				// $this->form_validation->set_rules('id_kirim1', 'id_kirim1', 'trim|required');
				$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
				$this->form_validation->set_rules('jumlah_gas', 'jumlah_gas', 'trim|required');
				$this->form_validation->set_rules('tujuan', 'tujuan', 'trim|required');
				
				if($this->form_validation->run()==FALSE)
				{
					$datarow['satubaris']=$this->modelDistribusiPangkalan->EditNamaPangkalan($id);
					$datarow['dropdownNama'] = $this->modelDistribusiPangkalan->dropdownNama();
					// $datacategory['category']=$this->writermodel->readcategory();

					$this->load->view('V_EditDataDistribusiPangkalan', $datarow);
					// $this->load->view('kategori',$datacategory);
				}
				else
				{
					
						// $krm['id_kirim1_up']=$this->input->post('id_kirim1');
						$krm['tanggal_up']=$this->input->post('tanggal');
		
						$krm['jumlah_gas_up']=$this->input->post('jumlah_gas');
						$krm['tujuan_up']=$this->input->post('tujuan');
						
						$krm['index']=$id;
										
						$kembali['jumlah']=$this->modelDistribusiPangkalan->editDistribusiPangkalan($krm);
						//

						// $kembali['array']=$this->writermodel->readDistribusiPangkalan($this->session->userdata('UID'));
						redirect('C_DistribusiPangkalan');
			
						
				}
			
		}

		public function delete($id)
		{
	  $this->modelDistribusiPangkalan->DeleteData($id);
	   redirect('C_DistribusiPangkalan');
	 	}
	
	}
	
	/* End of file ControllerDistribusiPangkalan.php */
	/* Location: ./application/controllers/ControllerBarang.php */
?>