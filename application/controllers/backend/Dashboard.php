<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();

		if(!$this->session->userdata('login')){
			redirect('backend/login','refresh');
		}

		$this->load->helper('general_helper');
	}

	public function index()
	{
		//$this->load->view('welcome_message');
	}
}
