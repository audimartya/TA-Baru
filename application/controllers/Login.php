<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
                
        $this->load->library('form_validation');
        $this->load->model('LoginModel');
    }

    public function index(){
        $this->load->view('Template/Login');
    }

    function login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('Template/Login');
        } else {
            // Get username
            $username = $this->input->post('username');
            // Get & encrypt password
            $password = md5($this->input->post('password'));
            // Login user
            $data_login = $this->LoginModel->login($username, $password);

            if($data_login){
                // Buat session
                $data = array(
                    'id_login' => $data_login->id_login,
                    'username' => $username,
                    'level' => $data_login->level
                );
                $this->session->set_userdata($data);
                // Set message
                $this->session->set_flashdata('user_loggedin', 'Anda sudah login');

                if ($data_login->level == 'agen') {
                    # code...
                    redirect('C_Pangkalan/');
                } else {
                    redirect('Pengecer/');
                }

                if(!empty($_POST["remember"])) {
                    setcookie ("user_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
                      setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
                     } 

                
            } else {
                // Set message
                $this->session->set_flashdata('login_failed', 'Login invalid');
                redirect('Login/Login');

            }       
        }
    }

    public function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
    }

    function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id_login');
        $this->session->unset_userdata('username');
        // Set message
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');
        redirect('Login/login');
    }

}