<?php
session_start();

if(isset($_SESSION['connecte'])){
  if($_SESSION['connecte'] === true){
    header("Location: Sekai.php?id=1");
    die();
  }
}

include('filter_input.php');

include('db_engine.php');

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username ,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$Filter_Pseudo = htmlspecialchars($Pseudo);
$Filter_Mdp = htmlspecialchars($mdp);

$error = false;

try{

  if(!empty($Filter_Pseudo) && !empty($Filter_Mdp)){
    
    $chat = $pdo->prepare("SELECT * FROM utilisateur where Pseudo = :Pseudo"); 

    $chat ->execute([
      ":Pseudo" => $Filter_Pseudo
    ]);

    $log = $chat ->fetch(PDO::FETCH_ASSOC);


 

    if($log && password_verify($Filter_Mdp, $log["Password"])){

        $_SESSION['id'] = $log['id'];
        $_SESSION['user'] = $log['Pseudo'];
        $_SESSION['connecte'] = true;
        
        header("Location: Sekai.php?id=1");
        die();
    }
    else{
      $error = true;

    }
  }
}

catch(PDOException $e){
  echo 'Échec lors de la connexion : ' . $e->getMessage();
  exit();
}





///////////////////////
    // Ancienne Méthode que j'utilisé en MARS.

/* foreach($log as $logg){
    echo $logg;
} */
/* 
foreach($log as $logg){
    if($login === $logg['Pseudo']){
        if($mdp === $logg['Password']){
        echo $logg['Password'] . "</br>";
        echo $logg['id']  . "</br>";
        $num = $logg['id'];
        echo 'yes </br>';
        $_SESSION['user'] = $logg['Pseudo'];
        $_SESSION['connecte'] = true;
        $_SESSION['id'] = $logg['id'];
        $tab = [];
        $tab[] = $_SESSION['user_id'];
        $test = $pdo->prepare("UPDATE utilisateur SET contact_id = '1' WHERE utilisateur.id = $num"); 
        $test ->execute();
        var_dump($tab);
        
        header("Location: Sekai.php?id=1");
    }
    }
} */


//if(($login === $logg['Pseudo'])  ($mdp === $logg['Password'])){






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

  <form method="POST" class="search-form">

      <h2 class="sign">Sign in</h2>
      <div class="flex">
      <label for="User">Identifiant</label>
      <input type="text" name="id" id="User" />

      <label for="pass">Mot de Passe</label>
      <input type="password" name="password" id="pass">

      
        <button type="submit">
          
          Chercher
          <img src="./fleche-droite.png" alt="">
        </button>
        
        </div>
        <?php if($error): ?>
      <p style="text-align:center;color:red; font-size:20px; margin-top:10px">Vos identifiant sont incorrect...</p>
    <?php endif; ?>
  </form>
    
  </div>

  </body>
</html>