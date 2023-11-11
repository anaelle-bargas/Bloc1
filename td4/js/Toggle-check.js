var compte = 0;

document.getElementById("check").addEventListener("change", function(){
    if(compte%2==0){
        document.getElementById("image").style.display="none";
        document.getElementById("cocher").style.display="none";
        document.getElementById("decocher").style.display="flex";
    }
    else{
        document.getElementById("image").style.display="flex";
        document.getElementById("cocher").style.display="flex";
        document.getElementById("decocher").style.display="none";
    }
    compte++
}
)