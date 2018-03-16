<div id="contenuRealisation" class="contenu">
    <h2>Réalisations</h2>
    <hr>
    <div>
	    <?php
	    foreach($projets as $projet){
	    ?>
	    <div class="realisation">
	    	<img src="src/img/<?=$projet->getLienImage();?>">
	    	<p>
	    		<span class="bold"><?=$projet->getNom();?></span>
	    		<?=$projet->getDescription();?>
	    	</p>
	    	<a href="<?=$projet->getLienGIT();?>">Lien GITHub</a>
	    </div>
	    <?php
	    }
	    ?>
	</div>
	<hr>
</div>