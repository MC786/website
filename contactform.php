<!doctype html>
<head>
  <meta http-equiv="refresh" content="2; url=https://www.agileDev-koeln.de/index.html#Formular">
</head>
<body>
  <div class="container">
    <img src="assets/agileDev-Logo&Schrift.png">
  </div>
  <div class="container-fluid text-center">
  <?php
 if(isset($_POST['submit'])) {
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['betreff'];
    $message = $_POST['text'];
    if(!empty($vorname) && !empty($nachname) && !empty($emailFrom) && !empty($subject) && !empty($message)) {
    $mailTo = "kontakt@agileDev-koeln.de";
    $headers = "From: ".$emailFrom;
    $text = "You have received an e-mail from ".$vorname." ".$nachname.".\n\n".$message;
    mail($mailTo, $subject, $text, $headers);
    echo "Ihre Anfrage wurde versendet, Sie werden in Kuerze zurueck auf die Webseite geleitet.";
    } else {
      echo "Bitte fuellen Sie alle Felder aus.";
    }
 }
?>
  </div>
</body>
</html>