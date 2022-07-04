<?php

session_start();

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
 
include('db_engine.php');

if($_SESSION['connecte'] != true){
    header("Location: Connexion.php");
    return;
}


$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname;charset=utf8mb4", $username ,$password);
$pdo->exec("SET NAMES utf8mb4");
$user = $pdo->prepare("SELECT Pseudo,Password,id FROM utilisateur"); 

$user->execute();
$log = $user->fetchAll(PDO::FETCH_ASSOC);






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8MB4">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/Style_Sekai.css">
</head>
<body>
    <section class="centre-social">
        <div class="left">
        <div class="haut-gauche">    

        <figure class="me">

        <img  src="./asset/pp.jpeg" alt="">

        </figure>

        <div class="groupe-svg">

            <a href="#">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1" id="ee51d023-7db6-4950-baf7-c34874b80976" x="0" y="0" viewBox="0 0 24 24" width="28" height="28" class=""><path fill="#54656F" d="M12 20.664a9.163 9.163 0 0 1-6.521-2.702.977.977 0 0 1 1.381-1.381 7.269 7.269 0 0 0 10.024.244.977.977 0 0 1 1.313 1.445A9.192 9.192 0 0 1 12 20.664zm7.965-6.112a.977.977 0 0 1-.944-1.229 7.26 7.26 0 0 0-4.8-8.804.977.977 0 0 1 .594-1.86 9.212 9.212 0 0 1 6.092 11.169.976.976 0 0 1-.942.724zm-16.025-.39a.977.977 0 0 1-.953-.769 9.21 9.21 0 0 1 6.626-10.86.975.975 0 1 1 .52 1.882l-.015.004a7.259 7.259 0 0 0-5.223 8.558.978.978 0 0 1-.955 1.185z"></path></svg></a>
            <a href="#">

            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" class=""><path fill="#54656F" d="M19.005 3.175H4.674C3.642 3.175 3 3.789 3 4.821V21.02l3.544-3.514h12.461c1.033 0 2.064-1.06 2.064-2.093V4.821c-.001-1.032-1.032-1.646-2.064-1.646zm-4.989 9.869H7.041V11.1h6.975v1.944zm3-4H7.041V7.1h9.975v1.944z"></path></svg></a>
            
            <a class href="GoodBye.php">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" class=""><path fill="#54656F" d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z"></path></svg></a>
    
            </div>
        </div>

        <div class="input-search">
            
        <svg class="loupe" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class=""><path fill="#54656F" d="M15.009 13.805h-.636l-.22-.219a5.184 5.184 0 0 0 1.256-3.386 5.207 5.207 0 1 0-5.207 5.208 5.183 5.183 0 0 0 3.385-1.255l.221.22v.635l4.004 3.999 1.194-1.195-3.997-4.007zm-4.808 0a3.605 3.605 0 1 1 0-7.21 3.605 3.605 0 0 1 0 7.21z"></path></svg>
        <input class="input-left" placeholder="Recherche ou démarrer une nouvelle discussion"  type="text">
        
        </div>
        <div class="border-bottom-input"></div>
        <div class="list-conversation">
        <?  foreach($log as $logg): ?>
            <a class="display"href="Sekai.php?id=<?= $logg['id']; ?>">
            <div class="mini-conv">
                
                <figure class="pp_conv">
                    <img src="./asset/258710007_698352157962389_1359704476463310736_n.jpg" alt="">
                </figure>
                <div class="block">

                <?= $logg['Pseudo']; ?>

                
                <p>Conversation</p>
                <div class="border-bottom"></div>
                </div>
                
            </div></a>
            <?php	 endforeach;?>
        </div>

    </div>
    <div class="droite">
        <div class="haut-droite">
        <div class="left_top">
        <figure>
            <img class="img" src="./asset/pp1.jpeg" alt="">
        </figure>
        <h2></h2>
        </div>
        <div class="right_top">

        <a href="#">

        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" class=""><path fill="#54656F" d="M15.009 13.805h-.636l-.22-.219a5.184 5.184 0 0 0 1.256-3.386 5.207 5.207 0 1 0-5.207 5.208 5.183 5.183 0 0 0 3.385-1.255l.221.22v.635l4.004 3.999 1.194-1.195-3.997-4.007zm-4.808 0a3.605 3.605 0 1 1 0-7.21 3.605 3.605 0 0 1 0 7.21z"></path></svg></a>
        <button class="trois_point">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" class=""><path fill="#54656F" d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z"></path></svg>
    <a class="right_top_button off" href="delete_all.php?id=<?= $id ?>"> Supprimer la conversation</a>
    </button>
    <div class="search_result is_off"></div>
        </div>
        </div>

        <div class="conversation taille message">
        
            <div id="rayane" class="style_message">
            <figure class="crochet">
                <img src="./svgexport-19.svg" alt="">
            </figure>
            msg<span class="delete">id</span>
            <svg class="span" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="15" height="15" class=""><path fill="#53BDEB" d="m17.394 5.035-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-.427-.388a.381.381 0 0 0-.578.038l-.451.576a.497.497 0 0 0 .043.645l1.575 1.51a.38.38 0 0 0 .577-.039l7.483-9.602a.436.436 0 0 0-.076-.609zm-4.892 0-.57-.444a.434.434 0 0 0-.609.076l-6.39 8.198a.38.38 0 0 1-.577.039l-2.614-2.556a.435.435 0 0 0-.614.007l-.505.516a.435.435 0 0 0 .007.614l3.887 3.8a.38.38 0 0 0 .577-.039l7.483-9.602a.435.435 0 0 0-.075-.609z"></path></svg>

        </div>
            
            
            <figure class="is_off">
                <img src="./svgexport-15.svg" alt="">
            </figure>
            <h1 class="is_off">WhatsApp Web</h1>
            <h2 class="home_h2 is_off">Envoyez et recevez désormais des messages sans avoir à garder votre téléphone en ligne.</h2>
            <h2 class="home_h2 is_off">Utilisez WhatsApp sur un maximum de 4 appareils et 1 téléphone, simultanément.</h2>
        </div>
        <div class="input_down">
            <div class="svg_down">
            <button class="btn_primary_emoji">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" class="ekdr8vow dhq51u3o"><path fill="#54656F" d="M9.153 11.603c.795 0 1.439-.879 1.439-1.962s-.644-1.962-1.439-1.962-1.439.879-1.439 1.962.644 1.962 1.439 1.962zm-3.204 1.362c-.026-.307-.131 5.218 6.063 5.551 6.066-.25 6.066-5.551 6.066-5.551-6.078 1.416-12.129 0-12.129 0zm11.363 1.108s-.669 1.959-5.051 1.959c-3.505 0-5.388-1.164-5.607-1.959 0 0 5.912 1.055 10.658 0zM11.804 1.011C5.609 1.011.978 6.033.978 12.228s4.826 10.761 11.021 10.761S23.02 18.423 23.02 12.228c.001-6.195-5.021-11.217-11.216-11.217zM12 21.354c-5.273 0-9.381-3.886-9.381-9.159s3.942-9.548 9.215-9.548 9.548 4.275 9.548 9.548c-.001 5.272-4.109 9.159-9.382 9.159zm3.108-9.751c.795 0 1.439-.879 1.439-1.962s-.644-1.962-1.439-1.962-1.439.879-1.439 1.962.644 1.962 1.439 1.962z"></path></svg></button>
        <ul class="messenger_emojis_list is_off">

        </ul>
        <a href="#">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" class=""><path fill="#54656F" d="M1.816 15.556v.002c0 1.502.584 2.912 1.646 3.972s2.472 1.647 3.974 1.647a5.58 5.58 0 0 0 3.972-1.645l9.547-9.548c.769-.768 1.147-1.767 1.058-2.817-.079-.968-.548-1.927-1.319-2.698-1.594-1.592-4.068-1.711-5.517-.262l-7.916 7.915c-.881.881-.792 2.25.214 3.261.959.958 2.423 1.053 3.263.215l5.511-5.512c.28-.28.267-.722.053-.936l-.244-.244c-.191-.191-.567-.349-.957.04l-5.506 5.506c-.18.18-.635.127-.976-.214-.098-.097-.576-.613-.213-.973l7.915-7.917c.818-.817 2.267-.699 3.23.262.5.501.802 1.1.849 1.685.051.573-.156 1.111-.589 1.543l-9.547 9.549a3.97 3.97 0 0 1-2.829 1.171 3.975 3.975 0 0 1-2.83-1.173 3.973 3.973 0 0 1-1.172-2.828c0-1.071.415-2.076 1.172-2.83l7.209-7.211c.157-.157.264-.579.028-.814L11.5 4.36a.572.572 0 0 0-.834.018l-7.205 7.207a5.577 5.577 0 0 0-1.645 3.971z"></path></svg></a>
            </div>
                <form method="GET" >
            <label for="message">
            <input placeholder="Taper un message" type="text" name="msg" id="message"></label>
           
        </form>
        <a href="#">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" class=""><path fill="#54656F" d="M11.999 14.942c2.001 0 3.531-1.53 3.531-3.531V4.35c0-2.001-1.53-3.531-3.531-3.531S8.469 2.35 8.469 4.35v7.061c0 2.001 1.53 3.531 3.53 3.531zm6.238-3.53c0 3.531-2.942 6.002-6.237 6.002s-6.237-2.471-6.237-6.002H3.761c0 4.001 3.178 7.297 7.061 7.885v3.884h2.354v-3.884c3.884-.588 7.061-3.884 7.061-7.885h-2z"></path></svg></a>
        </div>
           
    </div>
    </section>

    <script>
        let list_msg = document.querySelector('.conversation.taille.message')
        let user = <?php echo json_encode($id); ?>;
        let user_now = <?= json_encode($_SESSION['id'])?>;
        let $form = document.querySelector('form')
        let $input = document.querySelectorAll('input')
        let button_delete_all = document.querySelector('.right_top button')
        let show_delete = document.querySelector('.right_top_button')
        let search = document.querySelector('.right_top a')
        let block_search = document.querySelector('.right_top')
        let result = document.querySelector('.search_result')
        let left_msg;
        let teeest;
        let compte = 0;
        let dom_input;
        let div;
        let totoo = document.querySelector('.search_result')
        let emoji_primary = document.querySelector('.btn_primary_emoji')
        let emoji_list = document.querySelector('.messenger_emojis_list')
        let emoji_list_solo = emoji_list.querySelectorAll('button')
        let input_for_emoji = document.querySelector('#message')
        var messageBody = document.querySelector('.conversation');
        let trois_point = document.querySelector('.trois_point');
        let prev_trois_point = trois_point.previousSibling;
        let display = document.querySelectorAll('.block .display');
        let name_conv = document.querySelector('.left_top h2');
        let ussser = <?php echo json_encode($log); ?>;
        messageBody.scrollTop = messageBody.scrollHeight;




        for(let i = 0 ; i < ussser.length; i++){
            if(ussser[i].id == user){

                name_conv.textContent = ussser[i].Pseudo
            }
        }



        
            emoji_primary.addEventListener('click', function (){
                emoji_list.classList.toggle('is_off')
                emoji_list.classList.toggle('flexou')
                
                for(let i = 0; i < emoji_list_solo.length; i++){

                emoji_list_solo[i].addEventListener('click', function(){

                input_for_emoji.value += emoji_list_solo[i].innerText
                
            })}
            })

        fetch("https://g.tenor.com/v1/search?q=anime&key=LIVDSRZULELA&limit=50",{
            cors: {
            origin: "*",
            methods: ["GET"]
        }
        })
        .then((response) => response.json())
        .then((data) => {
 

            for(let i = 0; i < data.results.length; i++){

                let img = document.createElement('img')
                img.setAttribute('src', data.results[i].media[0].gif.url)
                emoji_list.appendChild(img)
                img.classList.add('emoji')
                let emoji = document.querySelectorAll('.emoji')
                let text;
                

                emoji[i].addEventListener('click', function(){
                    text = emoji[i].getAttribute('src').trim();

                    let daata = {
                    input : text
                }
                    console.log(text)
                    fetch('http://localhost/ajax_insert.php?id='+user,{
                    method : 'POST',
                    body : JSON.stringify(daata)
                
                    }) 
                    fetch('http://localhost/ajax_select.php?id='+ user)
                    .then(function (response) {
                    
                    return response.text();
                    })
                    .then(function (text) {
                        
                        gestion(text);

                    }); 
                })

            }
        })







        search.addEventListener('click', function(){

            compte +=1;
            console.log(compte)
            let input = document.createElement('input')
            
            if((compte % 2) === 1){
            
            block_search.insertBefore(input, search);
            dom_input = document.querySelector('.right_top input')
            key_press(dom_input);

            }
            else{
                dom_input.remove()
            }})


        button_delete_all.addEventListener('click', function (){
            show_delete.classList.toggle('show')
            show_delete.classList.toggle('off')
        })


        fetch('http://localhost/ajax_select.php?id='+ user)
        .then(function (response) {
        
        return response.text();
        })
        .then(function (text) {
            
            gestion(text);
            let plus = document.querySelectorAll('.pluus')
            let deelete = document.querySelectorAll('.delete')
            let glisse = document.querySelectorAll('.style_message')





            
            yoyo = plus

            for(let i = 0; i < plus.length; i++){
                plus[i].addEventListener('click', function() {

                deelete[i].classList.toggle('show')
                deelete[i].classList.toggle('none')
                console.log(test[8].classList.contains('droiite'));
                
                if(teeest[8].classList.contains('droiite')){
                    console.log('yooo')
                }
            })
            }
            
            
        }); 

        $form.addEventListener('submit', function(event){
            save = '';
            event.preventDefault();
            if($input[1].value == ''){
                return;
            }
            
             let text = $input[1].value.trim()

             let data = {
                 input : text
             };

             fetch('http://localhost/ajax_insert.php?id='+user,{
                 method : 'POST',
                 body : JSON.stringify(data)
                
             }) 
         /* save =  $input.value;
            $input.value = '';
            tost.innerHTML += save; */

            setTimeout(function() {
                fetch('http://localhost/ajax_select.php?id='+ user)

            .then(function (response) {
            return response.text();
            })
            .then(function (text) {
                gestion(text);
            }); 
    }, 80);
            $input[1].value = '';
            
            

}); 


