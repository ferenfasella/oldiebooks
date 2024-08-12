<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Review extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('user_model', 'userrole');
        $this->load->model('Keranjang_model');
        $this->load->model('Review_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['review'] = $this->Review_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('testi', 'testi', 'required', [
            'required' => 'testi buku wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header_user", $data);
            $this->load->view("profil/review", $data);
            $this->load->view("layout/footer_user");
        } else {
            $data = [

                'id_user' =>  $this->session->userdata('id'),
                'testi' => $this->input->post('testi'),

            ];

            $this->Review_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Data Berhasil Ditambah!</div>');
            redirect('Utama/index2');
        }
    }
}
