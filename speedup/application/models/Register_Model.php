<?php

class Register_model extends CI_Model {

	public function checkUser($nom,$pwd) {
		$id = "SELECT id FROM utilisateur WHERE pseudo = ? AND mot_de_passe = ?";		
		$query = $this->db->query($id, array($nom,md5($pwd)));
		return $query->row()->id;
	}
}

?>