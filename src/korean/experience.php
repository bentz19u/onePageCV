<span id="contenuExpAncre" class="ancre"></span>
<div id="contenuExp" class="contenu">
    <h2>경력</h2>
    <hr>
    <?php
        foreach($experiences as $experience){
    ?>
        <div class="contenuEduXP">
            <div class="contenuGauche">
                <h3><?=$experience->getNom(); ?></h3>
                <p><i><?=$experience->getDate(); ?></i></p>
            </div>
            <div class="contenuDroit">
                <h3><img src="../src/img/if_Map-Marker-Push-Pin--Left-Azure_73056.png" alt="marker"><?=$experience->getLieu(); ?></h3>
                <div class="text"><?=nl2br($experience->getDescriptionCourt()); ?></div>
                <div class="textLong"><?=nl2br($experience->getDescription()); ?></div>
            </div>
        </div>
        <hr>
    <?php
        }
    ?>
</div>