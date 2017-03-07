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

}
?>