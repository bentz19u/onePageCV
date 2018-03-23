<div id="contenuRealisation" class="contenu">
    <h2>Réalisations</h2>
    <hr>
    <div>
	    <?php
	    foreach($projets as $projet){
	    ?>
	    <div class="realisation">
	    	<img src="src/img/<?=$projet->getLienImage();?>">
	    	<div class="middle">
	    		<span class="bold"><?=$projet->getNom();?></span>
	    		<?=$projet->getDescription();?>
	    	</div>
	    	<div class="bottom">
	    		<p class="tag">
		    		<?=$projet->getTag();?>
		    	</p>
	    		<a class="github button" target="_blank" href="<?=$projet->getLienGIT();?>">
	    			<p>Voir sur GitHub</p>
	    		</a>
	    	</div>
	    </div>
	    <?php
	    }
	    ?>
	</div>
	<hr>
</div>