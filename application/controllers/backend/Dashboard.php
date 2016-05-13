<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();

		if(!$this->ion_auth->logged_in()){
			redirect('backend/login','refresh');
		}

		$this->load->helper('general_helper');
	}

	public function index()
	{
		echo "login berhasil";
		echo "<a href='".site_url('backend/login/logout')."'>logout</a>";
		//$this->load->view('welcome_message');
	}
}
