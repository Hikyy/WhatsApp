<?php

include('filter_input.php');

include('db_engine.php');

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username ,$password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$filter_Pseudo = htmlspecialchars($Pseudo);
$filter_Passwword = htmlspecialchars($mdp);

$pwd_hash = password_hash($filter_Passwword, PASSWORD_DEFAULT);


if(!empty($filter_Pseudo) && !empty($pwd_hash)){


  
  $chat = $pdo->prepare("INSERT INTO utilisateur (Pseudo,Password, contact_id) VALUES (:Pseudo, :pwd_hash, '1');"); 

  $chat ->execute([
    ':Pseudo' => $filter_Pseudo,
    ':pwd_hash' => $pwd_hash,
  ]);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/Page_Log.css">
</head>
<body>


<div class="container" >
  <div class="block_left">
  <div class="white">
  </div>
  </div>

  <form method="POST" class="search-form" enctype="multipart/form-data"   >

      <h2 class="sign">Register</h2>
      <div class="flex">
      <label for="User">Identifiant</label>
      <input type="text" name="id" id="User" />

      <label for="pass">Mot de Passe</label>
      <input type="password" name="password" id="pass">

        <button type="submit">
          
         Sign up
          <img src="./fleche-droite.png" alt="">
        </button>
        
        </div>
  </form>

  </div>
  
  </body>
</html> 