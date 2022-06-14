<?php

$to = "nesta.loisy@gmail.com";

$subject = "Nouveau message de" . $_POST["firstName"] . " " . $_POST["lastName"];

$message = "Numéro de téléphone : " . $_POST["phone"] . "\nE-mail : " . $_POST["email"] . "\n" . $_POST["message"];
$message = wordwrap($message, 70, "\n");

$headers = [
    "From" => "contcat@villaborddemercorse.com",
    "Reply-To" => $_POST["email"]
];

mail($to, $subject, $message, "From:contcat@villaborddemercorse.com\nReply-To:" . $_POST["email"]);

header("Location: ../index.php");