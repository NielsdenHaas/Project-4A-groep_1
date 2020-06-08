var GetalInvoer;
var GetalTot;
var resultaat;

function Bereken() {
    document.getElementById("dResultaat").innerHTML = "";
    resultaat = "";
    var keuze = document.getElementById("opKeuze").value;
    switch (keuze) {
        case "tafel":
            document.getElementById("dResultaat").innerHTML = Tafels();
            break;
        case "macht":
            document.getElementById("dResultaat").innerHTML = Machten();
            break;
        case "breuk":
            document.getElementById("dResultaat").innerHTML = Breuken();
            break;
        case "kwadraat":
            document.getElementById("dResultaat").innerHTML = Kwadraten();
            break;
        default:
            break;
    }
}

function opzetKeuze() {
    Schoonmaken();
    var keuze = document.getElementById("opKeuze").value;
    if (keuze == "tafel") {
        document.getElementById("txt_Ond3_Tot").style.display = "inline";
    } else {
        document.getElementById("txt_Ond3_Tot").style.display = "none";
    }
}

function Schoonmaken(){
    document.getElementById("dResultaat").innerHTML = "";
}

function Tafels() {
    GetalInvoer = document.getElementById("txt_Ond3_In").value;
    GetalTot = document.getElementById("txt_Ond3_Tot").value;

        for (var i = 0; i <= GetalTot; i++) {
            resultaat += i + " x " + GetalInvoer + " = " + (i * GetalInvoer) + "<br />";
        }
    return resultaat;
}

function Machten() {
    GetalInvoer = document.getElementById("txt_Ond3_In").value;

    for (var i = 0; i <= 15; i++) {
        resultaat += GetalInvoer + "<sup>" + i + "</sup> = " + (Math.pow(GetalInvoer, i)) + "<br />";
    }
    return resultaat;
}

function Breuken() {
   GetalInvoer = document.getElementById("txt_Ond3_In").value;

   for (var i = 0; i <= GetalInvoer; i++) {
    resultaat += " 1 : " + i + " = " + 1 / i + "</br>";
}
return resultaat;
}


function Kwadraten() {
    GetalInvoer = document.getElementById("txt_Ond3_In").value;

    for(var i = 0; i <= GetalInvoer; i++) {
        resultaat += i + "<sup>" + 2 + "</sup> = " + (Math.pow(i, 2)) + "</br>";
    }

    return resultaat;
}