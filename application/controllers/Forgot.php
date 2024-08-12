<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forgot extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('user_model', 'userrole');


    }

    public function index()
    {
        $this->load->view('layout/header_utama');
        $this->load->view('auth/forgot');
        $this->load->view('layout/footer_user');

    }

	function forgot(){
     $email = $this->input->post('email');
     $data['email'] = $this->input->post('email'); 
     if ($this->db->get_where('user', ['email' => $email])->row_array()){
        $this->load->view('layout/header_utama' ,$data);
        $this->load->view('auth/forgot2', $data);
        $this->load->view('layout/footer_user');
     }else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email does not exist</div>');
            redirect('Forgot');
     }
    }

    function ubah(){
        $this->form_validation->set_rules('password', 'password', 'required', [
            'required' => 'password wajib diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header_user");
            $this->load->view("forgot/forgot2");
            $this->load->view("layout/footer_user");
        } else {
            $data = [
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            ];
            }
            $email= $this->input->post('email');
            $this->userrole->update(['email' => $email], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your password has been changed successfully!</div>');
            redirect('Auth/indexuser');
        }
       }

