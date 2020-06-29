<?php
session_start();
if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {
    echo '<script>console.log("Logged in!")</script>';
} else {
    header("Location: home.php");
}

?>
<style>
@media only screen and (max-width: 768.9px){
	* {
		margin: 0;
		padding: 0;
    }

    header {
        display: flex;
        justify-content: space-between;
    }

    #logo_mathMate {
    width: 300px;
    height: 100%;
    margin: 20px 0 0 2vw;
}

    #hamburger {
        margin-top: 33px;
        width: 50px;
        height: 50px;
    }

    #hamburger span {
        width: 100%;
        height: 15%;
        margin: 15% 0;
        background-color: #1E85DF;
        display: block;
        border-radius: 20px;
        transition: 1s;
    }

    #hamburger:hover {
        cursor: pointer;
    }

    .hamburger_wrapper {
        position: absolute;
        top: 100px;
        right: 0;

        width: 900px;
        height: 350px;
        overflow: hidden;
        z-index: 5;
    }

    #hamburger_menu {
        position: absolute;
        top: 30px;
        right: -400px;

        background-color: white;
        border: #DE781F solid 3px;
        border-radius: 20px;
        padding: 0 20px 20px 20px;
        transition: 1s;
    }

    #hamburger_menu a {
        display: block;
        text-align: right;
        color: #707070;
        text-decoration: none;
        margin-top: 20px;
        font-size: 25px;
    }

    #hamburger_menu a:hover {
        color: #1E85DF;
    }

    @media only screen and (max-width: 393px) {
        #logo_mathMate {
            width: 200px;
        }

        #hamburger_menu {
            width: 95vw;
        }

        #hamburger_menu a {
            font-size: 18px;
        }
    }
}


@media only screen and (min-width: 769px){
	* {
		margin: 0;
		padding: 0;
    }

header {
    display: flex;
    justify-content: space-between;
    margin-top: 1vw;
}

#logo_mathMate {
    width: 300px;
}

#hamburger {
    margin-top: 20px;
    width: 50px;
    height: 50px;
}

#hamburger span {
    width: 100%;
    height: 15%;
    margin: 15% 0;
    background-color: #1E85DF;
    display: block;
    border-radius: 20px;
    transition: 1s;
}

.hamburger_wrapper {
    position: absolute;
    top: 100px;
    right: 0;

    width: 900px;
    height: 350px;
    overflow: hidden;
    z-index: 5;
}

#hamburger_menu {
    position: absolute;
    top: 40px;
    right: -400px;

    background-color: white;
    border: #DE781F solid 3px;
    border-radius: 20px;
    padding: 0 20px 20px 20px;
    transition: 1s;
}

#hamburger:hover{
    cursor: pointer;
}

#hamburger_menu a {
    display: block;
    text-align: right;
    color: #707070;
    text-decoration: none;
    margin-top: 20px;
    font-size: 25px;
}

    #hamburger_menu a:hover {
        color: #1E85DF;
    }
}

</style>

    <header>
        <img id="logo_mathMate" src="images/logo.jpg" alt="Image van het logo">
        <div id="hamburger" onclick="hamburgerMenu()">
            <span id="burger1"></span>
            <span id="burger2"></span>
            <span id="burger3"></span>
        </div>

        <section class="hamburger_wrapper">
            <nav id="hamburger_menu">
                <a href="eenvoudige-rekenpagina.php">Eenvoudige Rekenpagina</a>
                <a href="reeksen.php">Reeksen Generator</a>
                <a href="raderen.php">Random Getal</a>
                <a href="ingewikkelde_rekenpagina.php">Ingewikkelde Rekenpagina</a>
                <a href="#">Shoot the Pig (Math Game)</a>
            </nav>
        </section>
    </header>

<script>
    var fold = false;
    function hamburgerMenu() {
        if (fold === false) {
            var hamburger = window.getComputedStyle(document.getElementById('hamburger'));
            if (hamburger.marginTop == '20px') {
                document.getElementById('hamburger_menu').style.right = '20vw';
            } else if (hamburger.marginTop == '33px') {
                document.getElementById('hamburger_menu').style.right = '1vw';
            }

            document.getElementById('burger2').style.opacity = '0';
            document.getElementById('burger1').style.transform = 'translateY(20px) rotate(45deg)';
            document.getElementById('burger3').style.transform = 'translateY(-9.5px) rotate(135deg)';

            fold = true;
        } else {
            document.getElementById('hamburger_menu').style.right = '-400px';

            document.getElementById('burger2').style.opacity = '100';
            document.getElementById('burger1').style.transform = '';
            document.getElementById('burger3').style.transform = '';

            fold = false
        }
    }
</script>