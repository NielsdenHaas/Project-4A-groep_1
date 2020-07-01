<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="nl">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="M. de Haard">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MathMate | Shoot The Pig</title>
    <link rel="stylesheet" type="text/css" href="css/stp.css">
    <script type="text/javascript" src="script/stp.js"></script>
</head>

<body>

<?php include 'header-ingelogd.php'; ?>

<main>
    <section class="container_uitleg">
        <article class="article_uitleg">
            <h1>Uitleg</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing enim eu turpis egestas pretium aenean pharetra. Blandit cursus risus at ultrices mi tempus imperdiet nulla. Morbi leo urna molestie at elementum eu facilisis sed odio. Nunc lobortis mattis aliquam faucibus purus. Cursus euismod quis viverra nibh cras pulvinar mattis. Feugiat vivamus at augue eget arcu dictum varius duis at. Elit ut aliquam purus sit amet luctus venenatis lectus magna. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Tincidunt arcu non sodales neque sodales ut etiam. Tempus egestas sed sed risus pretium. Volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris.

                Felis eget velit aliquet sagittis id consectetur purus. Id consectetur purus ut faucibus. Pellentesque sit amet porttitor eget dolor morbi non arcu risus. Sodales neque sodales ut etiam sit amet nisl. Sit amet luctus venenatis lectus magna fringilla urna porttitor. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Odio pellentesque diam volutpat commodo. Vitae aliquet nec ullamcorper sit amet risus. Sem nulla pharetra diam sit amet nisl suscipit adipiscing. Enim nunc faucibus a pellentesque sit amet porttitor eget.
            </p>
        </article>
    </section>

    <form>
        <input type="button" value="Restart" onclick="restart()" class="restart_button button">
        <span id="value_hoek">0<sup>o</sup></span>
        <input type="range" id="input_hoek" oninput="tiltCannon()" min="-45" max="40" value="0">
        <span id="value_speed">0m/s</span>
        <input type="range" id="input_power" oninput="tiltCannon()" value="0" min="0" max="500">
        <input type="button" value="Shoot" onclick="fireCannon()" class="shoot_button button">
        <span id="score">Score: 0</span>
    </form>

    <div id="speelVeld">
        <section>
            <img src="images/tower.png" id="img_tower">
            <img src="images/cannonvoet.png" id="img_voet">
            <img src="images/cannnonloop.png" id="img_loop">
            <img src="images/cannonball.png" id="img_bal">
            <img src="images/pig.png" id="img_pig">
        </section>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
