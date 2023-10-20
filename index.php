<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';



$mail = new PHPMailer(true);

//Server settings
$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = 'd766e503ebc453';
$mail->Password = '1945f1e073fa54';

//Recipients
$mail->setFrom("doNotAnswer@pepeAnglais.com", "Website Admin");
$mail->addAddress("0be2496758-6d3f21+1@inbox.mailtrap.io", "Jérôme Delodder");






$message = "";

//Validation du formulaire
if (isset($_POST["btSend"])) {
    //Validation des champs
    if (!empty($_POST["mail"]) && !empty($_POST["selection"] && !empty($_POST["msgBody"]))) {
        $email = $_POST["mail"];
        //paramètres de contenu du message
        $mail->Subject = $_POST["selection"];
        $mail->Body = $_POST["msgBody"];
        //Validation de l'envoi de la copie
        if (isset($_POST["sendCopy"])) {
            $mail->addCC($email);
            $mail->send();
        } else
            $mail->send();
    } else {
        $message = "Tous les champs doivent être remplis";
    }
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Title</title>
</head>

<body>
    <header class="header">
        <h1 id="mainTitle" class="titles">Exercice librairie mail</h1>
    </header>
    <section class="mainContent">
        <div id="divForm">
            <!--Formulaire-->
            <form method="post" id="form">
                <fieldset id="fields">
                    <legend id="legendForm">Formulaire de test</legend>
                    <input class="formInput" id="mailForm" name="mail" placeholder="Email">
                    <select id="formSelect" class="formInput" name="selection">
                        <option class="options">--Faites votre choix--</option>
                        <option class="options">Problèmes liés au site</option>
                        <option class="options">Problèmes de compte</option>
                        <option class="options">suggestion</option>
                    </select>
                    <textarea class="formInput" id="msgBody" name="msgBody" placeholder="votre message"></textarea>
                    <input class="formInput" id="checkInput" type="checkbox" name="sendCopy">
                    <label id="sendCopyLabel" for="checkInput">Recevoir une copie</label>
                    <button name="btSend" type="submit" id="btSend" class="formInput"><span id="btText">Send</span></button>
                </fieldset>
            </form>
        </div>
        <p><?= $message ?></p>
        <a href="devis.php">Exo devis</a>
    </section>

</body>

</html>