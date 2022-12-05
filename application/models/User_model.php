<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function select(){
        return $this->db->get('buku');
    }

    public function insert($data, $table){
        $this->db->insert($table, $data);
    }

    public function edit($id_data, $table){
        return $this->db->get_where($table, $id_data);
    }

    public function update($data, $id_data, $table){
        $this->db->where($id_data);
        $this->db->update($table, $data);
    }

    public function delete($id_data, $table){
        $this->db->where($id_data);
        $this->db->delete($table);
    }   
}

/* End of file User_model.php */

?>