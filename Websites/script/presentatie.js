window.onload = function () {
    var i = 0
    function slide() {
        document.getElementById('slideshow').style.backgroundImage = 'url("images/slide'+i+'.jpg")';
        if (i == 3) {
            i = 0
        } else {
            i++
        }
    }
    slide();
    setInterval(slide, 3000)
}