<?php

class Chan_model extends CI_Model {

	public function addChan($nom) {
		$data = array(
	        'nom_discussion' => $nom
		);

		if (!$this->db->insert('discussion', $data)) {
			$error = $this->db->error();
		} else {
			return TRUE;
		}
	}

	public function chanId($chan) {
		$select = "SELECT * FROM discussion WHERE nom_discussion = ?";
		$query = $this->db->query($select, array($chan));
		return $query->row()->id;
	}

	public function getHistory($chan) {
		$select = "SELECT message.contenu,utilisateur.pseudo FROM message JOIN discussion ON message.id_discussion = discussion.id JOIN utilisateur ON message.id_pseudo = utilisateur.id WHERE discussion.nom_discussion = ?";
		$query = $this->db->query($select, array($chan));
		
		return $query->result_array();
	}

}

?>