<?php

class CompetenceMapper extends Mapper {

	//retourne une compétence en particulier
	public function getCompetenceId($id) {
        $sql = "SELECT *
            	FROM competence
                WHERE id =".$id;
        $stmt = $this->db->query($sql);
        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = new CompetenceItem($row);
        }
        return $results;
    }

    //retourne la liste de toutes les compétences
	public function getCompetences($langue) {
        $sql = "SELECT competence.*, groupecompetence.nom AS groupe, groupecompetence.nom_en AS groupeEn
            	FROM competence, groupecompetence                
                WHERE exists ( SELECT 1 
                                FROM langue 
                                WHERE (competence.id_langue = langue.id 
                                        and langue.nom = '".$langue."'))
                AND competence.id_groupe = groupecompetence.id
                ORDER BY competence.id_groupe";
        $stmt = $this->db->query($sql);
        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = new CompetenceItem($row);
        }
        return $results;
    }
}