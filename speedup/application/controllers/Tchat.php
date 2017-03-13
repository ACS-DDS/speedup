<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tchat extends CI_Controller {

	public function index() {
		$this->load->model('Register_Model');
		$this->load->model('Tchat_Model');
		$this->load->model('Login_Model');
		
		$user = $this->session->user;
		$cc = $this->Register_Model->checkChan();
		$email = $this->Register_Model->checkEmail($user);
		$grav = $this->Login_Model->getGravatar($email);

		$data = array(
					'current' => $user,
			        'salons' => $cc,
			        'avatar' => $grav
				);
		$this->session->set_userdata($data);

		$this->load->view('templates/header');
		$this->load->view('tchat',$data);
		$this->load->view('templates/footer');

	}

	public function add() {
		$content = $this->input->post('msg');
		$chan = $this->input->post('chan');
		if ($content) {
			$id_user = $this->session->id_user;
			$id_chan = $this->session->id_chan;

			$this->load->model('Tchat_Model');
			$this->Tchat_Model->addMessage($id_user,$content,$id_chan);
		} else {
			redirect('http://nabilb.dijon.codeur.online/Tchat/Tchat/');
		}
	}

	public function history() {
		$this->load->model('Tchat_Model');
		$this->load->model('Chan_Model');
		

		$chan = $this->input->post('chan');
		$id_chan = $this->Chan_Model->chanId($chan);
		$msg = $this->Chan_Model->getHistory($chan);

		$data = array(
			        'content' => $msg,
			        'id_chan' => $id_chan
				);

		$this->session->set_userdata($data);
		$this->Tchat_Model->onlineUser($this->session->id_user);
		$this->load->view('templates/inner', $data);
	}

	public function logout() {
		$this->load->model('Tchat_Model');
		$this->session->unset_userdata('user');
	}

	public function connected() {
		$this->load->model('Tchat_Model');
		$li = $this->Tchat_Model->listUser();

		$data = array(
			        'en_ligne' => $li
				);
		$this->load->view('templates/log', $data);

	}
}

?>