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
    <section class="container_uitleg">
        <article class="article_uitleg">
            <h1>Talstelsels</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing enim eu turpis egestas pretium aenean pharetra. Blandit cursus risus at ultrices mi tempus imperdiet nulla. Morbi leo urna molestie at elementum eu facilisis sed odio. Nunc lobortis mattis aliquam faucibus purus. Cursus euismod quis viverra nibh cras pulvinar mattis. Feugiat vivamus at augue eget arcu dictum varius duis at. Elit ut aliquam purus sit amet luctus venenatis lectus magna. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Tincidunt arcu non sodales neque sodales ut etiam. Tempus egestas sed sed risus pretium. Volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris.
            </p>

            <h1>Factoriser</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing enim eu turpis egestas pretium aenean pharetra. Blandit cursus risus at ultrices mi tempus imperdiet nulla. Morbi leo urna molestie at elementum eu facilisis sed odio. Nunc lobortis mattis aliquam faucibus purus. Cursus euismod quis viverra nibh cras pulvinar mattis. Feugiat vivamus at augue eget arcu dictum varius duis at. Elit ut aliquam purus sit amet luctus venenatis lectus magna. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Tincidunt arcu non sodales neque sodales ut etiam. Tempus egestas sed sed risus pretium. Volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris.
            </p>
        </article>
    </section>

    <form>
        <select onchange="opzetKeuze()" id="opKeuze">
            <option value="Talstelsel">Berekenen Talstelsel!</option>
            <option value="Factorizer">Factorizer!</option>
        </select>
        <div class="inputs">
            <input class="input" type="number" id="omreken-talstelsel" placeholder="getal invoeren....">
            <input class="input" type="number" id="van" placeholder="van....">
            <input class="input" type="number" id="naar" placeholder="naar....">
        </div>
        <div class="buttons">
            <input class="button" type="button" value="Bereken!" onclick="Bereken()">
            <input class="button" type="button" value="Wissen" onclick="resetform()">
        </div>
        <div class="form-group">
            <div id="dResultaat" class="jumbotron"></div>
        </div>
    </form>


</main>

<?php
include "footer.php";
?>

</body>

</html>

