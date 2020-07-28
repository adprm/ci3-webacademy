<?php

class Overview extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("info_model");
        $this->load->model("about_model");
        $this->load->model("contact_model");
        $this->load->model("visi_model");
        $this->load->model("misi_model");
        $this->load->model("learning_model");
        $this->load->model("achievement_model");
        $this->load->model('career_model');
        $this->load->model('event_model');
        if ($this->user_model->isNotLogin()) redirect(site_url('_admin/login'));
    }

    public function index(){
        // load view admin/overview.php
        $data = [
            'jumlahInfo' => $this->info_model->getJumlahInfo(),
            'jumlahAbout' => $this->about_model->getJumlahAbout(),
            'jumlahContact' => $this->contact_model->getJumlahContact(),
            'jumlahVisi' => $this->visi_model->getJumlahVisi(),
            'jumlahMisi' => $this->misi_model->getJumlahMisi(),
            'jumlahLearning' => $this->learning_model->getJumlahLearning(),
            'jumlahAchievement' => $this->achievement_model->getJumlahAchievement(),
            'jumlahCareer' => $this->career_model->getJumlahCareer(),
            'jumlahEvent' => $this->event_model->getJumlahEvent()
        ];
        $this->load->view('admin/overview', $data);
    }
}