<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->load->model('Kategori_model');

    }

    public function index()
    {
        $data['judul'] = "Halaman Kategori";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $data['kategori']= $this->Kategori_model->get();
        $this->load->view('layout/header',$data);
        $this->load->view('kategori/vw_kategori', $data);
        $this->load->view('layout/footer',$data);
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Kategori";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->Kategori_model->get();
        $this->form_validation->set_rules('kategori', 'Kategori Buku', 'required', [
            'required' => 'Kategori buku wajib diisi'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Kategori', 'required', [
            'required' => 'Deskripsi Kategori wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("kategori/vw_tambah_kategori", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];
            $this->Kategori_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Data Kategori Berhasil Ditambah!</div>');
            redirect('Kategori');
        }
    }
    public function hapus($id)
    {
        $this->Kategori_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
        fas fa-info-circle"></i>Data Kategori tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
        class="icon fas fa-check-circle"></i>Data Kategori Berhasil Dihapus!</div>');
        }
        redirect('Kategori');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Kategori";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $data['kategori'] = $this->Kategori_model->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kategori', 'Kategori Buku', 'required', [
            'required' => 'Kategori buku wajib diisi'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Kategori', 'required', [
            'required' => 'Deskripsi Kategori wajib diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("kategori/vw_ubah_kategori", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];
           
            $id = $this->input->post('id');
            $this->Kategori_model->update(['id' => $id], $data);
            // print_r($id);
            // die;
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kategori Berhasil Diubah!</div>');
            redirect('Kategori');
        }
    }
}