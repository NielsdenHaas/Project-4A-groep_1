function bereken() {
    if (document.getElementById('reeks').value == 'Fibonacci') {
        fibReeks();
    } else if (document.getElementById('reeks').value == 'Priem Getallen') {
        priemReeks();
    }
}

function fibReeks() {
    var getal1 = 0;
    var getal2 = 1;
    var ant = getal1 + getal2;
    document.getElementById('antwoord').innerHTML = '0';

    while (ant < document.getElementById('invoer').value) {
        document.getElementById('antwoord').innerHTML += ' - ' + ant;

        ant = getal1 + getal2;
        getal1 = getal2;
        getal2 = ant;
    }
}

function priemReeks() {
    var priemGetallen = [2];
    document.getElementById('antwoord').innerHTML = '';

    for (var i = 3; i <= document.getElementById('invoer').value; i++) {
        for (var x = 0; true; x++) {
            if ( i % priemGetallen[x] === 0) {
                break;
            } else if(priemGetallen[x] >= (i/2)) {
                priemGetallen.push(i);
                break;
            }
        }
    }
    priemGetallen.forEach(function (getal) {
        document.getElementById('antwoord').innerHTML += getal + ' - ';
    });
}