<?php 

/*http://faridl.dijon.codeur.online/ACS/tchat/classes/MessageMapper.php
*///test de getMessage
//$this->fichier doit être égal = "/home/faridl/tchat/discussions/general"
//pour vérifier on peut créer un fichier avec un autre nom que général

class MessageMapper extends CI_Model{

	public function __construct(){
		$this->load->database();

	}

	public function insert($c, $d){
		$data = array(
        'content' => $c,
        'date' => $d
		);

		$this->db->insert('message', $data); ;
	}//fin fonction insert


//fin MessageMapper
}