<?php

require('../vendor/autoload.php');

$db = parse_ini_file("../conf/conf.ini");

$pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['database'],
    $db['username'], $db['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//Récupération des formations
$mapper = new FormationMapper($pdo);
$formations = $mapper->getFormations('Anglais');

//Récupération de l'expériences
$mapper = new ExperienceMapper($pdo);
$experiences = $mapper->getExperiences('Anglais');

//Récupération des compétences
$mapper = new CompetenceMapper($pdo);
$competences = $mapper->getCompetences('Anglais');

//Récupération des compétences
$mapper = new ProjetMapper($pdo);
$projets = $mapper->getProjets();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Daniel Bentz</title>
        <meta name="description" content="I am Daniel Bentz, web & software developer - interactive resume" />
        <meta name="keywords" content="Daniel Bentz, resume, PHP programmer, PHP, MySQL, OOP, Nancy, French" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="../src/css/reset.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="../src/css/navBar.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="../src/css/general.css" media="all"/>
    </head>
    <body>
        <?php include "../src/english/navBar.html";?>
        <div id="body">
            <div id="title">
				<div id="titleContenu">
				    <h1>Daniel Bentz</h1>
				    <p>Hello, world! I am a web & logiciel developer</p>
				</div>
			</div>
			<?php 
				include "../src/english/bio.html";
				include "../src/english/formation.php";
				include "../src/english/experience.php";
				include "../src/english/competence.php";
				include "../src/english/realisation.php";
				include "../src/english/contact.php";
			?>
        </div>
        <script src="../src/js/jquery-3.3.1.min.js"></script>
        <script src="../src/js/general.js"></script>
    </body>
</html>
