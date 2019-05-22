<?php defined('BASEPATH') OR exit('No direct script access allowed');
class LoginModel extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    public function login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('login');
        
        if($result->num_rows() == 1){
            return $result->row(0);
        } else {
            return false;
        }
    }

       public function get_user_level($id_login) {
       // Dapatkan data level
       $this->db->select('level');
       $this->db->where('id_login', $id_login);
       $result = $this->db->get('user');
       if ($result->num_rows() == 1) {
            return $result->row(0)->level;
        } else {
            return false;
        }
   }

}