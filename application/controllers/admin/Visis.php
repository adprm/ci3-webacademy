<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Visis extends CI_Controller{

    public function __construct(){
        parent::__construct();
        // load model dan library
        $this->load->model('visi_model');
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    // get data dari model dengan method getAll
    public function index(){
        $data['visi'] = $this->visi_model->getAll();
        $this->load->view('admin/visi/list', $data);
    }

    public function add(){
        $visi = $this->visi_model;
        $validation = $this->form_validation;
        $validation ->set_rules($visi->rules());

        if ($validation->run()) {
            $visi->save();
            $this->session->set_flashdata('success', 'Saved successfully');
        }

        $this->load->view('admin/visi/new_form');
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/visis');

        $visi = $this->visi_model;
        $validation = $this->form_validation;
        $validation->set_rules($visi->rules());

        if ($validation->run()) {
            $visi->update();
            $this->session->set_flashdata('success', 'Saved successfully');
        }

        $data['visi'] = $visi->getById($id);
        if (!$data['visi']) show_404();

        $this->load->view('admin/visi/edit_form', $data);
    }

    public function delete($id = null){
        if (!isset($id)) show_404();

        if ($this->visi_model->delete($id)) {
            redirect(site_url('admin/visis'));
        }
    }
}