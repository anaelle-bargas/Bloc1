function AddUser(){
    var endroit_ou_ecrire = document.getElementById('ecriture')

    const li = document.createElement('li');
    li.innerText = document.getElementById("name").value;

    endroit_ou_ecrire.appendChild(li);

    document.getElementById("name").value = ""
}
