<?php

class CompetenceItem{

	protected $id;
	protected $nom;
	protected $link;
	protected $groupe;

	public function __construct(array $data){
		if(isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->nom = $data['nom'];
        $this->link = $data['link'];
        $this->groupe = $data['groupe'];
	}

	public function getId() {
        return $this->id;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getLink() {
        return $this->link;
    }
    public function getGroupe() {
        return $this->groupe;
    }
}