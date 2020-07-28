<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

Class Career extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('info_model', 'info');
        $this->load->model('career_model', 'career');
    }

    public function index(){
        $data = [
            'info' => $this->info->getAll()[0],
            'career' => $this->career->getAll()
        ];

        $this->load->view('fe/career', $data);
    }
}