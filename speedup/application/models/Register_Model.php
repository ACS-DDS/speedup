<?php

class Register_model extends CI_Model {

	public function checkUser($nom,$pwd) {
		$select = "SELECT * FROM utilisateur WHERE pseudo = ? AND mot_de_passe = ?";		
		$query = $this->db->query($select, array($nom,md5($pwd)));
		return $query->row()->pseudo;
	}

	public function checkEmail($nom) {
			$select = "SELECT * FROM utilisateur WHERE pseudo = ? ";		
			$query = $this->db->query($select, array($nom));
			return $query->row()->email;	
	}

	public function checkId($nom,$pwd) {
		$select = "SELECT * FROM utilisateur WHERE pseudo = ? AND mot_de_passe = ?";		
		$query = $this->db->query($select, array($nom,md5($pwd)));
		return $query->row()->id;
	}

	public function checkChan() {
		$select = "SELECT * FROM discussion";
		$query = $this->db->query($select);
		return $query->result_array();
	}

	public function checkPwd($nom) {
		$select = "SELECT * FROM utilisateur WHERE pseudo = ?";		
		$query = $this->db->query($select, array($nom));
		return $query->row()->mot_de_passe;
	}


}

?>