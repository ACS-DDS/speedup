<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('register');
		$this->load->view('templates/footer');
		
	}

	public function check() {
		$data = array(
			        'current'  => $this->input->post("user")
		);
		$this->session->set_userdata($data);
		$pwd = $this->input->post("pwd");
		$this->load->model('Register_Model','',TRUE);
		$cu = $this->Register_Model->checkUser($data,$pwd);
		if(!$cu) {
			redirect(base_url());
		} else {
			$this->load->view('templates/header');
			$this->load->view('tchat',$data);
			$this->load->view('templates/footer');

			var_dump($cu);
		}
	}

}

?>