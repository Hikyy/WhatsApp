<?php

 session_start();
$yolo = filter_input(INPUT_POST, "msg");
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
$test = $_SESSION['id'];



echo $id;

$engine = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "total";
$username = "root";
$password = "root";


/*
$chat = $pdo->prepare("SELECT msg,FromUser FROM message WHERE ToUser = $id AND FromUser = $test OR ToUser = $test AND FromUser = $id "); 
$chat -> execute();
$msg = $chat ->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($msg); */

$body = file_get_contents('php://input');

$body = json_decode($body, true);
$teest = $body['input'];
var_dump($_POST, $teest);

if(empty($teest)){
    return;
}

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username ,$password);


$envoie = $pdo->prepare("INSERT INTO message (FromUser,ToUser,msg) VALUES('$test','$id','$teest')");
$envoie  ->execute();

?>