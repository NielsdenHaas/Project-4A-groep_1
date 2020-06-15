function rotate() {
    document.getElementById("result").innerHTML = "";
    var randomNumber1 = (Math.random() * 6) + 1;
    var randomNumber2 = (Math.random() * 6) + 1;

    var rotateDegree1 = (randomNumber1 * 60) * (6 + Math.floor(Math.random() * 6));
    var rotateDegree2 = (randomNumber2 * 60) * (6 + Math.floor(Math.random() * 6));

    var image1 = document.getElementById("image1");
    var image2 = document.getElementById("image2");

    var oldRotation1 = image1.style.transform;
    if (oldRotation1) { oldRotation1 = oldRotation1.replace('rotate(', ''); oldRotation1 = oldRotation1.replace('deg)', ''); } else { oldRotation1 = 0; }
    var oldRotation2 = image2.style.transform;
    if (oldRotation2) { oldRotation2 = oldRotation2.replace('rotate(', ''); oldRotation2 = oldRotation2.replace('deg)', ''); } else { oldRotation2 = 0; }

    var number1 = Math.floor((((rotateDegree1) - Number(oldRotation1)) / 60 + 0.5) % 6);
    if (number1 < 6) { number1++; };
    var number2 = Math.floor((((rotateDegree2) - Number(oldRotation2)) / 60 + 0.5) % 6);
    if (number2 < 6) { number2++; };

    var time1 = randomNumber1 + 2;
    var time2 = randomNumber2 + 2;
    
    image1.style.transition = `${time1}s`;
    image2.style.transition = `${time2}s`;

    image1.style.transform = `rotate(-${Number(rotateDegree1) - Number(oldRotation1)}deg)`;
    image2.style.transform = `rotate(-${Number(rotateDegree2) - Number(oldRotation2)}deg)`;

    var timout;
    if (time1 >= time2) {
        timout = time1 * 1000;
    } else {
        timout = time2 * 1000;
    }
    setTimeout(() => {
        document.getElementById("result").innerHTML = number1 + number2;
    }, timout);
}