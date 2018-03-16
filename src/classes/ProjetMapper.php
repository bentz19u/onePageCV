<?php

class ProjetMapper extends Mapper {

	//retourne la liste de toutes les formations
	public function getProjets($langue) {
        $sql = "SELECT *
            	FROM projet
                WHERE exists ( SELECT 1 
                                FROM langue 
                                WHERE (projet.id_langue = langue.id 
                                        and langue.nom = '".$langue."'))";
        $stmt = $this->db->query($sql);
        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = new ProjetItem($row);
        }
        return $results;
    }

}