<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $emailFrom = $_POST['email'];
  $subject = $_POST['betreff'];
  $message = $_POST['text'];
  if(!empty($name) && !empty($emailFrom) && !empty($subject)) {
    $mailTo = "kontakt@agileDev-koeln.de";
    $headers = "From: ".$emailFrom;
    $text = "You have received an e-mail from ".$name.".\n\n".$message;
    mail($mailTo, $subject, $text, $headers);
    header("Location:https://agileDev-koeln.de/index.html#Formular-message-send");
    echo "After Header";
  }} else{
    echo "Hier ist etwas schief gelaufen.";
  }
?>