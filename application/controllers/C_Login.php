<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->library('session');
	}
 
	public function index()
	{
		$this->load->view('V_Login');
	}

	public function cekAkun()
  	{
    	//load ModelLogin
    	$this->load->model('ModelLogin');
	
	    // //membuat validasi login
	    // $username = 'admin';
	    // $password = '123';

    	$query = $this->ModelLogin->cekAkun($username,$password);

    	if ($query === 1)
    	{
      		$this->session->set_flashdata('msg', 'The USERNAME entered is incorrect!!');
      		redirect('controllerlogin/index');
    	}
    	else if ($query === 2) 
    	{
    		$this->session->set_flashdata('msg', 'The PASSWORD entered is incorrect!!');
      		redirect('controllerlogin/index');
    	}
    	else
    	{
      		//membuat session dengan nama userdata
      		$userData = array(
        	'id_login' => $query->id_login,
        	'username' => $query->username,
        	'password' => $query->password,
        	'level' => $query->level,
        	'logged_in' => TRUE
       		);
      		$this->session->set_userdata($userData);
	      	return TRUE;
    	}
  	}

  	public function login()
	{
	    //proses login dan validasi nya
	    if ($this->input->post('submit'))
	    {
	   		$this->load->model('ModelLogin');
	   		$this->form_validation->set_rules('input_username', 'Username', 'required');
	   		$this->form_validation->set_rules('input_password', 'Password', 'required');
	   		$error = $this->cekAkun();

	      	if ($this->form_validation->run() && $error === TRUE)
	      	{
	      			$username = $this->input->post('input_username');
	      			$password = $this->input->post('input_password');
	      			$data = $this->ModelLogin->cekAkun($username, $password);
	      			if($data->idlevel == agen){
	      				redirect('Agen');
	      			}
	      			else if($data->idlevel == pangkalan){
	      				redirect('Pangkalan','refresh');
	      			}
	    	}
	    	//Jika bernilai FALSE maka tampilkan error
	    	else
	    	{
	       		$data['error'] = $error;
	        	$this->load->view('V_Login', $data);
	    	}
	    }
	    //Jika tidak maka alihkan kembali ke halaman login
	    else
	    {
	    	$this->load->view('V_Login');
	    }
  	}

  	public function logout()
  	{
    	//Menghapus semua session (sesi)
    	$this->session->sess_destroy();
    	redirect('C_Login/index');
  	}
}

/* End of file controllerlogin.php */
/* Location: ./application/controllers/controllerlogin.php */
?>