<?php

/* $a=array(); */

/* var_dump($_POST["envoie"]); */


$envoie = filter_input(INPUT_POST, "envoie");
/* var_dump($envoie); */
    /* if($envoie){ */
    
$engine = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "messagerie";
$username = "root";
$password = "root";

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username ,$password);

$chat = $pdo->prepare("INSERT INTO chat (messages) VALUES (:envoie)");
/* $chaat = $pdo->prepare("SELECT * FROM chat where id = :id"); */

/* $chat ->execute([
    ":envoie" => $envoie
]);
 */
    /* } */
    /* echo $_POST["envoie"]; */
    /* array_push($a, $envoie);
    print_r($a); */

$affichage = $pdo->prepare("SELECT messages FROM chat");
$affichage ->execute();
$affichagge = $affichage->fetchAll(PDO::FETCH_ASSOC);

/* var_dump($affichagge); */
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <section class="centre-social">
        <div class="gauche">
        <div class="gauche-haut">
        <figure class="figure">
            <a href="#"> <img class="img" src="./pp.jpeg" alt=""></a>
        </figure>

        <div class="svg">
            <a href="#">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1" id="ee51d023-7db6-4950-baf7-c34874b80976" x="0" y="0" viewBox="0 0 24 24" width="28" height="28" class=""><path fill="#54656F" d="M12 20.664a9.163 9.163 0 0 1-6.521-2.702.977.977 0 0 1 1.381-1.381 7.269 7.269 0 0 0 10.024.244.977.977 0 0 1 1.313 1.445A9.192 9.192 0 0 1 12 20.664zm7.965-6.112a.977.977 0 0 1-.944-1.229 7.26 7.26 0 0 0-4.8-8.804.977.977 0 0 1 .594-1.86 9.212 9.212 0 0 1 6.092 11.169.976.976 0 0 1-.942.724zm-16.025-.39a.977.977 0 0 1-.953-.769 9.21 9.21 0 0 1 6.626-10.86.975.975 0 1 1 .52 1.882l-.015.004a7.259 7.259 0 0 0-5.223 8.558.978.978 0 0 1-.955 1.185z"></path></svg></a>
        <a href="#">

        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" class=""><path fill="#54656F" d="M19.005 3.175H4.674C3.642 3.175 3 3.789 3 4.821V21.02l3.544-3.514h12.461c1.033 0 2.064-1.06 2.064-2.093V4.821c-.001-1.032-1.032-1.646-2.064-1.646zm-4.989 9.869H7.041V11.1h6.975v1.944zm3-4H7.041V7.1h9.975v1.944z"></path></svg></a>
        
        <a href="#">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" class=""><path fill="#54656F" d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z"></path></svg></a>

        </div>
        </div>

        <div class="search">
            
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class=""><path fill="#54656F" d="M15.009 13.805h-.636l-.22-.219a5.184 5.184 0 0 0 1.256-3.386 5.207 5.207 0 1 0-5.207 5.208 5.183 5.183 0 0 0 3.385-1.255l.221.22v.635l4.004 3.999 1.194-1.195-3.997-4.007zm-4.808 0a3.605 3.605 0 1 1 0-7.21 3.605 3.605 0 0 1 0 7.21z"></path></svg>
            <div class="bord"></div>
            <form action="" method="post">
                <input placeholder="Rechercher ou démarrer une nouvelle discussion" type="text">
            </form>
        </div>
 

    <div class="overflow">
        <div class="barree">
            <div class="flexx">
                <div class="mini">

                    <figure>
                        <img src="./pp1.jpeg" alt="">
                    </figure>

                        <div>

                        <h2>
                            If($Bg for $Night)
                        </h2>

                        <p>Le projet</p>
                        </div>
                        
                </div>
                <div class="barre"></div>
            <p>hier</p>
            

            </div>
        </div>

        <div class="barree">
            <div class="flexx">
                <div class="mini">

                    <figure>
                        <img src="./pp2.jpg" alt="">
                    </figure>

                        <div>

                        <h2>
                            Ezzedine
                        </h2>

                        <p>est trop facile</p>
                        </div>
                        
                </div>
                <div class="barre"></div>
            <p>hier</p>
            

            </div>
        </div>

        <div class="barree">
            <div class="flexx">
                <div class="mini">

                    <figure>
                        <img src="./pp3.jpg" alt="">
                    </figure>

                        <div>

                        <h2>
                            Hassam le Best
                        </h2>

                        <p>Merci Rayane !</p>
                        </div>
                        
                </div>
                <div class="barre"></div>
            <p>hier</p>
            

            </div>
        </div>

        
        <div class="barree">
            <div class="flexx">
                <div class="mini">

                    <figure>
                        <img src="./pp3.jpg" alt="">
                    </figure>

                        <div>

                        <h2>
                            Hassam le Best
                        </h2>

                        <p>Merci Rayane !</p>
                        </div>
                        
                </div>
                <div class="barre"></div>
            <p>hier</p>
            

            </div>
        </div>

        
        <div class="barree">
            <div class="flexx">
                <div class="mini">

                    <figure>
                        <img src="./pp3.jpg" alt="">
                    </figure>

                        <div>

                        <h2>
                            Hassam le Best
                        </h2>

                        <p>Merci Rayane !</p>
                        </div>
                        
                </div>
                <div class="barre"></div>
            <p>hier</p>
            

            </div>
        </div>

        
        <div class="barree">
            <div class="flexx">
                <div class="mini">

                    <figure>
                        <img src="./pp3.jpg" alt="">
                    </figure>

                        <div>

                        <h2>
                            Hassam le Best
                        </h2>

                        <p>Merci Rayane !</p>
                        </div>
                        
                </div>
                <div class="barre"></div>
            <p>hier</p>
            

            </div>
        </div>

        
        <div class="barree">
            <div class="flexx">
                <div class="mini">

                    <figure>
                        <img src="./pp3.jpg" alt="">
                    </figure>

                        <div>

                        <h2>
                            Hassam le Best
                        </h2>

                        <p>Merci Rayane !</p>
                        </div>
                        
                </div>
                <div class="barre"></div>
            <p>hier</p>
            

            </div>
        </div>

        
        <div class="barree">
            <div class="flexx">
                <div class="mini">

                    <figure>
                        <img src="./pp3.jpg" alt="">
                    </figure>

                        <div>

                        <h2>
                            Hassam le Best
                        </h2>

                        <p>Merci Rayane !</p>
                        </div>
                        
                </div>
                <div class="barre"></div>
            <p>hier</p>
            

            </div>
        </div>

        
        <div class="barree">
            <div class="flexx">
                <div class="mini">

                    <figure>
                        <img src="./pp3.jpg" alt="">
                    </figure>

                        <div>

                        <h2>
                            Hassam le Best
                        </h2>

                        <p>Merci Rayane !</p>
                        </div>
                        
                </div>
                <div class="barre"></div>
            <p>hier</p>
            

            </div>
        </div>

        <div class="barree">
            <div class="flexx">
                <div class="mini">

                    <figure>
                        <img src="./pp3.jpg" alt="">
                    </figure>

                        <div>

                        <h2>
                            Hassam le Best
                        </h2>

                        <p>Merci Rayane !</p>
                        </div>
                        
                </div>
                <div class="barre"></div>
            <p>hier</p>
            

            </div>
        </div>
        

        

        

    </div>


    </div>

    <div class="milieu">
        <div class="haut-milieu">
            <div class="block">
                <figure>
                    <img class="img" src="./pp1.jpeg" alt="">
                </figure>

                    

                    <h2>
                        If($Bg for $Night)
                    </h2>
                </div>
            
            <div class="svg_un">
                <a href="#">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" class=""><path fill="#54656F" d="M15.009 13.805h-.636l-.22-.219a5.184 5.184 0 0 0 1.256-3.386 5.207 5.207 0 1 0-5.207 5.208 5.183 5.183 0 0 0 3.385-1.255l.221.22v.635l4.004 3.999 1.194-1.195-3.997-4.007zm-4.808 0a3.605 3.605 0 1 1 0-7.21 3.605 3.605 0 0 1 0 7.21z"></path></svg></a>
        <a href="#">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" class=""><path fill="#54656F" d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z"></path></svg></a>
        </div>
        
    </div>

   


    <div class="milieu-centre">
        
        <!-- <div class="mikasaa">
            
        <p class="mikasa">Mikasa</p> -->
        <img class="imgg" src="./sasha.gif" alt="">
        <img class="imggg" src="./mikasakawai.gif" alt="">
       <img class="imgg" src="./mikasa.gif" alt="">
        <div class="teest">
        
        <?php foreach($affichagge as $affichagges):?>
            <div class="style">
            <div style=" display: flex; position:relative;/* margin-block-end: 200px; 
            writing-mode: horizontal-tb;direction: rtl; */" ><div><?= $affichagges["messages"]?></div>



    <svg class="span" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="15" height="15" class=""><path fill="#53BDEB" d="m17.394 5.035-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-.427-.388a.381.381 0 0 0-.578.038l-.451.576a.497.497 0 0 0 .043.645l1.575 1.51a.38.38 0 0 0 .577-.039l7.483-9.602a.436.436 0 0 0-.076-.609zm-4.892 0-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-2.614-2.556a.435.435 0 0 0-.614.007l-.505.516a.435.435 0 0 0 .007.614l3.887 3.8a.38.38 0 0 0 .577-.039l7.483-9.602a.435.435 0 0 0-.075-.609z"></path></svg></div><div class="triangle"></div></div>
            
        <?php endforeach;?>
        </div>

    </div>
    <div class="milieu-baas">
        <div class="flexxxx">
            <div class="svg-trois">
                <a href="#">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" class="ekdr8vow dhq51u3o"><path fill="#54656F" d="M9.153 11.603c.795 0 1.439-.879 1.439-1.962s-.644-1.962-1.439-1.962-1.439.879-1.439 1.962.644 1.962 1.439 1.962zm-3.204 1.362c-.026-.307-.131 5.218 6.063 5.551 6.066-.25 6.066-5.551 6.066-5.551-6.078 1.416-12.129 0-12.129 0zm11.363 1.108s-.669 1.959-5.051 1.959c-3.505 0-5.388-1.164-5.607-1.959 0 0 5.912 1.055 10.658 0zM11.804 1.011C5.609 1.011.978 6.033.978 12.228s4.826 10.761 11.021 10.761S23.02 18.423 23.02 12.228c.001-6.195-5.021-11.217-11.216-11.217zM12 21.354c-5.273 0-9.381-3.886-9.381-9.159s3.942-9.548 9.215-9.548 9.548 4.275 9.548 9.548c-.001 5.272-4.109 9.159-9.382 9.159zm3.108-9.751c.795 0 1.439-.879 1.439-1.962s-.644-1.962-1.439-1.962-1.439.879-1.439 1.962.644 1.962 1.439 1.962z"></path></svg></a>

        <a href="#">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" class=""><path fill="#54656F" d="M1.816 15.556v.002c0 1.502.584 2.912 1.646 3.972s2.472 1.647 3.974 1.647a5.58 5.58 0 0 0 3.972-1.645l9.547-9.548c.769-.768 1.147-1.767 1.058-2.817-.079-.968-.548-1.927-1.319-2.698-1.594-1.592-4.068-1.711-5.517-.262l-7.916 7.915c-.881.881-.792 2.25.214 3.261.959.958 2.423 1.053 3.263.215l5.511-5.512c.28-.28.267-.722.053-.936l-.244-.244c-.191-.191-.567-.349-.957.04l-5.506 5.506c-.18.18-.635.127-.976-.214-.098-.097-.576-.613-.213-.973l7.915-7.917c.818-.817 2.267-.699 3.23.262.5.501.802 1.1.849 1.685.051.573-.156 1.111-.589 1.543l-9.547 9.549a3.97 3.97 0 0 1-2.829 1.171 3.975 3.975 0 0 1-2.83-1.173 3.973 3.973 0 0 1-1.172-2.828c0-1.071.415-2.076 1.172-2.83l7.209-7.211c.157-.157.264-.579.028-.814L11.5 4.36a.572.572 0 0 0-.834.018l-7.205 7.207a5.577 5.577 0 0 0-1.645 3.971z"></path></svg></a>
        </div>
        <form action="envoiee.php" method="POST" >
            <label for="message">
            <input type="text" name="envoie" id="message"></label>
           
        </form>
        <a href="#">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" class=""><path fill="#54656F" d="M11.999 14.942c2.001 0 3.531-1.53 3.531-3.531V4.35c0-2.001-1.53-3.531-3.531-3.531S8.469 2.35 8.469 4.35v7.061c0 2.001 1.53 3.531 3.53 3.531zm6.238-3.53c0 3.531-2.942 6.002-6.237 6.002s-6.237-2.471-6.237-6.002H3.761c0 4.001 3.178 7.297 7.061 7.885v3.884h2.354v-3.884c3.884-.588 7.061-3.884 7.061-7.885h-2z"></path></svg></a>
        </div>

    
    </div>
    </div>
     
        

</section>  
</body>
</html>