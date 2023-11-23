
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Font-tester</title>
</head>
<body>
        <?php
        $message = $_POST["message"]??"Message par défaut";
        $color = $_POST["color"]??"black";

        $size = $_POST["size"]??12;
        if(isset($_POST["add_or_sub"])){
            
            if ($_POST["add_or_sub"]=="1"){
                $size+=1;
            }
            else if($_POST["add_or_sub"]=="-1"){
                $size-=1;

            }
        }
      
        
        ?>

        <form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
            <input type="number" name="size" value  = "<?=$size?>">
            <input type="color" id = "color" name="color"  value = "<?=$color?>">
            <input type="submit" value="Entrer">
            <button type="submit" name = "add_or_sub" value = "1">+</button>
            <button type="submit" name = "add_or_sub" value = "-1">-</button>
            <textarea name = "message" placeholder = "Message" cols="" rows="" style = "color:<?=$color?>; font-size:<?=$size?>px;"><?=$message?></textarea>
        </form>
        
    
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
        flex-direction:row;
        padding:35px;

    }
    input, button{
        padding:15px;
        margin:15px;
        border-radius:15px;

    }
    textarea{
        padding:5px;
        border-radius:15px;

    }
    #color{
        border-radius:5px;
        padding:0px;
        margin:0px;;
    }
</style>
</body>
</html>