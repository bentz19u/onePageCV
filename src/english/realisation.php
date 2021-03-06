<span id="contenuRealisationAncre" class="ancre"></span>
<div id="contenuRealisation" class="contenu">
    <h2>Project</h2>
    <hr>
    <div>
	    <?php
	    foreach($projets as $projet){
	    ?>
	    <div class="realisation">
	    	<img alt="<?=$projet->getLienImage();?>" src="../src/img/<?=$projet->getLienImage();?>">
	    	<div class="middle">
	    		<span class="bold"><?=$projet->getNom();?></span>
	    		<?=$projet->getDescriptionEn();?>
	    	</div>
	    	<div class="bottom">
	    		<p class="tag">
		    		<?=$projet->getTag();?>
		    	</p>
	    		<a class="github button" target="_blank" href="<?=$projet->getLienGIT();?>">
	    			<p>See project on GitHub</p>
	    		</a>
	    	</div>
	    </div>
	    <?php
	    }
	    ?>
	</div>
	<hr>
</div>