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
	public function getCompetences() {
        $sql = "SELECT *
            	FROM competence";
        $stmt = $this->db->query($sql);
        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = new CompetenceItem($row);
        }
        return $results;
    }
}