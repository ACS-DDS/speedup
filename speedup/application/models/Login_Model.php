<?php

class Login_model extends CI_Model {

	public function addUser($nom,$prenom,$user,$email,$pwd) {
		$data = array(
	        'nom' => $nom,
	        'prenom' => $prenom,
	        'pseudo'=> $user,
	        'email'=> $email,
	        'mot_de_passe'=> md5($pwd)
		);
		if (!$this->db->insert('utilisateur', $data)) {
			$error = $this->db->error();
		}
		echo "Success!";
	}
	
}

?>