<?php
  // on inclut la page

  echo "Hello world, again";

include "header.php";
include "main.php";
include "footer.php";

// Inclure les 3 classes principales de phpmailer (utilisées sous Composer)
//    - PHPMailer gère le processus d'envoi des mails
//    - la classe SMTP permet de passer par un serveur SMTP plutôt que par la fonction mail() qui n'est pas sécurisée
//    - la classe Exception nous permet d'obtenir des messages d'erreur
// 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once 'C:\Users\marie\vendor/autoload.php';

$mail = new PHPMailer(true); // 'true' active les exceptions pour une meilleure gestion des erreurs

// configurer phpmailer avec un serveur SMTP (gmail) clé: XXX

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'XXX';
$mail->Password = 'XXX';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

// ajouter l'expéditeur et le destinataire

$mail->setFrom('mh.feyfant.knight@gmail.com', 'Marie-Helene expéditrice');
$mail->addAddress('marieheleneknight46@gmail.com', 'Marie-Helene destinataire');
$mail->Subject = 'Test PHPMailer';
$mail->Body = 'Voici un e-mail envoyé avec PHPMailer';

// la pièce jointe

$mail->addAttachment('C:\Users\marie\OneDrive\Documents\Workspace\Travail Musée Gabriel\AutresFichiers\hearts-9463310_640.jpg');

// envoyer le mail

if ($mail->send()) {
    echo 'E-mail envoyé avec succès';
} else {
    echo "Erreur lors de l'envoi : " . $mail->ErrorInfo;
}
?>