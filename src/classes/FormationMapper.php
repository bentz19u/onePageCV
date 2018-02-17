<?php

class FormationMapper extends Mapper {

	//retourne la liste de toutes les formations
	public function getFormations($langue) {
        $sql = "SELECT *
            	FROM formation
                WHERE exists ( SELECT 1 
                                FROM langue 
                                WHERE (formation.id_langue = langue.id 
                                        and langue.nom = '".$langue."'))";
        $stmt = $this->db->query($sql);
        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = new FormationItem($row);
        }
        return $results;
    }

}