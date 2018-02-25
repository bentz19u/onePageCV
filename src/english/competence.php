<div id="contenuCompetence" class="contenu">
    <h2>Skills</h2>
    <hr>
<?php

$groupeEnCours = null;
foreach($competences as $competence){

	if($groupeEnCours == null || $groupeEnCours != $competence->getGroupeEn()){
		//Si ce n'est pas la première fois, on rajoute un hr
		if($groupeEnCours != null){
?>
	</div>
	<hr>
<?php
		}
		$groupeEnCours = $competence->getGroupeEn();
?>
	<div class="groupeCompe">
		<h3><?=$groupeEnCours?></h3>
<?php
	}//Fin du if

	//Maintenant on va afficher la compétence
?>
		<div class="grille">
			<p><?=$competence->getNom();?></p>
		</div>
<?php
} //Fin du foreach
?>
	</div>
	<hr>
</div>