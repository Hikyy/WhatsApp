<?php

session_start();

$now_user = $_SESSION['id'];

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

$engine = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "total";
$username = "root";
$password = "root";

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username ,$password);

$delete = $pdo->prepare("DELETE FROM message WHERE FromUser = $now_user and ToUser = $id OR FromUser = $id and ToUser = $now_user "); 


$delete ->execute();

http_response_code(302);    

header('Location: Sekai.php?id='.$_GET['id']);

exit(); 