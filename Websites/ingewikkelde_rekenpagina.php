<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="nl">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="N. den Haas">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/ingewikkelde_rekenpagina.css">
    <script src="script/ingewikkelde_rekenpagina.js"></script>
</head>

<body>

<?php
include "header-ingelogd.php";
?>

<main>

    <form>
        <select onchange="opzetKeuze()" id="opKeuze">
            <option value="Talstelsel">Berekenen Talstelsel!</option>
            <option value="Factorizer">Factorizer!</option>
        </select>
        <input class="input" type="number" id="omreken-talstelsel" placeholder="getal invoeren....">
        <input class="input" type="number" id="van" placeholder="van....">
        <input class="input" type="number" id="naar" placeholder="naar....">
        <input class="button" type="button" value="Bereken!" onclick="Bereken()">
        <input class="button" type="button" value="Wissen" onclick="resetform()">
        <div class="row form-group">
            <div class="col-10">
                <div id="dResultaat" class="jumbotron"></div>
            </div>
        </div>
    </form>


</main>

<?php
include "footer.php";
?>

</body>

</html>
