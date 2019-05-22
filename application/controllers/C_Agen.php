<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class C_Agen extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url','form');
			$this->load->database();
			$this->load->model('modelAgen');
			$this->load->library('form_validation');
			$this->load->library('session');
		}
	//Read
		public function index()
		{
			$dataAgen['Agen']=$this->modelAgen->readAgen();
			$this->load->view('V_DataAgen',$dataAgen);
		}

		public function addAgen()
		{
			// if ($this->session->userdata('logged_in'))
			// {
			$this->form_validation->set_rules('nama_agen', 'nama_agen', 'trim|required');
				// $this->form_validation->set_rules('username', 'username', 'trim|required');
				// $this->form_validation->set_rules('email', 'email', 'trim|required');
				$this->form_validation->set_rules('email', 'email', 'trim|required');
				$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
				$this->form_validation->set_rules('no_soldto', 'no_soldto', 'trim|required');
				$this->form_validation->set_rules('no_shipto', 'no_shipto', 'trim|required');
				$this->form_validation->set_rules('kota', 'kota', 'trim|required');
		
				if($this->form_validation->run() == FALSE)
				{
					// $datarow['satubaris']=$this->modelAgen->readdata_indexAgen($indexdata);
					// $datacategory['category']=$this->writermodel->readcategory();
					$this->load->view('V_AddDataAgen');
				}
				else
				{
				 //  	$config['upload_path'] = './images/news/';
					// $config['allowed_types'] = 'jpg|png|jpeg';
	   	// 			$config['max_size']  = '2048';
	    // 			$config['remove_space'] = TRUE;

	    // 			$this->load->library('upload', $config);
	    // 			if (!$this->upload->do_upload('gambar')) //jika gagal upload
	    // 			{
	    // 				$error = array('error' => $this->upload->display_errors()); //tampilkan error
			  //         	$this->load->view('createnews', $error);
	    // 			}
	    // 			else
	    // 			{
	    // 				$file =array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');

	    // 				$senddata['gambar_in']=$file['file']['file_name'];
	    				$senddata['nama_agen_in']=$this->input->post('nama_agen');
	    				$senddata['email_in']=$this->input->post('email');
	    				$senddata['alamat_in']=$this->input->post('alamat');
	    				$senddata['no_soldto_in']=$this->input->post('no_soldto');
	    				$senddata['no_shipto_in']=$this->input->post('no_shipto');
	    				$senddata['kota_in']=$this->input->post('kota');
						// $senddata['isi_in']="<b>WannaNews - </b>".$this->input->post('isi');
						// $senddata['kategori_in']=$this->input->post('kategori');
						// $senddata['UID_in']=$this->session->userdata('UID');
						// $senddata['status_in']='pending';
						// $senddata['tanggal_in']= date('l, d-m-Y');
		
						$back['jumlah']=$this->modelAgen->addAgen($senddata);
						$kembali['Agen']=$this->modelAgen->readAgen();
						$this->load->view('V_DataAgen', $kembali);

						// $pesan = "The News success Added";
		
						// $this->session->set_flashdata('msg', $pesan);
						// redirect('writer/index');
	    	// 		// }
				}
			// }
			// else
			// {
			// 	$this->session->set_flashdata('msg', 'You Must SIGN IN To Access The Writer Page!!');
			// 	redirect('controllerlogin/index');
			// }
		}

		public function editAgen($indexdata)
		{
			// if ($this->session->userdata('logged_in'))
			// {
				$this->form_validation->set_rules('nama_agen', 'nama_agen', 'trim|required');
				// $this->form_validation->set_rules('username', 'username', 'trim|required');
				// $this->form_validation->set_rules('email', 'email', 'trim|required');
				$this->form_validation->set_rules('nama_agen', 'nama_agen', 'trim|required');
				$this->form_validation->set_rules('email', 'email', 'trim|required');
				$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
				$this->form_validation->set_rules('no_soldto', 'no_soldto', 'trim|required');
				$this->form_validation->set_rules('no_shipto', 'no_shipto', 'trim|required');
				$this->form_validation->set_rules('kota', 'kota', 'trim|required');
		
				if($this->form_validation->run()==FALSE)
				{
					$datarow['satubaris']=$this->modelAgen->readdata_indexAgen($indexdata);
					// $datacategory['category']=$this->writermodel->readcategory();

					$this->load->view('V_EditDataAgen', $datarow);
					// $this->load->view('kategori',$datacategory);
				}
				else
				{
					// $config['upload_path'] = './images/news/';
					// $config['allowed_types'] = 'jpg|png|jpeg';
	   	// 			$config['max_size']  = '2048';
	    // 			$config['remove_space'] = TRUE;

	    // 			$this->load->library('upload', $config);
	    // 			if (!$this->upload->do_upload('up_gambar')) //jika gagal upload
	    // 			{

					// 	$krm['judul_up']=$this->input->post('up_judul');
					// 	$krm['isi_up']=$this->input->post('up_isi');
					// 	$krm['kategori_up']=$this->input->post('up_kategori');
					// 	$krm['index']=$indexdata;
		
					
					// 	$kembali['jumlah']=$this->writermodel->editnewsnopicture($krm);
		
					// 	$kembali['array']=$this->writermodel->readnews($this->session->userdata('UID'));
					// 	$this->load->view('datauser', $kembali);
		
					// 	$pesan = "The News Successfull Edited";
		
					// 	$this->session->set_flashdata('msg', $pesan);
					// 	redirect('writer');
					// }
					// else
					// {
					// 	$file =array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');

					// 	$krm['picture_up']=$file['file']['file_name'];
						$krm['nama_agen_up']=$this->input->post('nama_agen');
						$krm['nama_agen']=$this->input->post('nama_agen');
						$krm['email_up']=$this->input->post('email');
						$krm['alamat_up']=$this->input->post('alamat');
						$krm['no_soldto_up']=$this->input->post('no_soldto');
						$krm['no_shipto_up']=$this->input->post('no_shipto');
						$krm['kota_up']=$this->input->post('kota');
						$krm['index']=$indexdata;
										
						$kembali['jumlah']=$this->modelAgen->editAgen($krm);
			
						// $kembali['array']=$this->writermodel->readAgen($this->session->userdata('UID'));
						$kembali['Agen']=$this->modelAgen->readAgen();
						$this->load->view('V_DataAgen', $kembali);
			
						// $pesan = "The News Success Edited";
			
						// $this->session->set_flashdata('msg', $pesan);
						// redirect('writer');
					// }
				}
			// }
			// else
			// {
			// 	$this->session->set_flashdata('msg', 'You Must SIGN IN To Access The Writer Page!!');
			// 	redirect('controllerlogin/index');
			// }
		}

		public function deleteAgen($indexdata)
		{
			// if ($this->session->userdata('logged_in'))
			// {
			// 	if ($this->session->userdata('level') == 'admin')
			// 	{
					$this->form_validation->set_rules('del_nama_Agen', 'namaPemilik', 'trim|required');
					$this->form_validation->set_rules('del_pemilik', 'namaPemilik', 'trim|required');
					$this->form_validation->set_rules('del_alamat', 'alamat', 'trim|required');
					$this->form_validation->set_rules('del_noKtp', 'noKtp', 'trim|required');
					$this->form_validation->set_rules('del_noTelp', 'noTelp', 'trim|required');
			
					if($this->form_validation->run()==FALSE)
					{
						$datarow['satubaris']=$this->modelAgen->readdata_indexAgen($indexdata);
						$this->load->view('Agen/delete', $datarow);
					}
					else
					{
						// $krm['judul_del']=$this->input->post('del_judul');
						// $krm['isi_del']=$this->input->post('del_isi');
						// $krm['kategori_del']=$this->input->post('del_kategori');
						$krm['index']=$indexdata;
											
						$kembali['jumlah']=$this->modelAgen->deleteAgen($krm);
				
						$kembali['Agen']=$this->modelAgen->readAgen();
						$this->load->view('Agen/read', $kembali);
				
						// $pesan = "The News Successful Removed";
				
						// $this->session->set_flashdata('msg1', $pesan);
						// redirect('admin/datanews');
					}
			// 	}
			// 	else
			// 	{
			// 		$this->session->set_flashdata('msg', 'You Cannot Access The Admin Page!!');
			// 		redirect('writer/index');
			// 	}
			// }
			// else
			// {
			// 	$this->session->set_flashdata('msg', 'You Must SIGN IN To Access The Admin Page!!');
			// 	redirect('controllerlogin/index');
			// }
		}
	
	}
	
	/* End of file ControllerAgen.php */
	/* Location: ./application/controllers/ControllerBarang.php */
?>