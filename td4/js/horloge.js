function afficheHeure(){
    var date = new Date()
    var heures = date.getHours()
    var minutes = date.getMinutes()
    var secondes = date.getSeconds()
    var millisecondes = date.getMilliseconds()

    document.getElementById("heures").innerHTML="<p>"+heures+"</p>"
    document.getElementById("minutes").innerHTML="<p>"+minutes+"</p>"
    document.getElementById("secondes").innerHTML="<p>"+secondes+"</p>"
    document.getElementById("millisecondes").innerHTML="<p>"+millisecondes+"</p>"
    console.log(date);

}

afficheHeure()
setInterval(afficheHeure, 1)
