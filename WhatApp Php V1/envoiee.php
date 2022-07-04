<?php

/* $envoie = $_POST; */

$envoie = filter_input(INPUT_POST, "envoie");
/* var_dump($envoie); */

$engine = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "messagerie";
$username = "root";
$password = "root";

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username ,$password);

$chat = $pdo->prepare("INSERT INTO chat (messages) VALUES (:envoie)");

$chat ->execute([
    ":envoie" => $envoie
]);
/* var_dump($chat); */

http_response_code(302);    
header('Location: index.php');
exit();
?>