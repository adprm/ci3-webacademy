<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Careers extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $this->load->model('career_model');
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index(){
        $data['career'] = $this->career_model->getAll();
        $this->load->view('admin/career/list', $data);
    }

    public function add(){
        $career = $this->career_model;
        $validation = $this->form_validation;
        $validation->set_rules($career->rules());

        if ($validation->run()) {
            $career->save();
            $this->session->set_flashdata('success', 'Saved successfully');
        }

        $this->load->view('admin/career/new_form');
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/careers');

        $career = $this->career_model;
        $validation = $this->form_validation;
        $validation->set_rules($career->rules());

        if ($validation->run()) {
            $career->update();
            $this->session->set_flashdata('success', 'Saved successfully');
        }

        $data['career'] = $career->getById($id);
        if (!$data['career']) show_404();

        $this->load->view('admin/career/edit_form', $data);
    }

    public function delete($id = null){
        if (!isset($id)) show_404();

        if ($this->career_model->delete($id)) {
            redirect(site_url('admin/careers'));
        }
    }
}