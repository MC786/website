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
    }
}
header("Location:https://agileDev-koeln.de/index.html#Formular-message-send");
?>