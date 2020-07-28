<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Learnings extends CI_Controller{

    public function __construct(){
        parent::__construct();
        // load model dan library
        $this->load->model('learning_model');
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    // mengambil data dari model dengan method getAll
    public function index(){
        $data['learning'] = $this->learning_model->getAll();
        $this->load->view('admin/learning/list', $data);
    }

    public function add(){
        $learning = $this->learning_model;
        $validation = $this->form_validation;
        $validation->set_rules($learning->rules());

        if ($validation->run()) {
            $learning->save();
            $this->session->set_flashdata('success', 'Saved successfully');
        }

        $this->load->view('admin/learning/new_form');
    }

    public function edit($id = null) {
        if (!isset($id)) redirect('admin/learnings');

        $learning = $this->learning_model;
        $validation = $this->form_validation;
        $validation->set_rules($learning->rules());

        if ($validation->run()) {
            $learning->update();
            $this->session->set_flashdata('success', 'Saved successfully');
        }

        $data['learning'] = $learning->getById($id);
        if (!$data['learning']) show_404();

        $this->load->view('admin/learning/edit_form', $data);
    }

    public function delete($id = null){
        if(!isset($id)) show_404();

        if ($this->learning_model->delete($id)) {
            redirect(site_url('admin/learnings'));
        }
    }
}