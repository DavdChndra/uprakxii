<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth');
        $this->load->helper('url');
    }
    

    public function index()
    {
        $this->load->view('v_register');
    }

    public function proses()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        
        if($this->form_validation->run()== true){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data = [
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ];

            $this->Auth->register($data, 'user');
            $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
            redirect('login');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('register');
        }
        
    }

}


?>