<?php
session_start();
$conn = new mysqli("localhost", "root", "", "inlogsysteem");
if ($conn->connect_error) {
    die("Databaseverbinding mislukt: " . $conn->connect_error);
}

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $conn->prepare("SELECT * FROM profiel WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'email' => $user['email'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'role' => $user['role']
        ];
        header("Location: dashboard.php");
        exit();
    } else {
        $errors[] = "Verkeerde inloggegevens.";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inloggen | MLD</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>MLD <img src="img/MLD-removebg-preview.png" alt="MLD"> Music</header>
<nav>
    <a href="contact.php">Contact</a>
    <a href="index.php">Home</a>
    <a href="music.php">Music</a>
    <a href="about-us.php">About-Us</a>
</nav>
<div class="popup">
    <h2>profiel</h2>
    <h3>voornaam</h3>
    <h3>achternaam</h3>
    <h3>E-mail</h3>
    <h4>uitloggen</h4>
    <button class="close-popup">terug naar site</button>
</div>
<main>
    <div class="profiel">
    <h1>Inloggen</h1>
    <?php foreach ($errors as $error): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endforeach; ?>
    <form class="inlogsysteem" method="POST">
        <label>Email:</label><br><input type="email" name="email" required><br>
        <label>Wachtwoord:</label><br><input type="password" name="password" required><br><br>
        <button class="inlog-btn" type="submit">Inloggen</button>
        <a href="regristreren.php">Registreren</a>
        <a href="wachtwoord-vergeten.php">Wachtwoord vergeten?</a>
    </form>

    </div>
</main>
<footer>Made by MLD Music&copy;</footer>
<script src="js/main.js"></script>
</body>
</html>
