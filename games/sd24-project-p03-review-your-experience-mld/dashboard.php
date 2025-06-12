<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | MLD</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    MLD <img src="img/MLD-removebg-preview.png" alt="MLD"> Music
    <div style="float:right;">
        Welkom, <?= htmlspecialchars($_SESSION['user']['first_name']) ?> |
        <a href="logout.php">Uitloggen</a>
    </div>
</header>
<nav>
    <a href="contact.php">Contact</a>
    <a href="index.php">Home</a>
    <a href="music.php">Music</a>
    <a href="about-us.php">About-Us</a>
</nav>
<main>
    <div class="ingelogd">
    <h1>Welkom op je dashboard, <?= htmlspecialchars($_SESSION['user']['first_name']) ?>!</h1>
    <p>Email: <?= htmlspecialchars($_SESSION['user']['email']) ?></p>
    </div>
</main>
<footer>Made by MLD Music&copy;</footer>
</body>
</html>
