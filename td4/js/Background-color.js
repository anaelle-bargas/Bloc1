function ChangeColor(){
    var r = Math.floor(Math.random() * 256)
    var v = Math.floor(Math.random() * 256)
    var b = Math.floor(Math.random() * 256)
    document.body.style.background = 'rgb('+r+', '+v+', '+b+')';
}