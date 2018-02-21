<div id="contenuCompetence" class="contenu">
    <h2>Skills</h2>
    <hr>
    <?php

    	$groupeEnCours = '';
        foreach($competences as $competence){

        	if($groupeEnCours == null || $groupeEnCours != $competence->getGroupe()){
        		//Si ce n'est pas la première fois, on rajoute un hr
        		if($groupeEnCours != null){
        			?>
        			<hr>
        			<?php
        		}
        		$groupeEnCours = $competence->getGroupe();
        		?>
        		<h3><?php=$groupeEnCours?></h3>
        		<?php

        	}
    ?>

    <?php
    	}
    ?>
</div>