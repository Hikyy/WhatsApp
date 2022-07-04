<?php



session_start();
$yolo = filter_input(INPUT_POST, "msg");
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
$test = $_SESSION['id'];


$engine = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "total";
$username = "root";
$password = "root";

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username ,$password);


$chat = $pdo->prepare("SELECT msg,FromUser,id FROM message WHERE ToUser = $id AND FromUser = $test OR ToUser = $test AND FromUser = $id "); 

$chat ->execute();

$msg = $chat ->fetchAll(PDO::FETCH_ASSOC);

$num= 0;


?>

<div class="msg">
<?php foreach($msg as $chaat): ?>
               <div class="num"><?= $chaat["FromUser"]; ?></div>
               <?php if(stristr($chaat['msg'], "https://media.tenor.com/")):?>
                <div class="glisse"><img class="div_img" src="<?=$chaat['msg']?>" alt="">
                
                <?php else:?>
        <div class="glisse"><?= $chaat['msg'];?> <?php endif;?><figure class="pluus">
                <img src="./svgexport-22.svg" alt="">
            </figure><div class="delete none">
                <a href="delete_solo_msg.php?id=<?= $chaat["id"]; ?>&conv=<?=$id?>"><figure>
                    <img src="./corbeille.png" alt="">
                </figure></a>
            </div></div>
        <?php $num +=1; ?>
    <?php endforeach;
    
    ?>
</div>



<script>
    let glisse = document.querySelectorAll('.glisse')
    let number = document.querySelector('.number')


</script>