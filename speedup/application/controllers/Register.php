<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index() {

		$this->load->view('templates/header');
		$this->load->view('register');
		$this->load->view('templates/footer');
		
	}

	public function check() {
		$pwd = $this->input->post("pwd");
		$user = $this->input->post("user");

		$this->load->model('Register_Model');
		$cu = $this->Register_Model->checkUser($user,$pwd);
		$id = $this->Register_Model->checkId($user,$pwd);

		$data = array(
			        'user' => $cu,
			        'id_user' => $id
				);

		if(!$cu) {
			redirect(base_url());
		} else {
			$this->session->set_userdata($data);
			redirect('http://nabilb.dijon.codeur.online/Tchat/Tchat');
		}
	}

}

?>