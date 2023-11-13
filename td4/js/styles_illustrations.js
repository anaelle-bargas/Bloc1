function changeButton(commande, valeur = ''){
    console.log(commande, document.getElementById("texte").style.commande);

    if (valeur == ''){
        document.getElementById("texte").style.commande = document.getElementById(valeur).value

    }
    else{
        document.getElementById("texte").style.commande = valeur;

    }
}

function textDecoration(valeur){
    document.getElementById("texte").style.textDecoration = valeur;
    
}

var nbClickStyle = 0;
function fontStyle(){
    if(nbClickStyle%2==0){
        document.getElementById("texte").style.fontStyle= "italic";
        
    }
    else{
        document.getElementById("texte").style.fontStyle= "none";
        
    }
    nbClickStyle++
}

var nbClickBold = 0;
function fontWeight(){
    if(nbClickBold%2==0){
        document.getElementById("texte").style.fontWeight= "bold";
        
    }
    else{
        document.getElementById("texte").style.fontWeight= "none";
        
    }
    nbClickBold++
}