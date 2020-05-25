<style>
@media only screen and (max-width: 768.9px){
    * {
		margin: 0;
		padding: 0;
    }
    
    #mascotte {
        width: 8vw;
        margin: 0 0 2vw 2vw;
    }

    #rekenmachine {
        width: 6vw;
        margin: 0 2vw 2vw 0;
    }

    footer {
        display: flex;
        justify-content: space-between;
    }

    footer p {
        color: #707070;
        font-size: 0.8rem;
        margin-top: 2vw;
    }
}

@media only screen and (min-width: 769px){
	* {
		margin: 0;
		padding: 0;
    }
    
    #mascotte {
        width: 4vw;
    }

    #rekenmachine {
        width: 3vw;
    }

    footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    footer p {
        font-family: 'heebo', Sans-Serif;
        color: #707070;
        margin-top: 2vw
    }
}

</style>

<footer>
    <img id="mascotte" src="images/mascotte.jpg" alt="mascotte van de website">
    <p>@ 2020 Math Mate || All rights reserved</p>
    <img id="rekenmachine" src="images/RekenMachine.PNG" alt="Icoon van een rekenmachine">
</footer>