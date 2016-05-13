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

			$this->load->view('backend/vwLogin');
		}
	}

	function authentication(){
		if(isset($_POST['submit'])){

			$this->form_validation->set_rules("username","Username","required|valid_email|trim");
			$this->form_validation->set_rules("password","Password","required|trim");

			if($this->form_validation->run() == true){

				$username	= addslashes($this->input->post("username",true));
				$password 	= addslashes($this->input->post("password",true));

				if($this->ion_auth->login($username,$password)){

					$this->session->set_flashdata("message", $this->ion_auth->messages());

					redirect("backend/dashboard","refresh");
				}else{
					$this->session->set_flashdata("message", $this->ion_auth->errors());
					redirect("backend/login","refresh");
				}
			}else{

            	(validation_errors()) ? $this->session->set_flashdata('message', validation_errors()) : $this->session->set_flashdata('message', $this->ion_auth->errors());

            	$this->load->view('backend/vwLogin');
			}
			
		}else{

			$this->load->view('backend/vwLogin');
		}
	}

	public function logout() {
        $this->ion_auth->logout();

        redirect('backend/login', 'refresh');
    }
}
