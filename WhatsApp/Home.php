<?php

session_start();
if(!isset($_SESSION["connecte"])){
/*     var_dump($_POST);
    var_dump($_SESSION);
    echo $_SESSION['user']; */
    
    http_response_code(302);
    header("Location: connection.php");
    exit();
}

echo $_SESSION['user'];



    
$engine = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "total";
$username = "root";
$password = "root";

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username ,$password);

$chat = $pdo->prepare("SELECT msg FROM message"); 
$user = $pdo->prepare("SELECT Pseudo,Password,id FROM utilisateur"); 


$chat ->execute();

$msg = $chat ->fetchAll(PDO::FETCH_ASSOC);

$user->execute();

$log = $user->fetchAll(PDO::FETCH_ASSOC);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?  foreach($log as $logg): ?>
    <a href="conversation.php?id=<?= $logg['id']; ?>"><?= $logg['Pseudo']; ?></br> </a>

    <?php endforeach;?>

    <div class="test">

    </div>
 


<h1>
    Yes
</h1>

<script>
    let href = document.querySelectorAll('a')
    let $div = document.querySelector('.test')
    let sub = document.querySelector('form')
    
    let look = <?php echo json_encode($log); ?>;
    console.log(href)
    console.log(look)

/*     for(let i = 0; i < href.length; i++){
        href[i].addEventListener('click', function (event){
            event.preventDefault();
            
            fetch('./conversation.php?id='+ look[i]['id'])
            
        .then(function (response) {
          console.log('jai fini de faire le fetch');

          return response.text();
        })
        .then(function (text) {

         
          $div.innerHTML = text;
        })
        })
        } */
    
    
    


</script>
    
</body>
</html>