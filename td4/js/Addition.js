function Addition(){

    var endroit_ou_ecrire_resultat = document.getElementById('div_addition')

    const p = document.createElement('p');
    p.innerText = parseInt(document.getElementById("number1").value) + parseInt(document.getElementById("number2").value);

    endroit_ou_ecrire_resultat.appendChild(p);

}