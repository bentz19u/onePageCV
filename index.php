<?php

require __DIR__ . '/vendor/autoload.php';

//connexion à la base de données
$db = parse_ini_file("conf/conf.ini");

$pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['database'],
    $db['username'], $db['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//Récupération des formations
$mapper = new FormationMapper($pdo);
$formations = $mapper->getFormations('Francais');

//Récupération de l'expériences
$mapper = new ExperienceMapper($pdo);
$experiences = $mapper->getExperiences('Francais');

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>Daniel Bentz</title>
        <meta name="description" content="Je m'appelle Daniel Bentz, je suis développeur web & logiciel - CV intéractif" />
        <meta name="keywords" content="Daniel Bentz, CV, développeur PHP, PHP, MySQL, POO, Nancy, Francais" />
        <link rel="stylesheet" type="text/css" href="src/css/reset.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="src/css/navBar.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="src/css/general.css" media="all"/>
    </head>
    <body>
        <?php include "src/french/navBar.html";?>
        <div id="body">
            <div id="title">
				<div id="titleContenu">
				    <h1>Daniel Bentz</h1>
				    <p>Hello, world! je suis un développeur web & logiciel</p>
				</div>
			</div>
			<?php 
				include "src/french/bio.html";
				include "src/french/formation.php";
				include "src/french/experience.php";
				include "src/french/competence.php";
			?>
        </div>
        <script src="src/js/jquery-3.3.1.min.js"></script>
        <script src="src/js/general.js"></script>
    </body>
</html>
