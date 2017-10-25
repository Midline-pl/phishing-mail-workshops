<?php
	echo 'Receiver: ' . htmlspecialchars($_GET["mail"]) . "\n";
	$to      = $_GET["mail"];
	$subject = "Użytkowniku 43941298, opłaty prowizyjne za zakupy Allegro";
	// $message = file_get_contents('./content.php');
	$message = include('./content.php');
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8" . "\r\n";
	$headers .= "From: Allegro <powiadomienia@allegro.pl>" . "\r\n" .
	    "Reply-To: powiadomienia@allegro.pl" . "\r\n" .
	    "X-Mailer: PHP/" . phpversion();

	mail($to, $subject, $message, $headers);
	echo "Message has been sent \n";
?>
