var power, posX, posY, inputGraden, cannonInterval;
var towerHeight = 300;
var time = 0;
var pigPos = 280;
var score = 0;

function randomNumber(min, max) {
    return Math.floor((Math.random() * max)) + min;
}

function tiltCannon() {
    inputGraden = document.getElementById('input_hoek').value;
    power = document.getElementById('input_power').value;

    document.getElementById('value_speed').innerHTML = power + 'm/s';
    document.getElementById('value_hoek').innerHTML = inputGraden + '<sup>o</sup>';
    document.getElementById('img_loop').style.transform = 'rotate('+inputGraden+'deg)';
}

function restart() {
    towerHeight = randomNumber(100, 400);
    pigPos = randomNumber(280, 800);
    posX = 0;
    posY = 0;
    time = 0;

    document.getElementById('img_bal').style.marginTop = (600 - towerHeight - 22 - 20) + 'px';
    document.getElementById('img_tower').style.height = towerHeight + 'px';
    document.getElementById('img_tower').style.marginTop = (600 - towerHeight) + 'px';
    document.getElementById('img_voet').style.marginTop = (600 - towerHeight - 30) + 'px';
    document.getElementById('img_loop').style.marginTop = (600 - towerHeight - 20 - 20) + 'px';
    document.getElementById('img_pig').style.marginLeft = pigPos + 'px';
    document.getElementById('img_bal').style.marginLeft = 112 + 'px';
}

function fireCannon() {
    power = document.getElementById('input_power').value;
    if (inputGraden < 0) {
        inputGraden = Math.abs(inputGraden);
    } else {
        inputGraden = ~inputGraden + 1;
    }
    cannonInterval = setInterval(plotCannonBall, 10);
}

function plotCannonBall() {
    time += 0.02;

    posX = power * (Math.cos(((inputGraden * Math.PI) / 180))) * time;
    posY = Math.pow((5 * time), 2) - (power * (Math.sin(((inputGraden * Math.PI) / 180)))) * time + (600 - towerHeight);

    document.getElementById('img_bal').style.marginLeft = (112 + posX) + 'px';
    document.getElementById('img_bal').style.marginTop = (posY - 41) + 'px';
    collision();
}

function collision() {
    posX = posX + 112;
    if (posX >= pigPos && posX <= (pigPos + 60) && posY >= 560) {
        clearInterval(cannonInterval);
        setTimeout(restart, 1000);
        score++
        console.log(score);
        document.getElementById('score').innerHTML = 'Score: '+score;
    } else if (posX >= 1150) {
        clearInterval(cannonInterval);
        setTimeout(restart, 1000);
    } else if (posY >= 600) {
        clearInterval(cannonInterval);
        setTimeout(restart, 1000);
    }
}