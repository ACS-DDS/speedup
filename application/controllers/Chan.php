<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chan extends CI_Controller {

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('chan');
		$this->load->view('templates/footer');
	}

	public function add() {
		if (isset($_POST["libelle"])) {

			$nom = $this->input->post("libelle");

			$this->load->model('Chan_Model');

			if ($this->Chan_Model->addChan($nom)) {
				redirect('http://nabilb.dijon.codeur.online/Tchat/Tchat');
			}
		}
	}
}
?>