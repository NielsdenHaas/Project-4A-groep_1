<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="nl">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Daaf Wassenaar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/registratie.css">
</head>

<body>

    <?php
    include "header.php";
    ?>

    <main>
        <?php
        $option = [
            "cost" => 12
        ];

        $errorMessageReg = "";
        if (isset($_POST["submitReg"])) {
            if (!empty($_POST["emailReg"]) && !empty($_POST["passwordReg"]) && !empty($_POST["repeat_passwordReg"])) {
                if (!($_POST["repeat_passwordReg"] == $_POST["passwordReg"])) {
                    $errorMessageReg = "ingevoerde wachtwoorden komen niet overeen";
                } else {
                    require("dbconnect.php");

                    $sqlReg = "SELECT * FROM users WHERE email = '" . trim($_POST['emailReg']) . "'";
                    $result = $conn->query($sqlReg);
                    if (mysqli_num_rows($result) == "0") {
                        $pwReg = trim($_POST['passwordReg']) . "EebfgJJdJ8";
                        $dbpassReg = password_hash($pwReg, PASSWORD_BCRYPT, $option);
                        $emailReg = trim($_POST['emailReg']);
                        $sqlReg = "INSERT INTO users (email, password) VALUES ('{$emailReg}', '{$dbpassReg}')";
                        $conn->query($sqlReg);
                        $errorMessageReg = "account aangemaakt";
                    } else {
                        $errorMessageReg = "account bestaat al";
                    }
                }
            } else {
                $errorMessageReg = "alle velden zijn verplicht!";
            }
        }

        ?>

        <section class="inputsection">
            <?php echo "<p class='errorMessage'><strong>" . $errorMessageReg . "</strong></p><br>"; ?>
            <form method="POST" class="registratie">
                <section class="email">
                    <label>E-Mail:</label><br><input type="email" name="emailReg"><br><br>
                </section>
                <section class="wachtwoord">
                    <label>Wachtwoord:</label><br><input type="password" name="passwordReg"><br><br>
                </section>
                <section class="wachtwoord-herhalen">
                    <label>Wachtwoord herhalen:</label><br><input type="password" name="repeat_passwordReg"><br><br>
                    <input type="submit" value="Registreer!" class="submit" name="submitReg"></input>
                </section>
            </form>
        </section>
    </main>

    <?php
    include "footer.php";
    ?>

</body>

</html>