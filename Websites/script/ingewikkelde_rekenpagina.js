var AtotZ = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

var priemGetallen = [2];

function omrekenenTalstelsels(num, van, naar) {
    var tienTallig = 0;
    var machtreeksNaar = [];
    var antwoord = '';

    for (var x = num.toString().length, y = 0; x > 0; x--, y++)
    {
        if (AtotZ.includes(num.toString().charAt(x - 1))) {
            tienTallig += (AtotZ.indexOf(num.toString().charAt(x - 1)) + 10) * Math.pow(van, y);
        } else {
            tienTallig += num.toString().charAt(x - 1) * Math.pow(van, y);
        }
    }

    for (var a = 0; Math.pow(naar, a) <= tienTallig; a++)
    {
        machtreeksNaar.push(Math.pow(naar, a));
    }

    machtreeksNaar.reverse().forEach(function (value, index) {
        if (Math.floor(tienTallig / value) >= 10) {
            antwoord += AtotZ[Math.floor(tienTallig / value) - 10];
        } else {
            antwoord += Math.floor(tienTallig / value);
        }
        tienTallig -= Math.floor(tienTallig / value) * value;
    });
    return antwoord;
}

function priemReeks(value) {
    for (var i = 3; i <= value; i++) {
        for (var x = 0; true; x++) {
            if ( i % priemGetallen[x] === 0) {
                break;
            } else if(priemGetallen[x] >= (i/2)) {
                priemGetallen.push(i);
                break;
            }
        }
    }
}

function factoriser(input) {
    var antwoord = '';
    priemReeks(input);

    while (input > 1) {
        for (var c = 0; true; c++) {
            if (input % priemGetallen[c] == 0) {
                antwoord += priemGetallen[c] + '.';
                input = input / priemGetallen[c];
                break;
            }
        }
    }
    antwoord = antwoord.substring(0, antwoord.length - 1);
    return antwoord;
}

function waardeAanpassen() {
    var omrekenen = document.getElementById("omreken-talstelsel").value;
    var van = document.getElementById("van").value;
    var naar = document.getElementById("naar").value;

    document.getElementById("dResultaat").innerHTML = omrekenenTalstelsels(omrekenen, van, naar);
}

function waardeAanpassenFactorizer() {
    var input = document.getElementById("omreken-talstelsel").value;

    document.getElementById("dResultaat").innerHTML = factoriser(input);
}

function resetform() {
    document.getElementById("dResultaat").innerHTML = "";
}

function opzetKeuze() {
    var keuze = document.getElementById("opKeuze").value;
    if (keuze == "Factorizer") {
        document.getElementById("van").style.display = "inline";
        document.getElementById("naar").style.display = "inline";
    } else {
        document.getElementById("van").style.display = "none";
        document.getElementById("naar").style.display = "none";
    }
}


function Bereken() {
    var keuze = document.getElementById("opKeuze").value;
    switch (keuze) {
        case "Talstelsel":
            waardeAanpassen();
            break;
        case "Factorizer":
            waardeAanpassenFactorizer()
            break;
        default:
            break;
    }
}


