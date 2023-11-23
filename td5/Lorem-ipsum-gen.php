
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Ipsum</title>
</head>
<body>
    
<?php
$pars = "";
$nb_par = $_GET["nb_par"]??0;
for($i=0;$i<$nb_par;$i++){
    $pars.="Lorem Ipsum :\n\nEtenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.\n\nPost hanc adclinis Libano monti Phoenice, regio plena gratiarum et venustatis, urbibus decorata magnis et pulchris; in quibus amoenitate celebritateque nominum Tyros excellit, Sidon et Berytus isdemque pares Emissa et Damascus saeculis condita priscis.\n\nEt eodem impetu Domitianum praecipitem per scalas itidem funibus constrinxerunt, eosque coniunctos per ampla spatia civitatis acri raptavere discursu. iamque artuum et membrorum divulsa conpage superscandentes corpora mortuorum ad ultimam truncata deformitatem velut exsaturati mox abiecerunt in flumen.\n\n\n\n";
}
?>
<h1>Entrez un nb de paragraphes à générer</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <input type="number" name="nb_par" value = "<?=$nb_par?>">
        <button type="submit">Entrer</button>
    </form>
    <textarea readonly><?=$pars?></textarea>
    <!-- <input type = "textarea" id = "textarea" cols = "10" rows = "30" value = "<?=$pars?>" readonly> -->
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
    input, button, textarea{
        padding:15px;
        margin:15px;
        border-radius:15px;

    }

    textarea{
        height:55vh;;
        width:95%;
        /* white-space: nowrap; */
   
        word-wrap: break-word;
    }

</style>
</body>
</html>