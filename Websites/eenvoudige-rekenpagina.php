<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="script/eenvoudige-rekenpagina.js"></script>

    <link rel="stylesheet" href="css/eenvoudige-rekenpagina.css">

    <title>Math-Mate, onderdeel 3</title>
</head>


<body>

    <?php
    include "header-ingelogd.php";
    ?>



    <main>

        <section id="inhoud">
            <section class="tekst">
                <h1>Welkom op de Eenvoudige Rekenpagina!</h1>
                <p>Lorizzle ipsizzle dolor sit amizzle,
                    check it out adipiscing elizzle. Nul
                    sapien velizzle, volutpizzle, suscipit
                    gravida vizzle, stuff. Pellentesque check it out adipiscing elizzle. Nul
                    sapien velizzle, volutpizzle, suscipit
                    gravida vizzle, stuff. Pellentesque check it out adipiscing elizzle. Nul
                    sapien velizzle, volutpizzle, suscipit
                    gravida vizzle, stuff. Pellentesque </p>
            </section>
            <section id="image2">
                <img id="image" src="images/Calculator2.png" alt="plaatje van een simpele rekenmachine">
            </section>
        </section>

        <div class="container mt-5">
            <div class="row form-group">
                <div class="col-sm-12">
                    <select class="form-control" id="opKeuze" onchange="opzetKeuze()">
                        <option value="tafel">Tafel van ...</option>
                        <option value="macht">Machtreeks van ...</option>
                        <option value="breuk">Breukenreeks 1/...</option>
                        <option value="kwadraat">Kwadratenreeks van ...</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-6">
                    <input type="number" class="form-control" placeholder="invoer" id="txt_Ond3_In" />
                </div>
                <div class="col-sm-6">
                    <input type="number" class="form-control" placeholder="tot" id="txt_Ond3_Tot" />
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-6">
                    <button id="wissen" class="btn btn-danger form-control" onclick="Schoonmaken()">Wissen</button>
                </div>
                <div class="col-sm-6">
                    <button id="bereken" class="btn btn-dark form-control" onclick="Bereken()">Bereken</button>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-12">
                    <div id="dResultaat" class="jumbotron"></div>
                </div>
            </div>
        </div>
    </main>

    <img id="image_mobile" src="images/Calculator2.png" alt="calculator mobile">

    <?php
    include "footer.php";
    ?>

</body>

</html>