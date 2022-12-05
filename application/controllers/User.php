<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');
    }
    

    public function index()
    {
        $data['buku'] = $this->User_model->select('buku')->result();
        $this->load->view('v_home', $data);
    }

    public function input(){
        $this->load->view('v_input');
    }

    public function insert(){
        $nama_lengkap = $this->input->post('nama_lengkap');
        $nis = $this->input->post('nis');
        $kelas = $this->input->post('kelas');
        $judul_buku = $this->input->post('judul_buku');
        $tgl_pinjam = $this->input->post('tgl_pinjam');
        $tgl_kembali = $this->input->post('tgl_kembali');

        $data = [
            'nama_lengkap' => $nama_lengkap,
            'nis' => $nis,
            'kelas' => $kelas,
            'judul_buku' => $judul_buku,
            'tgl_pinjam' => $tgl_pinjam,
            'tgl_kembali' => $tgl_kembali
        ];

        $this->User_model->insert($data, 'buku');
        redirect('user');
    }

    public function edit($id)
    {
        $id_buku = [
            'id' => $id
        ];
        $data['buku'] = $this->User_model->edit($id_buku, 'buku')->result();
        $this->load->view('v_edit', $data);
    }

    public function update($id){
        $nama_lengkap = $this->input->post('nama_lengkap');
        $nis = $this->input->post('nis');
        $kelas = $this->input->post('kelas');
        $judul_buku = $this->input->post('judul_buku');
        $tgl_pinjam = $this->input->post('tgl_pinjam');
        $tgl_kembali = $this->input->post('tgl_kembali');

        $data = [
            'nama_lengkap' => $nama_lengkap,
            'nis' => $nis,
            'kelas' => $kelas,
            'judul_buku' => $judul_buku,
            'tgl_pinjam' => $tgl_pinjam,
            'tgl_kembali' => $tgl_kembali
        ];

        $id_data = [
            'id' => $id
        ];

        $this->User_model->update($data, $id_data, 'buku');
        redirect('user');
    }

    public function delete($id)
    {
        $id_buku = [
            'id' => $id
        ];
        $this->User_model->delete($id_buku, 'buku');
        redirect('user');
    }
}

/* End of file User.php */

?>