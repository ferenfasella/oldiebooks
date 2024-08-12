<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('user_model', 'userrole');
        $this->load->model('Keranjang_model');
        $this->load->model('Review_model');

    }

    public function index()
    {
        $data['testi'] = $this->Review_model->get();
        $this->load->view('layout/header_utama',$data);
        $this->load->view('auth/utama',$data);
        $this->load->view('layout/footer_user',$data);

    }
    public function index2()
    {
        
        $data['user'] = $this->userrole->getBy();
        $data['jlh'] = $this->Keranjang_model->jumlah();
        // print_r($data); die;
        $this->load->view('layout/header_user',$data);
        $this->load->view('auth/utama_user', $data);
        $this->load->view('layout/footer_user',$data);

    }

}