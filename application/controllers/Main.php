<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Review_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Testi User";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $data['review'] = $this->Review_model->getTable();
        $this->load->view('layout/header', $data);
        $this->load->view('user/vw_testi', $data);
        $this->load->view('layout/footer', $data);
    }

    public function hapus($id)
    {
        $this->Review_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
            fas fa-info-circle"></i>Testimoni tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
            class="icon fas fa-check-circle"></i>Testimoni Berhasil Dihapus!</div>');
        }
        redirect('Main');
    }
}
