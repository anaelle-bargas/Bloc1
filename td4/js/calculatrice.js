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
    nbClick = 0;

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
        cal = "";
        document.getElementsByClassName("resultat")[0].innerText = "calcul invalide";

    }
    document.getElementsByClassName("calcul")[0].innerText = cal;

    document.getElementsByClassName("resultat")[0].style.display = "flex";

    nbClick = 0;

}



function plus_ou_moins(){
    console.log(cal.charAt(cal.length-1), typeof(cal.charAt(cal.length-1)))

    if(cal.charAt(cal.length-1)!="+" && cal.charAt(cal.length-1)!="-" && cal.charAt(cal.length-1)!="*" && cal.charAt(cal.length-1)!=" " && cal.charAt(cal.length-1)!=""){
        
        if(nbClick %2==0){
            
            console.log("rentré")
            chiffres_a_englober = "";
            let i= (cal.length-1);
            
            while(!isNaN(parseInt(cal[i])) || cal[i] == "." && i>=0){
                chiffres_a_englober+=cal[i];
                console.log("chiffres a englober", chiffres_a_englober)
                i--;
            }
           
    
            
    
            
            
            
            lon_chiffres_englober = chiffres_a_englober.length;
            // dernierChiffre = cal[cal.length - 1];
            console.log(cal)
            cal = cal.slice(0, -lon_chiffres_englober);
            console.log(cal)
            cal += "(-"+chiffres_a_englober.split('').reverse().join('')+")";
            document.getElementsByClassName("calcul")[0].innerText = cal;

        }
        else{
            if(nbClick>0){
                var dernierIndexParentheseOuvert = cal.lastIndexOf('(');
                var dernierIndexNegatif = cal.lastIndexOf('-');
                cal = cal.slice(0, dernierIndexParentheseOuvert) + cal.slice(dernierIndexNegatif + 1);
                var dernierIndexParentheseFermee = cal.lastIndexOf(')');
                cal = cal.slice(0, dernierIndexParentheseFermee) + cal.slice(dernierIndexParentheseFermee + 1);
                
              
          
                console.log(cal, dernierIndexNegatif)
                document.getElementsByClassName("calcul")[0].innerText = cal;

            }
        }
        



    }
    nbClick++;
}

var nbClick = 0

// document.getElementById("plus_ou_moins").addEventListener("click", function(event) {
//     var clicActuel = event.target;

//     if (clicActuel === dernierElementClique) {
//         console.log("Double-clic détecté sur le même élément !");
//         // Votre code à exécuter lors d'un double-clic ici
//     }

//     dernierElementClique = clicActuel;
//     nbClick++;
// })
// document.getElementById("plus_ou_moins").addEventListener("focus", function(event) {
//     dernierElementClique = event.target;
// });