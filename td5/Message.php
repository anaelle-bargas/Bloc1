
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages dans l'url</title>
</head>
<body>
    <a href="?message=Bla">Afficher le message "Bla"</a>
    <a href="?message=Blo">Afficher le message "Blo"</a>
    <a href="?message=Bli">Afficher le message "Bli"</a>
<?php

$message = $_GET["message"]??"Message par défaut";
echo "<p>".$message."</p>"

?>
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
        font-size:35px;
    }
</style>
</body>
</html>