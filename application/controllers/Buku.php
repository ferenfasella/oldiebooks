<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{


    public function __construct()
    {

        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->model('Kategori_model');

    }

    public function index()
    {
        $data['judul'] = "Halaman Buku";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $data['buku']= $this->Buku_model->get();
        $this->load->view('layout/header',$data);
        $this->load->view('buku/vw_buku', $data);
        $this->load->view('layout/footer',$data);
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Buku";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->Buku_model->get();
        $data['kategori'] = $this->Kategori_model->get();
        $this->form_validation->set_rules('judul', 'Judul Buku', 'required', [
            'required' => 'Judul buku wajib diisi'
        ]);
        $this->form_validation->set_rules('pengarang', 'Pengarang Buku', 'required', [
            'required' => 'Pengarang buku wajib diisi'
        ]);
        $this->form_validation->set_rules('penerbit', 'Penerbit Buku', 'required', [
            'required' => 'Penerbit buku wajib diisi'
        ]);
        $this->form_validation->set_rules('kategori', 'Kategori Buku', 'required', [
            'required' => 'Kategori buku Wajib diisi'
        ]);
        $this->form_validation->set_rules('kondisi', 'Kondisi Buku', 'required', [
            'required' => 'Kondisi buku wajib diisi'
        ]);
        $this->form_validation->set_rules('berat', 'Berat Buku', 'required', [
            'required' => 'Berat buku wajib diisi'
        ]);
        $this->form_validation->set_rules('stok', 'Stok Buku', 'required|integer', [
            'required' => 'Stok buku wajib diisi',
            'integer' => 'Stok buku harus angka'
        ]);
        $this->form_validation->set_rules('harga', 'Harga Buku', 'required|integer', [
            'required' => 'Harga buku wajib diisi',
            'integer' => 'Harga buku harus angka'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("buku/vw_tambah_buku", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'pengarang' => $this->input->post('pengarang'),
                'penerbit' => $this->input->post('penerbit'),
                'kategori' => $this->input->post('kategori'),
                'kondisi' => $this->input->post('kondisi'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
                'berat' => $this->input->post('berat'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '5000';
                $config['upload_path'] = './template/assets/img/buku/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Buku_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Data Buku Berhasil Ditambah!</div>');
            redirect('Buku');
        }
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Buku";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $data['buku']= $this->Buku_model->getById($id);
        $this->load->view('layout/header', $data);
        $this->load->view('buku/vw_detail_buku', $data);
        $this->load->view('layout/footer');
    }
    public function hapus($id)
    {
        $this->Buku_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
        fas fa-info-circle"></i>Data Buku tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
        class="icon fas fa-check-circle"></i>Data Buku Berhasil Dihapus!</div>');
        }
        redirect('Buku');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Buku";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $data['buku'] = $this->Buku_model->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->Kategori_model->get();
        $this->form_validation->set_rules('judul', 'Judul Buku', 'required', [
            'required' => 'Judul buku wajib diisi'
        ]);
        $this->form_validation->set_rules('pengarang', 'Pengarang Buku', 'required', [
            'required' => 'Pengarang buku wajib diisi'
        ]);
        $this->form_validation->set_rules('penerbit', 'Penerbit Buku', 'required', [
            'required' => 'Penerbit buku wajib diisi'
        ]);
        $this->form_validation->set_rules('kategori', 'Kategori Buku', 'required', [
            'required' => 'Kategori buku Wajib diisi'
        ]);
        $this->form_validation->set_rules('kondisi', 'Kondisi Buku', 'required', [
            'required' => 'Kondisi buku wajib diisi'
        ]);
        $this->form_validation->set_rules('berat', 'Berat Buku', 'required', [
            'required' => 'Berat buku wajib diisi'
        ]);
        $this->form_validation->set_rules('stok', 'Stok Buku', 'required|integer', [
            'required' => 'Stok buku wajib diisi',
            'integer' => 'Stok buku harus angka'
        ]);
        $this->form_validation->set_rules('harga', 'Harga Buku', 'required|integer', [
            'required' => 'Harga buku wajib diisi',
            'integer' => 'Harga buku harus angka'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("buku/vw_ubah_buku", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'pengarang' => $this->input->post('pengarang'),
                'penerbit' => $this->input->post('penerbit'),
                'kategori' => $this->input->post('kategori'),
                'kondisi' => $this->input->post('kondisi'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
                'berat' => $this->input->post('berat'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '5000';
                $config['upload_path'] = './template/assets/img/buku/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['buku']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'template/assets/img/buku/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Buku_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku Berhasil Diubah!</div>');
            redirect('Buku');
        }
    }

}