var supprimer = true;

function autorisationSuppr(o_n){
    if(o_n == 'n'){
        supprimer=false;
    }
    else{
        supprimer=true;
    }
    document.getElementById("demande").style.display="none";
    document.getElementById("tout").style.display="none";
    if(supprimer==true){
        document.getElementById("image").style.display="none";
        document.getElementById("bouton").style.display="none";
    }
}

function affichageFenetre(){
    if(document.getElementById("image").offsetWidth != "0"){
        document.getElementById("demande").style.display="flex";
        document.getElementById("tout").style.display="flex"; 

    }

}