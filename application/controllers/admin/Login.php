<?php

class Login extends CI_Controller{
    
    public function __construct(){
        parent ::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function index(){
        // jika form login di submit
        if ($this->input->post()) {
            if ($this->user_model->doLogin()) redirect(site_url('admin'));
        }

        // taampilkan halaman login
        $this->load->view('admin/login_page.php');
    }

    public function logout(){
        // destroy semua sesi
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
}