let yoyo;


function key_press(input){
    input.addEventListener('keyup', function (){
        
        if(input.value.length >= 0){
            result.classList.remove('is_off')
            result.classList.add('flex')
             
        } 
        if(input.value.length === 0){
            result.classList.add('is_off')
            result.classList.remove('flex')
        }
        totoo.textContent = '';

        for(let i = 0; i < left_msg.length; i++){
            if((left_msg[i].innerText).includes(input.value)){
                
				if(input.value.length >=2){
                div = document.createElement('p')
                result.appendChild(div)
                div.textContent = left_msg[i].innerText;
                
                }
             }
             
        }
        


    })
}



        function gestion(remplace){
            hehe = remplace
            if(remplace != list_msg.innerHTML){
            list_msg.innerHTML = remplace;

            }
            left_msg = document.querySelectorAll('.glisse')
            for(let i = 0; i < left_msg.length; i++){
                left_msg[i].textContent
            }
            let left_msg_num = document.querySelectorAll('.num')
            let msg = document.querySelector('.msg')
            
            console.log(left_msg)


            for(let i = 0; i < left_msg_num.length; i++){
 
                left_msg[i].classList.add('style_message')
                left_msg[i].style.marginLeft = 0 + '%'
            if(left_msg_num[i].textContent == user_now ){
                
                /* left_msg[i].style.marginLeft = 79 + '%'  */
                left_msg[i].style.alignSelf = 'end';
                left_msg[i].style.marginRight = 0 + '%'
                left_msg[i].style.background = 'white'
                left_msg[i].innerHTML +=  `<figure class="crochet">
                <img src="./svgexport-17.svg" alt="">
            </figure>`
                left_msg[i].classList.add('droiite')
            }
            else{
                left_msg[i].innerHTML +=  `<figure class="crochet_left">
                <img src="./svgexport-19.svg" alt="">
            </figure>`
            left_msg[i].classList.add('radius')
            }
            left_msg[i].style.marginLeft = 0 + '%'
            left_msg_num[i].remove();
            if(left_msg[i].classList.contains('droiite')){
                let deelete = document.querySelectorAll('.delete')
                deelete[i].style.left = -24 +'%'
                deelete[i].style.right = 0;
                }
        }
        }

        function plus (){
            plus[0].addEventListener('click', function() {
                console.log('Yess')
            })
        }

        /*          messageBody.addEventListener('scroll', console.log) 
            messageBody.addEventListener('scroll', function(e){
            console.log(this.scrollTop)
            console.log(messageBody.scrollTopMax)}) 
            emoji_list.classList.toggle('flexou') 
            let yili = this.scrollY; 
            console.log(Object.assign({}, this));
            console.log(this.scrollTop);
            console.log({ ...this }); 
            console.log(Object.keys(this))  */

    </script>

    
</body>
</html>