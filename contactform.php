<!doctype html>
<head>
  <!-- Redirects back to main page after [content]seconds -->
  <meta http-equiv="refresh" content="3; url=https://www.agileDev-koeln.de/index.html#Formular">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Link to stylesheet -->
  <link rel="stylesheet" href="style.css">

  <!-- Titel -->
  <title>Kontaktformular</title>

  <!-- Website Icon -->
  <link rel="icon" type="image/png" href="assets/WebsiteIcon.png">
</head>

<body>

  <hr>
  <br>
  <div class="container-fluid col-9 mx-auto text-center">
    <img src="assets/agileDev-Logo&Schrift.png" height="50">
    <br>
    <br>
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
          echo "<p class='lead'>Ihre Anfrage wurde versendet.</p>
                <p class='lead'>
                  <i>Sie werden in Kürze zurück auf die Website geleitet.</i>
                </p>";
        } else {
          echo "<p class='lead'>
                <strong>
                  Bitte füllen Sie alle Felder aus.
                </strong>
                </p>
            <p class='lead'>
              <i>Sie werden in Kürze zurück auf die Website geleitet.</i>
            </p>";
        }
      }
    ?>
  </div>
  <br>
  <hr>

</body>

</html>