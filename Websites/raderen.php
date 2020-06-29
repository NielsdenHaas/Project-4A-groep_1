<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="nl">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Daaf Wassenaar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mathmate | Raderen</title>
    <link rel="stylesheet" type="text/css" href="css/raderen.css">
    <script src="script/raderen.js"></script>
</head>

<body>

    <?php
    include "header-ingelogd.php";
    ?>
    <main>
        <section class="wheels">
            <div class="wheeldiv">
                <span id="arrow1" class="arrow">🠛</span>
                <img id="image1" src="images/color_wheel.png" height="300px">
            </div>

            <div>
                <button onClick="rotate()" class="btn">Spin!</button>
                <br>
                <span id="result"></span>
            </div>

            <div class="wheeldiv">
                <span id="arrow2" class="arrow">🠛</span>
                <img id="image2" src="images/color_wheel.png" height="300px">
            </div>
        </section>
    </main>

    <?php
    include "footer.php";
    ?>
</body>

</html>