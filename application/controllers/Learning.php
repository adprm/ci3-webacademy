<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Learning extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('info_model', 'info');
        $this->load->model('learning_model', 'learning');
    }

    public function index(){
        $data = [
            'info' => $this->info->getAll()[0],
            'learning' => $this->learning->getAll()
        ];

        $this->load->view('fe/learning', $data);
    }
}