
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Ipsum</title>
</head>
<body>
    
<?php
$nb_lignes = $_GET["nb_lignes"]??2;
$nb_colonnes = $_GET["nb_colonnes"]??2;

echo "<table>"
for($i=0;$i<$nb_lignes;$i++){
    for($j=0;$j<$nb_colonnes;$j++)
    
}
?>
<h1>Générer un tableau</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <input type="number" name="nb_lignes" value = "<?=$nb_lignes?>">
        <input type="number" name="nb_colonnes" value = "<?=$nb_colonnes?>">
        <button type="submit">Entrer</button>
    </form>
    <input type = "textarea" id = "textarea" row = "30" cols = "10" value = "<?=$pars?>" readonly>
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
    input, button{
        padding:15px;
        margin:15px;
        border-radius:15px;

    }

    /* #textarea{
        height:auto;
        width:auto;
   
        word-wrap: break-word;
    } */

</style>
</body>
</html>