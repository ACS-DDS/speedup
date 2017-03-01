<?php

class Message_Model extends CI_Model {
	private $fichier;
	
	public function __construct($discussion = 'general') {
		if (!file_exists($this->fichier = __DIR__.'/../discussions/'.$discussion)) {
			touch($this->fichier);
		}
	}

	public function addMessage($message) {
		$f = fopen($this->fichier, "a");
		fputcsv($f, $message->toArray());
		fclose($f);
	}

	public function getMessages($depuis = 0) {
		$f = fopen($this->fichier, "r");
		$msgs = [];
		while ($ligne = fgetcsv($f)) {
			if ($ligne[1] < $depuis) continue; // si la date du message est inférieure au $depuis, on ne veut pas du Message
			$msgs[] = new Message($ligne[0], $ligne[1], $ligne[2]);
		}
		return $msgs;
	}
}

class Message {
	private $author;
	private $date;
	private $content;

	public function __construct($a, $d, $m) {
		$this->author = $a;
		$this->date = $d;
		$this->content = $m;
	}

	public function toArray() {
		return [$this->author, $this->date, $this->content];
	}

	public function renderHtml() {
		return "<h2>{$this->author} a dit</h2> <p>{$this->content}</p> le <time>".strftime("%A %e %B %H:%M:%S", $this->date)."</time>";
	}
}