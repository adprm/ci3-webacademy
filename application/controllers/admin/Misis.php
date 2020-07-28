<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Misis extends CI_Controller{

    public function __construct(){
        parent::__construct();
        // load model dan library
        $this->load->model('misi_model');
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    // get data dari model dengan method getAll
    public function index(){
        $data['misi'] = $this->misi_model->getAll();
        $this->load->view('admin/misi/list', $data);
    }

    public function add(){
        $misi = $this->misi_model;
        $validation = $this->form_validation;
        $validation ->set_rules($misi->rules());

        if ($validation->run()) {
            $misi->save();
            $this->session->set_flashdata('success', 'Saved successfully');
        }

        $this->load->view('admin/misi/new_form');
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/misis');

        $misi = $this->misi_model;
        $validation = $this->form_validation;
        $validation->set_rules($misi->rules());

        if ($validation->run()) {
            $misi->update();
            $this->session->set_flashdata('success', 'Saved successfully');
        }

        $data['misi'] = $misi->getById($id);
        if (!$data['misi']) show_404();

        $this->load->view('admin/misi/edit_form', $data);
    }

    public function delete($id = null){
        if (!isset($id)) show_404();

        if ($this->misi_model->delete($id)) {
            redirect(site_url('admin/misis'));
        }
    }
}