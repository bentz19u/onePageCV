<?php

$nom = $_POST["nom"];
$mail = $_POST["mail"];
$telephone = $_POST["telephone"];
$contenu = $_POST["contenu"];

$message = 	"nom : ". $nom ."\n\n".
			"mail : ". $mail ."\n\n".
			"telephone : ". $telephone ."\n\n".
			"contenu : ". $contenu ."\n\n";

$to      = 'db.daniel.bentz@gmail.com';
$subject = 'CV-mail';
$headers = 'From: '. $mail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

return mail($to, $subject, $message, $headers);

