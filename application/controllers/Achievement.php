<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Achievement extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('info_model', 'info');
        $this->load->model('achievement_model', 'achievement');
    }

    public function index(){
        $data = [
            'info' => $this->info->getAll()[0],
            'achievement' => $this->achievement->getAll()
        ];

        $this->load->view('fe/achievement', $data);
    }
}