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
}
