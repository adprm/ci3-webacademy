<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

Class Event extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('info_model', 'info');
        $this->load->model('event_model', 'event');
    }

    public function index(){
        $data = [
            'info' => $this->info->getAll()[0],
            'event' => $this->event->getAll()
        ];

        $this->load->view('fe/event', $data);
    }
}