<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Achievements extends CI_Controller{

    public function __construct(){
        parent::__construct();
        // load model dan library
        $this->load->model('achievement_model');
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    // mengambil data dari model dengan method getAll
    public function index(){
        $data['achievement'] = $this->achievement_model->getAll();
        $this->load->view('admin/achievement/list', $data);
    }

    public function add(){
        $achievement = $this->achievement_model;
        $validation = $this->form_validation;
        $validation->set_rules($achievement->rules());

        if ($validation->run()) {
            $achievement->save();
            $this->session->set_flashdata('success', 'Saved successfully');
        }

        $this->load->view('admin/achievement/new_form');
    }

    public function edit($id = null) {
        if (!isset($id)) redirect('admin/achievements');

        $achievement = $this->achievement_model;
        $validation = $this->form_validation;
        $validation->set_rules($achievement->rules());

        
        if ($validation->run()) {
            $achievement->update();
            $this->session->set_flashdata('success', 'Saved successfully');
        }

        $data['achievement'] = $achievement->getById($id);
        if (!$data['achievement']) show_404();

        $this->load->view('admin/achievement/edit_form', $data);
    }

    public function delete($id = null) {
        if (!isset($id)) show_404();

        if ($this->achievement_model->delete($id)) {
            redirect(site_url('admin/achievements'));
        }
    }
}