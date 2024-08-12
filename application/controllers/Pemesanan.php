<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Pemesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Buku_model');
        $this->load->model('Pemesanan_model');
        $this->load->model('User_model');
        $this->load->model('Detail_model');
    }
    // Method index untuk memuat halaman pemesanan
    public function index()
    {
        $data['judul'] = "Halaman pemesanan";
        $data['pemesanan'] = $this->Pemesanan_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // Debugging
        // var_dump($data);die; 
        // Mengaktifkan profiler
        $this->output->enable_profiler(TRUE);
        $this->load->view("layout/header", $data);
        $this->load->view("pemesanan/vw_pemesanan", $data);
        $this->load->view("layout/footer", $data);
    }

    // Profiler 
    public function profiler_pemesanan()
    {
        $data['judul'] = "Halaman pemesanan";
        $data['pemesanan'] = $this->Pemesanan_model->get();
        // Mengaktifkan profiler
        $this->output->enable_profiler(TRUE);
    }
    public function detail($id)
    {
        $data['judul'] = "Halaman Detail pemesanan";
        $data['detail'] = $this->Detail_model->getById($id);
        $data['pemesanan'] = $this->Pemesanan_model->getByIdP($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status Wajib di isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pemesanan/vw_detail_pemesanan", $data);
            $this->load->view("layout/footer");
        } else {
            $status = $this->input->post('status');
            $nojual = $this->input->post('no_pemesanan');
            $this->Pemesanan_model->updatestatus($status, $nojual);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berhasil DiUbah!</div>');
            redirect('pemesanan');
        }
    }
    public function export()
    {
        $dompdf = new Dompdf();
        $this->data['all_jual'] = $this->Pemesanan_model->get();
        $this->data['title'] = 'Laporan Data pemesanan';
        $this->data['no'] = 1;
        $dompdf->setPaper('A4', 'Landscape');
        $html = $this->load->view('pemesanan/report', $this->data, true);
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('Laporan Data pemesanan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
}
