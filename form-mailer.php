<?php
error_reporting(E_ALL & ~E_NOTICE);
//Abfrage ob Variablen gesetzt wurden

if (!$_POST['name']){
	$message='Bitte Name eingeben';
}

if (!$_POST['mail']){
	$message='Bitte Mail eingeben';
}

if (!$_POST['betreff']){
	$message='Bitte Betreff eingeben';
}

if (!$_POST['nachricht']){
	$message='Bitte Nachricht eingeben';
}

//Überprüfung auf korrekte Mail Adresse

if ($_POST['mail']){
	if (!strpos($_POST['mail'], '@')) $message='Bitte ein gültige Mail eingeben';
}

//Überprüfung ob Message/Error vorliegt -> falls nicht Mail versenden




if ($message){
	echo '<span class="alert alert-danger">'.$message.'</span>';
	}else{
		
		$empfaenger = "flier@wiso.uni-koeln.de";
		//$betreff = "Die Mail-Funktion";
		$from = "From: Agile Dev <absender@domain.de>";
		///$text = "Hier lernt Ihr, wie man mit PHP Mails verschickt";
 
		mail($empfaenger, $_POST['betreff'], $_POST['nachricht'], $from);
		echo '<span class="alert alert-success">Vielen Dank! Ihre Anfrage wird bearbeitet.</span>';
			
	}
	

?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Feedback</title> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head> 
	<body>
		<h1>Feedback</h1>
		<form method="post" action="/form-mailer.php">
		<p><label>Name:<br><input type="text" name="name"></label></p>
		<p><label>E-Mail:<br><input type="text" name="mail"></label></p>
		<p><label>Betreff:<br><input type="text" name="betreff"></label></p>
		<p><label>Nachricht:<br>
		<textarea name="nachricht" cols="50" rows="8"></textarea></label></p>
		<input type="submit" value="OK">
		<p>Mit Bestätigung erklären Sie sich mit unseren Bedingungen einverstanden und, dass Sie unsere Datenschutzerklärung, einschließlich unserer Cookie-Nutzung, gelesen haben.</p>
		</form>

	</body>
</html>