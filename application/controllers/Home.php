<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mhome');
	}

	public function index()
	{
		$this->data = array(
			'title' => "Home - Teitra Mega Software",
			'kategori' => $this->mhome->get_kategori(),
			 
		);

		$this->template->view('home', $this->data);
	}

	public function name()
	{
		
	}

}
