<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class About extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('info_model', 'info');
		$this->load->model('about_model', 'about');
		$this->load->model('visi_model', 'visi');
		$this->load->model('misi_model', 'misi');
		$this->load->model('learning_model', 'learning');
    }

    // mengambil data dari model dengan method getAll
    public function index(){
        $data = [
			'info' => $this->info->getAll()[0],
			'about' => $this->about->getAll()[0],
			'visi' => $this->visi->getAll()[0],
			'misi' => $this->misi->getAll(),
			'learning' => $this->learning->getAll()
		];
		$this->load->view('fe/about', $data);
    }
}