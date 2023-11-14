// function changeButton(commande, valeur = ''){
//     console.log(commande, document.getElementById("texte").style.commande);

//     if (valeur == ''){
//         document.getElementById("texte").style.commande = document.getElementById(valeur).value

//     }
//     else{
//         document.getElementById("texte").style.commande = valeur;

//     }
// }

function textDecoration(valeur){
    document.getElementById("texte").style.textDecoration = valeur;
    if(valeur=="underline"){
        document.getElementById("line-through").checked = false;
    }
    else{
        document.getElementById("underline").checked = false;

    }
    
}

var nbClickStyle = 0;
function fontStyle(){
    nbClickStyle++
    if(nbClickStyle%2!=0){
        document.getElementById("texte").style.fontStyle= "italic";
        
    }
    else{
        document.getElementById("texte").style.fontStyle= "normal";
        
    }
}

var nbClickBold = 0;
function fontWeight(){
    nbClickBold++

    if(nbClickBold%2!=0){
        document.getElementById("texte").style.fontWeight= "bold";

        
    }
    else{
        document.getElementById("texte").style.fontWeight= "normal";
        
    }
}

function changeFontSize(augmenter_ou_diminuer = ""){
    if(augmenter_ou_diminuer=='augmenter'){
        document.getElementById("texte").style.fontSize = Number(document.getElementById("size").value)+1+"px";
        document.getElementById("size").value = Number(document.getElementById("size").value)+1;
    }
    else if(augmenter_ou_diminuer == 'diminuer'){
        document.getElementById("texte").style.fontSize = Number(document.getElementById("size").value)-1+"px";
        document.getElementById("size").value = Number(document.getElementById("size").value)-1;
    }
    else{
        document.getElementById("texte").style.fontSize = event.target.value+"px";

    }
}

function changeFontFamily(){
    document.getElementById("texte").style.fontFamily = document.getElementById("police").options[document.getElementById("police").selectedIndex].value;
}

function changeColor(){
    console.log('click')
    // alert(commande)
    document.getElementById("texte").style.color = event.target.value;

}
// document.getElementById("couleur").style.backgroundColor=document.getElementById("couleur").value