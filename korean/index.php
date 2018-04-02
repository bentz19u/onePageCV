<?php

require('../vendor/autoload.php');

$db = parse_ini_file("../conf/conf.ini");

$pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['database'],
    $db['username'], $db['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="kr">
    <head>
        <meta charset="utf-8"/>
        <title>벤츠 다니엘</title>
        <meta name="description" content="저는 프랑스에 온 벤츠 다니엘입니다. 소프트웨어와 웹을 개발자입니다 - 대화식 이력서." />
        <meta name="keywords" content="Daniel Bentz, resume, PHP programmer, PHP, MySQL, OOP, Nancy, Korean, 벤츠 다니엘, 이력서" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="../src/css/reset.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="../src/css/navBar.css" media="all"/>
        <link rel="stylesheet" type="text/css" href="../src/css/general.css" media="all"/>
        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    </head>
    <body>
        <?php include "../src/korean/navBar.html";?>
        <div id="body">
            <span class="ancre"></span>
            <div id="title">
				<div id="titleContenu">
				    <h1>벤츠 다니엘</h1>
				    <p>Hello, world! 저는 소프트웨어와 웹 개발자입니다</p>
				</div>
			</div>
            <?php 
                include "../src/korean/bio.html";
                include "../src/korean/contact.php";
            ?>
        </div>
        <div class="contenu">Coming soon.</div>
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        <script src="../src/js/general.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </body>
</html>
