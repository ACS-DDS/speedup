<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('login');
		$this->load->view('templates/footer');
	}

	public function register() {

		if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["user"]) && isset($_POST["pwd"])) {

		$nom = $this->input->post("nom");
		$prenom = $this->input->post("prenom");
		$user = $this->input->post("user");
		$email = $this->input->post("email");
		$pwd = $this->input->post("pwd");

		$this->load->model('Login_Model');
		$this->Login_Model->addUser($nom,$prenom,$user,$email,$pwd);
		}
	}

	public function profil() {
		$this->load->view('templates/header');
		$this->load->view('profil');
		$this->load->view('templates/footer');


	}

	public function update() {
		$old_pwd = $this->input->post('old');
		$new_pwd = $this->input->post('new');
		$verif_pwd = $this->input->post('verif');

		if(isset($old_pwd) && isset($new_pwd) && isset($verif_pwd)) {
			$this->load->model('Register_Model');
			$cu_pwd = $this->Register_Model->checkPwd($this->session->user);
			if((md5($old_pwd) == $cu_pwd) && (md5($new_pwd) == md5($verif_pwd))) {
				$this->load->model('Login_Model');
				$this->Login_Model->updatePwd($this->session->user,$verif_pwd);
				redirect(base_url());
			}
		}
	}
}
