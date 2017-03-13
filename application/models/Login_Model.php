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
	}

	public function getGravatar($email,$s = 80,$d = 'mm',$r = 'g',$img = false) {
	    return 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($email)))."?s=$s&d=$d&r=$r";
	}

	public function updatePwd($user,$pwd) {
		$select = "UPDATE utilisateur SET mot_de_passe = ? WHERE pseudo = ?";	
		$this->db->query($select, array(md5($pwd),$user));
	}
	
}

?>