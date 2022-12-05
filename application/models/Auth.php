<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {
    public function register($data, $table){
        $this->db->insert($table, $data);
    }

    function login_user($username,$password)
    {
        $query = $this->db->get_where('user',array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username',$username);
                $this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }
    
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
            redirect('login');
        }
    }

}

/* End of file Auth.php */

?>