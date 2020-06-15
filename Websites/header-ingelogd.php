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
    width: 50vw;
    height: 100%;
    margin: 20px 0 0 2vw;
}

#hamburger {
    color: #1E85DF;
    font-size: 2rem;
    margin: 4vw 4vw 0 0;
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
    width: 20vw;
    height: 100%;
}

#hamburger {
    color: #1E85DF;
    font-size: 3vw;
    margin-top: 0.8vw;
}
}

</style>

<body>
    
    <header>   
        <img id="logo_mathMate" src="images/logo.jpg" alt="Image van het logo"> 
        <section id="hamburger" href="#">&#9776</section>
    </header>    
    
 </body>
    
</html>