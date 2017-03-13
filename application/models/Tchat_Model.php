<?php

class Tchat_model extends CI_Model {

	public function addMessage($id_user,$content,$id_chan) {
		$data = array(
	        'id_pseudo' => $id_user,
	        'contenu' => $content,
	        'id_discussion' => $id_chan
		);

		if (!$this->db->insert('message', $data)) {
			$error = $this->db->error();
		} else {
			return TRUE;
		}
	}

	public function onlineUser($id_user) {
		$select = "UPDATE utilisateur SET pong = now() WHERE id = ?";		
		$this->db->query($select, array($id_user));
	}

	public function listUser() {
		$select = "SELECT pseudo FROM utilisateur WHERE pong > now() - '15 second'::interval ORDER BY pseudo ASC";
		$query = $this->db->query($select);
		return $query->result_array();
	}
}
?>