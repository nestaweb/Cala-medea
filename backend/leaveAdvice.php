<?php 
$nom = $_POST["firstName"];
$prenom = $_POST["lastName"];
$message = $_POST["advice"];
var_dump($message);
$pdo = new PDO('sqlite:./data.db');
$data = [
    'fisrtName' => $nom,
    'lastName' => $prenom,
    'content' => $message,
];
$sql = "INSERT INTO ADVICES(firstName,lastName,content) VALUES (:fisrtName,:lastName,:content)";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);
header("Location: ../index.php")
?>