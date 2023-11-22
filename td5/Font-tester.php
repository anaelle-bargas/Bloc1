
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Font-tester</title>
</head>
<body>
    <form action=""  method = "get">
        <input type="text" name="message" id="" placeholder = "Entrer un message">
        <input type="text" name="color" id="" placeholder = "Entrer une couleur">
        <input type="text" name="size" id="" placeholder = "Entrer une taille">
        <input type="submit" value="Entrer">
    </form>
<?php

$message = $_GET["message"]??"Il n'y a pas de paramètres";
$color = $_GET["color"]??"black";

$size = $_GET["size"]??12;
?>
    
    <p style = "color:<?=$color?>; font-size:<?=$size?>px;"><?=$message?></p>
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
    input{
        padding:15px;
        margin:15px;
        border-radius:15px;

    }
</style>
</body>
</html>