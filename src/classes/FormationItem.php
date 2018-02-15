<?php

class FormationItem{

	protected $id;
	protected $nom;
	protected $description;
	protected $lieu;
	protected $date;
    protected $descriptionCourt;

	public function __construct(array $data){
		if(isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->nom = $data['nom'];
        $this->description = $data['description'];
        $this->lieu = $data['lieu'];
        $this->date = $data['date'];
        $this->descriptionCourt = $data['description_court'];
	}

	public function getId() {
        return $this->id;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getDescriptionCourt() {
        return $this->descriptionCourt;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getLieu() {
        return $this->lieu;
    }
    public function getDate() {
        return $this->date;
    }
}