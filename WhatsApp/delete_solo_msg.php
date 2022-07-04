<?php

session_start();

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

$engine = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "total";
$username = "root";
$password = "root";

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username ,$password);

var_dump($_GET['conv']);

$delete = $pdo->prepare("DELETE FROM message WHERE id = $id "); 

$delete ->execute();

http_response_code(302);    

header('Location: Sekai.php?id='.$_GET['conv']);

exit(); 

?>