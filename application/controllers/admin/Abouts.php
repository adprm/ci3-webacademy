<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Abouts extends CI_Controller{

    public function __construct(){
        parent::__construct();
        // load model dan library
        $this->load->model('about_model');
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    // get data dari model dengan method getAll
    public function index(){
        $data['about'] = $this->about_model->getAll();
        $this->load->view('admin/about/list', $data);
    }

    public function add(){
        $about = $this->about_model;
        $validation = $this->form_validation;
        $validation->set_rules($about->rules());

        if ($validation->run()) {
            $about->save();
            $this->session->set_flashdata('success', 'Saved successfully');
        }

        $this->load->view('admin/about/new_form');
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/abouts');

        $about = $this->about_model;
        $validation = $this->form_validation;
        $validation->set_rules($about->rules());

        if ($validation->run()) {
            $about->update();
            $this->session->set_flashdata('success', 'Saved successfully');
        }

        $data['about'] = $about->getById($id);
        if (!$data['about']) show_404();

        $this->load->view('admin/about/edit_form', $data);
    }

    public function delete($id = null){
        if (!isset($id)) show_404();

        if ($this->about_model->delete($id)) {
            redirect(site_url('admin/abouts'));
        }
    }
}