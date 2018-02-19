<?php

class CompetenceItem{

	protected $id;
	protected $nom;
	protected $link;

	public function __construct(array $data){
		if(isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->nom = $data['nom'];
        $this->link = $data['link'];
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
}