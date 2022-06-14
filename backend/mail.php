<?php

$to = "nesta.loisy@gmail.com";

$subject = "Nouveau message de " . $_POST["firstName"] . " " . $_POST["lastName"];

$message = "Ce message vous a été envoyé via le formulaire de contact du site villaborddemercorse.com\n\nNuméro de téléphone : " . $_POST["phone"] . "\nE-mail : " . $_POST["email"] . "\n\n" . $_POST["message"];
// $message = wordwrap($message, 70, "\n");

$headers = [
    "From" => "contcat@villaborddemercorse.com",
    "Reply-To" => $_POST["email"]
];

mail($to, $subject, $message, "From:contcat@villaborddemercorse.com\nReply-To:" . $_POST["email"]);

header("Location: ../index.php");