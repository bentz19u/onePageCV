<div id="contenuForm" class="contenu">
    <h2>Formations</h2>
    <hr>
    <?php
        foreach($formations as $formation){
    ?>
        <div class="contenuEduXP">
            <div class="contenuGauche">
                <h3><?=$formation->getNom(); ?></h3>
                <p><i><?=$formation->getDate(); ?></i></p>
            </div>
            <div class="contenuDroit">
                <h3><img src="src\img\if_Map-Marker-Push-Pin--Left-Azure_73056.png"><?=$formation->getLieu(); ?></h3>
                <div class="text"><?=nl2br($formation->getDescriptionCourt()); ?></div>
                <div class="textLong"><?=nl2br($formation->getDescription()); ?></div>
            </div>
        </div>
        <hr>
    <?php
        }
    ?>
</div>