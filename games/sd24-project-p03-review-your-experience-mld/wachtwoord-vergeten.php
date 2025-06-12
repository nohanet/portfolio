<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Homepage | MLD</title>
</head>
<body>
<header>
    MLD
    <img src="../sd24-project-p03-review-your-experience-mld/img/MLD-removebg-preview.png" alt="MLD">
    Music
</header>

<nav>
    <a href="contact.php">Contact</a>
    <a href="index.php">Home</a>
    <a href="music.php">Music</a>
    <a href="about-us.php">About-Us</a>
</nav>
<main>
    <div class="wachtwoord-popup">
        <img class="checkmark" src="img/checkmark.png">
        <h2>U heeft een E-mail ontvangen met een verificatie code, het kan binnen 10 seconden en 50000 jaar binnenkomen</h2>
        <button class="close-popup">terug naar site</button>
    </div>

    <div class="herstel-popup">
        <img class="checkmark" src="img/error%20symbol.png">
    <h2>Het ziet er naar uit dat u een foute/oude code heeft ingevoerd. voert u alstublieft de laatst verzonden code in</h2>

        <button class="close-herstel">terug naar site</button>
    </div>

    <h1>Wachtwoord Herstellen</h1>
    <div class="wachtwoord-herstel">
    <h2>E-mail</h2>
        <input>
        <button class="wachtwoord-open-popup">Stuur code</button>
   <h3>Voer hier de code in.</h3>
        <input>
        <button class="herstel">Herstel</button>
        <a href="index.php">Terug naar home.</a>

    </div>
<!--    src="js/main.js"-->
</main>
<footer>Made by MLD Music&copy;</footer>
<script>
    const wachtwoordOpen= document.querySelector(".wachtwoord-open-popup")
    const wachtwoordClose = document.querySelector(".close-popup")

    const wachtwoordPopup1 = document.querySelector(".wachtwoord-popup")

    const reparePopup1 = document.querySelector(".herstel-popup")

    const repareOpen = document.querySelector(".herstel")
    const repareClose = document.querySelector(".close-herstel")

    wachtwoordOpen.addEventListener("click", openWachtwoord)
    wachtwoordClose.addEventListener("click", closeWachtwoord)

    function openWachtwoord(){
        wachtwoordPopup1.classList.add("wachtwoord_open_popup")
    }
    function closeWachtwoord(){
        wachtwoordPopup1.classList.remove("wachtwoord_open_popup")
    }

    repareOpen.addEventListener("click", openRepare)
    repareClose.addEventListener("click", closeRepare)

    function openRepare(){
        reparePopup1.classList.add("herstel_open_popup")
    }
    function closeRepare(){
        reparePopup1.classList.remove("herstel_open_popup")
    }
</script>



</body>
</html>
