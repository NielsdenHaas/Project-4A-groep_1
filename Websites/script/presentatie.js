//<img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Flag_Admirals_of_the_Blue_Squadron_Royal_Navy.png" id="slide1">
  //  <img src="https://colourlex.com/wp-content/uploads/2017/03/Chrome-red-painted-swatch-203-FB.jpg" id="slide2">
 //   <img src="https://www.leuketricotstofjes.nl/images/stories/virtuemart/product/8763N45.jpg" id="slide3">
  //  <img src="https://vistapointe.net/images/green-1.jpg" id="slide4">

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