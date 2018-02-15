<?php

class FormationMapper extends Mapper {

	//retourne la liste de toutes les formations
	public function getFormations() {
        $sql = "SELECT *
            	FROM formation";
        $stmt = $this->db->query($sql);
        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = new FormationItem($row);
        }
        return $results;
    }

}