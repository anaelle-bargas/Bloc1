var cal = "";
var result = 0;
var result_bon = true;

function calcul(elem){
    cal+=elem;

    if ( document.getElementsByClassName("resultat")[0].offsetWidth !=0){
        document.getElementsByClassName("resultat")[0].style.display = "none";
        cal = elem;
    }




    document.getElementsByClassName("calcul")[0].innerText = cal;
}


function calcul_egal(){
    try {
        // Votre code susceptible de générer une erreur
        result = eval(cal);
        cal+=" = ";
        document.getElementsByClassName("resultat")[0].innerText = result;
        console.log(result); // Cette ligne provoquera une erreur car l'opération n'est pas valide
    } catch (erreur) {
        // Gestion de l'erreur
        console.log("erreur de saisie")
        cal = " ";
        document.getElementsByClassName("resultat")[0].innerText = "calcul invalide";

    }
    document.getElementsByClassName("calcul")[0].innerText = cal;

    document.getElementsByClassName("resultat")[0].style.display = "flex";


}


function plus_ou_moins(){
    if(cal[cal.length-1]!="+" && cal[cal.length-1]!="-" && cal[cal.length-1]!="*" && cal[cal.length-1]!="."){
        newCal = cal.slice(0, -1);
        cal = newCal;
    }
}