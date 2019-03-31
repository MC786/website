<?php
if(isset($_POST['submit'])){
  $name = test_input($_POST['name']);
  $emailFrom = test_input($_POST['email']);
  $subject = test_input($_POST['betreff']);
  $message = test_input($_POST['text']);
  if(!empty($name) && !empty($emailFrom) && !empty($subject)) {
    $mailTo = "kontakt@agiledev-koeln.de";
    $headers = "From: ".$emailFrom;
    $text = "You have received an e-mail from ".$name.".\n\n".$message;
    mail($mailTo, $subject, $text, $headers);
    header("Location:https://agileDev-koeln.de/index.html#Formular-message-send");
  } else{
    echo "Hier ist etwas schief gelaufen.";
  }
}

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>