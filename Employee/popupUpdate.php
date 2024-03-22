<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PopupUpdate</title>
</head>
<body>
    <style>
        .popup{
    width: 400px;
    background-color: white;
    border-radius: 20px;
    padding: 0px 30px 20px;
    text-align: center;
    position: absolute;
    top:0%;
    left:50%;
    transform: translate(-50%,-50%) scale(0.1);
    visibility: hidden;
    transition: transform 0.4s,top 0.4s;
}

.open_popup{
    visibility: visible;
    top: 50%;
    transform: translate(-50%,-50%) scale(1);
}
    </style>

    <?php

    for( $i = 0; $i < 3; $i++ ){

        ?>

<button  onclick="openpopup(<?= $i?>)">Click</button>
    <div class="popup" id="popup">
    </div>

        <?php

    }

    ?>
    
    <script>
        function openpopup(event){
            const popupEle=document.getElementById("popup");
            popupEle.classList.add("open_popup");
            let formEle=`<form method="post" action="#">
                <div class="input_div">
                    <input type="text" name="msg"  id="msg" class="msg_input" placeholder="${event}" required>
                </div>
                <div class="input_div">
                    <input type="text"  name="color" id="color" class="color_input" placeholder="Favourite color.." required>
                </div>
                <div class="input_div">
                    <input type="number" name="num" id="num" class="num_input" placeholder="Favourite number..">
                </div>
                <input type="submit" onclick="kk('val')" value="send" class="submit_btn">
            </form> `;

       
            popupEle.innerHTML=formEle;
            console.log(popupEle);
         }

         const kk = (ev) => {

            console.log(ev)

         }
    </script>
</body>
</html>