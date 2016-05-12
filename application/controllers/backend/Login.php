<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();

		if($this->session->userdata('login')){
			redirect('Dashboard','refresh');
		}

		$this->load->helper('general_helper');
	}

	public function index(){

		$this->load->view('backend/vwLogin');

	}
}
