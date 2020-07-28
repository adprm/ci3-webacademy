<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('info_model', 'info');
		$this->load->model('about_model', 'about');
		$this->load->model('contact_model', 'contact');
		$this->load->model('learning_model', 'learning');
	}

	public function index()
	{
		$data = [
			'info' => $this->info->getAll()[0],
			'infoAll' => $this->info->getAll(),
			'about' => $this->about->getAll()[0],
			'contact' => $this->contact->getAll()[0],
			'learning' => $this->learning->getAll()
		];
		$this->load->view('welcome_message', $data);
	}
}
