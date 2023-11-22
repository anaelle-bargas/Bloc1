
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Font-tester</title>
</head>
<body>

    <input type="number" name="size" id="" placeholder = "Entrer une taille en px">
    <input type="color" name="color" id="color" placeholder = "Entrer une couleur">
    <textarea name="message" placeholder = "Message" id="" cols="30" rows="10" style = "color:<?=$color?>; font-size:<?=$size?>px;"></textarea>

<?php

$message = $_GET["message"]??"Il n'y a pas de paramètres";
$color = $_GET["color"]??"black";

$size = $_GET["size"]??12;
?>
    
    <!-- <p style = "color:<?=$color?>; font-size:<?=$size?>px;"><?=$message?></p> -->
<style>
    body{
        display:flex;
        align-items:center;
        justify-content:center;
        font-family: Arial;
        flex-direction:column;
    }
    a{
        padding:5px;
    }
    p{
        padding:5px;
    }
    form{
        height:auto;
        width:auto;
        border-radius:15px;
        box-shadow: 0px 0px 50px rgb(0, 0, 0);
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        padding:35px;

    }
    input, textarea{
        padding:15px;
        margin:15px;
        border-radius:15px;

    }
    #color{
        width:22%;
        height:2%;
    }
</style>
</body>
</html>