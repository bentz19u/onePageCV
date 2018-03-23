<?php

class ProjetMapper extends Mapper {

	//retourne la liste de tous les projets
	public function getProjets() {
        $sql = "SELECT *
            	FROM projet";
        $stmt = $this->db->query($sql);
        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = new ProjetItem($row);
        }
        return $results;
    }

}