<?php

class ProjetItem{

	protected $id;
	protected $nom;
	protected $lienImage;
	protected $lienGITHub;
	protected $description;

	public function __construct(array $data){
		if(isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->nom = $data['nom'];
        $this->lienImage = $data['lien_image'];
        $this->lienGITHub = $data['lien_github'];
        $this->description = $data['description'];
	}

	public function getId() {
        return $this->id;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getLienImage() {
        return $this->lienImage;
    }
    public function getLienGIT() {
        return $this->lienGITHub;
    }
}