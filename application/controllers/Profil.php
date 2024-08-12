<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        is_logged_in2();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Buku_model');
        $this->load->model('Keranjang_model');
        $this->load->model('Pemesanan_model');
        $this->load->model('Detail_model');
        $this->load->model('Penjualan_model');
               
    }

    public function index()
    {
        $data['judul'] = "Profile Page";
        $data['user'] = $this->userrole->getBy();
        $data['buku'] = $this->Buku_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user', $data);
        $this->load->view('profil/vw_profil', $data);
        $this->load->view('layout/footer_user', $data);
    }
    public function buku()
    {
        $data['judul'] = "Shopping Page";
        $data['user'] = $this->userrole->getBy();
        $data['buku'] = $this->Buku_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user', $data);
        $this->load->view('profil/vw_buku', $data);
        $this->load->view('layout/footer_user', $data);
    }
    public function keranjang($id)
    {
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail Page";
        $data['user'] = $this->userrole->getBy();
        $data['buku'] = $this->Buku_model->getById($id);
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('jumlah',  'Jumlah', 'required', [
            'required' => 'Jumlah Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header_user", $data);
            $this->load->view("profil/vw_keranjang", $data);
            $this->load->view("layout/footer_user");
        } else {
            $data = [
                'id_user' => $this->session->userdata('id'),
                'id_buku' => $this->input->post('id'),
                'jumlah' => $this->input->post('jumlah'),
                'total' => $this->input->post('total'),
                'tanggal' => $this->input->post('tanggal'),
            ];

            $this->Keranjang_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            The book has been successfully added to cart!</div>');
            redirect('Profil/detail');
        }
    }
    public function detail()
    {
        $data['keranjang'] = $this->Keranjang_model->get();
        $data['judul'] = "Detail Keranjang";
        $data['user'] = $this->userrole->getBy();
        $data['buku'] = $this->Buku_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view("layout/header_user", $data);
        $this->load->view("profil/vw_detail_keranjang", $data);
        $this->load->view("layout/footer_user");
    }
    public function delkeranjang($id)
    {
        $this->Keranjang_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        The book has been successfully removed from the cart!</div>');
        redirect('Profil/detail');
    }
    public function pesanan()
    {

        $jumlah_beli = count($this->input->post('buku'));
        $data_p = [
            'no_pemesanan' => $this->input->post('no_pemesanan'),
            'id_user' => $this->session->userdata('id'),
            'tanggal' => $this->input->post('tanggal'),
            'total_bayar' => $this->input->post('bayar'),
            'alamat' => $this->input->post('alamat'),
            'pembayaran' => $this->input->post('pembayaran'),
            'keterangan' => $this->input->post('keterangan'),

        ];
        $upload_image = $_FILES['gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '5000';
            $config['upload_path'] = './template/assets/img/pembayaran/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data_detail = [];
        for ($i = 0; $i < $jumlah_beli; $i++) {
            array_push($data_detail, ['id_buku' => $this->input->post('buku')[$i]]);
            $data_detail[$i]['no_pemesanan'] = $this->input->post('no_pemesanan');
            $data_detail[$i]['id_user'] = $this->session->userdata('id');
            $data_detail[$i]['jumlah'] = $this->input->post('jumlah_p')[$i];
            $data_detail[$i]['total'] = $this->input->post('total_p')[$i];
        }
        if ($this->Pemesanan_model->insert($data_p, $upload_image) && $this->Detail_model->insert($data_detail)) {
            for ($i = 0; $i < $jumlah_beli; $i++){
                $this->Buku_model->min_stok($data_detail[$i]['jumlah'], $data_detail[$i]['id_buku']) or die('gagal min stok');
            }
            $id_us = $this->session->userdata('id');
            $this->Keranjang_model->delete_all($id_us);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Order successfully made!</div>');
            redirect('Profil/pembelian');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Order failed!</div>');
            redirect('Profil/buku');
        }
    }

    public function pembelian()
    {
        $data['judul'] = "Data Pembelian";
        $data['user'] = $this->userrole->getBy();
        $data['pembelian'] = $this->Pemesanan_model->getByUser();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user', $data);
        $this->load->view('profil/pembelian_user', $data);
        $this->load->view('layout/footer_user', $data);
    }

    public function statusbeli($id)
    {
        $data['judul'] = "Ubah Data Pembelian";
        $data['user'] = $this->userrole->getBy();
        $data['pembelian'] = $this->Pemesanan_model->getByUser2($id);
        $data['detailbeli'] = $this->Detail_model->getByUser($id);
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status is required'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header_user", $data);
            $this->load->view("profil/detail_beli", $data);
            $this->load->view("layout/footer_user");
        } else {
            $status = $this->input->post('status');
            $nojual = $this->input->post('no_pemesanan');
            $this->Pemesanan_model->updatestatus($status, $nojual);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status changed successfully</div>');
            redirect('Profil/pembelian');
        }
    }
    public function about()
    {
        $data['judul'] = "Profile Page";
        $data['user'] = $this->userrole->getBy();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user', $data);
        $this->load->view('profil/vw_about', $data);
        $this->load->view('layout/footer_user', $data);
    }
    public function penjualan()
    {
        $data['judul'] = "Profile Page";
        $data['user'] = $this->userrole->getBy();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user', $data);
        $this->load->view('profil/penjualan_user', $data);
        $this->load->view('layout/footer_user', $data);
    }

    
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Buku";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penjualan'] = $this->Penjualan_model->get();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('judul', 'Judul Buku', 'required', [
            'required' => 'Judul buku wajib diisi'
        ]);
        $this->form_validation->set_rules('pengarang', 'Pengarang Buku', 'required', [
            'required' => 'Pengarang buku wajib diisi'
        ]);
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required', [
            'required' => 'Nomor HP wajib diisi'
        ]);
        $this->form_validation->set_rules('kondisi', 'Kondisi Buku', 'required', [
            'required' => 'Kondisi buku wajib diisi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat COD', 'required', [
            'required' => 'Alamat COD wajib diisi'
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
            'required' => 'Tanggal wajib diisi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga Buku', 'required|integer', [
            'required' => 'Harga buku wajib diisi',
            'integer' => 'Harga buku harus angka'
        ]);
        

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header_user", $data);
            $this->load->view("profil/penjualan_user", $data);
            $this->load->view("layout/footer_user");
        } else {
            $data = [
                'no_penjualan' => $this->input->post('no_penjualan'),
                'id_user' =>  $this->session->userdata('id'),
                'judul' => $this->input->post('judul'),
                'pengarang' => $this->input->post('pengarang'),
                'no_hp' => $this->input->post('no_hp'),
                'kondisi' => $this->input->post('kondisi'),
                'alamat' => $this->input->post('alamat'),
                'harga' => $this->input->post('harga'),
                'tanggal' => $this->input->post('tanggal'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '5000';
                $config['upload_path'] = './template/assets/img/penjualan/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Penjualan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Success!</div>');
            redirect('Profil/histori');
        }
    }

    public function histori()
    {
        $data['judul'] = "Profile Page";
        $data['penjualan'] = $this->Penjualan_model->getByUser();
        $data['user'] = $this->userrole->getBy();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->load->view('layout/header_user', $data);
        $this->load->view('profil/histori_jual', $data);
        $this->load->view('layout/footer_user', $data);
    }

    function edit()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'nama wajib diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header_user", $data);
            $this->load->view("profil/vw_edit", $data);
            $this->load->view("layout/footer_user");
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
            $id = $this->input->post('id');
            $this->userrole->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile changed successfully!</div>');
            redirect('Profil');
        }
    }

}
