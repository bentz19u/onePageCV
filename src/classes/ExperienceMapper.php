<?php

class ExperienceMapper extends Mapper {

	//retourne la liste de toutes les formations
	public function getExperiences($langue) {
        $sql = "SELECT *
            	FROM experience
                WHERE exists ( SELECT 1 
                                FROM langue 
                                WHERE (experience.id_langue = langue.id 
                                        and langue.nom = '".$langue."'))";
        $stmt = $this->db->query($sql);
        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = new ExperienceItem($row);
        }
        return $results;
    }

}