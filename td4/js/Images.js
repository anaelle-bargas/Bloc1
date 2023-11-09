var currentImage = "dolomites-2897227";
function AfficheImage(newCurrentImage){
    document.getElementById(currentImage).style.display="none";
    document.getElementById(newCurrentImage).style.display="flex";
    currentImage = newCurrentImage;
}