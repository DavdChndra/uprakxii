<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login extends CI_Controller {
  
     function __construct()
     {
         parent::__construct();
         $this->load->model('Auth');
     }
  
     public function index()
     {
         $this->load->view('v_login');
     }
  
     public function proses()
     {

         $username = $this->input->post('username');
         $password = $this->input->post('password');
         if($this->Auth->login_user($username,$password))
         {
             redirect('user');
         }
         else
         {
             $this->session->set_flashdata('error','Username & Password salah');
             redirect('login');
         }
     }
  
     public function logout()
     {
         $this->session->unset_userdata('username');
         $this->session->unset_userdata('is_login');
         redirect('login');
     }
  
     
  
 } ?>