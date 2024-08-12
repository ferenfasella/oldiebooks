<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Buku_model');
        $this->load->model('Pemesanan_model');
        $this->load->model('Penjualan_model');
        $this->load->model('User_model');
        $this->load->model('Detail_model');
    }
    function index()
    {
        // $data['judul'] = "Halaman Penjualan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->Buku_model->tbuku();
        $data['pemesanan'] = $this->Pemesanan_model->tpemesanan();
        $data['penjualan'] = $this->Penjualan_model->tpenjualan();
        $data['totalb'] = $this->Detail_model->charts();
        $data['us'] = $this->User_model->tuser();
        $this->load->view("layout/header", $data);
        $this->load->view("auth/dashboard", $data);
        $this->load->view("layout/footer");
    }

    function edit()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'nama wajib diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("auth/profil_admin", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
            ];
            
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '5000';
                $config['upload_path'] = './template/assets/img/profil/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
                    $old_image = $data['user']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'template/assets/img/profil/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                    $data = [
                        'nama' => $this->input->post('nama'),
                        'gambar' => $new_image,
                    ];
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $_GET['id'];
            $this->User_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
            redirect('Dashboard');
        }
    }
}