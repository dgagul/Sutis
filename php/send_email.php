<?php

session_start();
// session_unset();


//Eingaben des Kunden als Variablen speichern
//Prüfen ob E-Mail Adresse valid ist
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST['mail'])) {
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
      $from = test_input($_POST['mail']);
      $_SESSION['mail'] = $from;
      $_SESSION['mail_error'] = "";
    } else {$mail_error = "Bitte überprüfen Sie Ihre E-Mail Adresse!";
            $_SESSION['mail_error'] = $mail_error; }
  } else {$mail_error = "Bitte geben Sie Ihre E-Mail Addresse ein!";
          $_SESSION['mail_error'] = $mail_error; }

  if (empty($_POST['betreff'])) {
    $betreff = "Neue Kontaktanfrage";
    $_SESSION['betreff'] = $betreff;
  } else {$betreff = test_input($_POST['betreff']);
          $_SESSION['betreff'] = $betreff; }

  if (!empty($_POST['nachricht'])) {
    $text = test_input($_POST['nachricht']);
    $_SESSION['nachricht'] = $text;
    $_SESSION['text_error'] = "";
  } else {$text_error = "Bitte geben Sie Ihre Nachricht ein!";
          $text = "";
          $_SESSION['nachricht'] = $text;
          $_SESSION['text_error'] = $text_error; }

  header("Location: http://sutis.ch#kontakt");
  return;
}

$success = "";
$empfaenger = "info@sutis.ch";


$mail_error = isset($_SESSION['mail_error']) ? $_SESSION['mail_error'] : "";
$text_error = isset($_SESSION['text_error']) ? $_SESSION['text_error'] : "";
$from = isset($_SESSION['mail']) ? $_SESSION['mail'] : "";
$betreff = isset($_SESSION['betreff']) ? $_SESSION['betreff'] : "";
$text = isset($_SESSION['nachricht']) ? $_SESSION['nachricht'] : "";



if ($mail_error == "" and $text_error == "" and !empty($from) and !empty($betreff) and !empty($text)) {

  //Datum, wann die Mail erstellt wurde
  $name_tag = array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");
  $num_tag = date("w");
  $tag = $name_tag[$num_tag];
  $jahr = date("Y");
  $n = date("d");
  $monat = date("m");
  $time = date("H:i");

  //Nachricht welche im Email zu lesen ist zusammenstellen
  $msg = ":: Gesendet am $tag, den $n.$monat.$jahr - $time Uhr ::\r\n\n";
  $msg .= $text;

  //Header zusammenstellen
  $header = "From: " .$from ."\r\n";
  $header .= "Reply-To: " .$from ."\r\n";
  $header .= ("Content-type: text/plain; charset=\"utf-8\"\r\n");

  //Email senden
  $mail_senden = mail($empfaenger, $betreff, $msg, $header);


  if($mail_senden){
    session_unset();
    $success = "Vielen Dank, Ihre Nachricht wurde erfolgreich versendet!
    Wir kümmern us um Ihre Anfrage. Herzliche Grüsse";

    //Bestätigungsmail an Absender
    $msg2 = "Sie haben folgende Anfrage an uns übermittelt und wir werden uns schnellstmöglich mit Ihnen in Verbindung setzen. \nVielen Dank, Ihr Sutis Team! \r\n\n\n\n";
    $msg2 .= $msg;

    $header2 = "From: " .$empfaenger ."\r\n";
    $header2 .= ("Content-type: text/plain; charset=\"utf-8\"\r\n");
    $betreff2 = "Kontaktanfrage Sutis";


    $mail_absender = mail($from, $betreff2, $msg2, $header2);

    $from = "";
    $betreff = "";
    $msg = "";
    $msg2 = "";
    $text = "";
    $header = "";
    $header2 = "";

  } else{
    $success = "Ihre Nachricht konnte nicht erfolgreich zugestellt werden!
    Bitte schreiben Sie uns eine Mail an: info@sutis-imbiss.ch";
    session_unset();
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
