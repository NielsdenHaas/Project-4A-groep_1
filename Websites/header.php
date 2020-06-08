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
    margin: 2vw 0 0 2vw;
}

    #log-in_icoon {
    width: 9vw;
    height: 100%;
    margin: 5vw 5vw 0 0;
}

    #log-in_icoon:hover {
        cursor: pointer;
    }

    .login {grid-area: login; font-size: 20px}
    .close {
        grid-area: close;
        transform: rotate(45deg);
        font-size: 35px;
        color: #707070;
        width: 30%;
        justify-self: end;
    }
    .close:hover {cursor: pointer; color: #DE781F}
    .email {grid-area: email;}
    .wachtwoord {grid-area: wachtwoord;}
    .wwvergeten {grid-area: wwVergeten;}
    .loginbtn {grid-area: loginbtn; background-color: white; border: solid 1px #707070}
    .registreerbtn {grid-area: registreerbtn; background-color: #1E85DF; border: none; color: white}

    .log-in_menu {
        background-color: white;
        padding: 20px;
        border: #1E85DF solid 4px;
        border-radius: 30px;
        font-family: 'heebo', Sans-Serif;

        position: absolute;
        top: 6vw;
        right: 20%;

        display: grid;
        grid-template-columns: 60px 100px;
        grid-template-rows: repeat(4,70px) 30px;
        grid-template-areas:
                'login      close'
                'email      email'
                'wachtwoord wachtwoord'
                '.          wwVergeten'
                'loginbtn   registreerbtn';
        opacity: 0;
        transition: 0.08s;
    }

    .log-in_menu input {
        border-radius: 20px;
        padding: 5px;
    }

    .log-in_menu a{
        font-size: 13px;
        color: #1E85DF;
    }

    .btn {
        width: 70px;
        height: 30px;
        justify-self: end;
    }

    .btn:active {width: 99px;height: 29px;}
    .btn:hover {cursor: pointer;}

    .txt_input {
        background-color: white;
        border: #707070 solid 1px;
        width: 80%;
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

#log-in_icoon {
    width: 3vw;
    height: 100%;
    margin-top: 1.5vw;
}

    #log-in_icoon:hover {
        cursor: pointer;
    }

.login {grid-area: login;}
.close {
    grid-area: close;
    transform: rotate(45deg);
    font-size: 35px;
    color: #707070;
    width: 30%;
    justify-self: end;
}
.close:hover {cursor: pointer; color: #DE781F}
.email {grid-area: email;}
.wachtwoord {grid-area: wachtwoord;}
.wwvergeten {grid-area: wwVergeten;}
.loginbtn {grid-area: loginbtn; background-color: white; border: solid 1px #707070}
.registreerbtn {grid-area: registreerbtn; background-color: #1E85DF; border: none; color: white}

.log-in_menu {
    background-color: white;
    padding: 20px;
    border: #1E85DF solid 4px;
    border-radius: 30px;
    font-family: 'heebo', Sans-Serif;

    position: absolute;
    top: 6vw;
    right: 20%;

    display: grid;
    grid-template-columns: 100px 150px;
    grid-template-rows: repeat(4,70px) 30px;
    grid-template-areas:
    'login      close'
    'email      email'
    'wachtwoord wachtwoord'
    '.          wwVergeten'
    'loginbtn   registreerbtn';
    opacity: 0;
    transition: 0.08s;
}

.log-in_menu input {
    border-radius: 20px;
    padding: 5px;
}

.log-in_menu a{
  font-size: 13px;
    color: #1E85DF;
}

.btn {
    width: 100px;
    height: 30px;
    justify-self: end;
}

.btn:active {width: 99px;height: 29px;}
.btn:hover {cursor: pointer;}

.txt_input {
    background-color: white;
    border: #707070 solid 1px;
    width: 80%;
}
}

</style>

<script>
    function openMenu() {
        document.getElementById('menu').style.opacity = '100';
    }

    function closeMenu() {
        document.getElementById('menu').style.opacity = '0';
    }
</script>

<header>
    <img id="logo_mathMate" src="images/logo.jpg" alt="Image van het logo">
    <img id="log-in_icoon" src="images/log-in-icon.PNG" alt="log-in Icoon" onclick="openMenu()">

    <section class="log-in_menu" id="menu">
        <h2 class="login">Log In</h2>
        <span class="close" onclick="closeMenu()">+</span>
        <section class="email">
            <label>E-Mail:</label><br><input type="email" class="txt_input"><br>
        </section>
        <section class="wachtwoord">
            <label>Wachtwoord:</label><br><input type="password" class="txt_input"><br>
        </section>
        <a href="#" class="wwvergeten">Wachtwoord vergeten?</a>
        <input type="button" value="Log in" class="loginbtn btn">
        <input type="button" value="Registreer"  class="registreerbtn btn">
    </section>
</header>