<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->helper('general_helper');
	}

	public function index(){

		if($this->ion_auth->logged_in()){

			redirect("backend/dashboard","refresh");
		}else{

			if(isset($_POST['submit'])){

				//$username	= $this->input
				if($this->ion_auth->login($username,$password)){

					$pesan = $this->ion_auth->message();
					refirect("backend/dashboard","refresh");
				}
			}else{

				$this->load->view('backend/vwLogin');
			}

			$this->load->view('backend/vwLogin');
		}
	}
}
