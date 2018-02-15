<?php

require __DIR__ . '/vendor/autoload.php';

$db = parse_ini_file("conf/conf.ini");

$pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['database'],
    $db['username'], $db['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$mapper = new FormationMapper($pdo);
$formations = $mapper->getFormations();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>monCV</title>
        <link rel="stylesheet" type="text/css" href="src/css/reset.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="src/css/navBar.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="src/css/general.css" media="all"/>
    </head>
    <body>
        <?php include "src/navBar.html";?>
        <div id="body">
            <div id="title">
				<div id="titleContenu">
				    <h1>Daniel Bentz</h1>
				    <p>Hello, world! je suis un développeur Web & Logiciel</p>
				</div>
			</div>
			<?php include "src/bio.html";?>
			<?php include "src/formation.php";?>
        </div>
    </body>
    <script type="text/javascript" src="src/js/general.js"></script>
</html>
