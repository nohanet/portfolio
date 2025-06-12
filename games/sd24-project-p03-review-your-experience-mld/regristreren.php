<?php
session_start();
$conn = new mysqli("localhost", "root", "", "inlogsysteem");
if ($conn->connect_error) {
    die("Databaseverbinding mislukt: " . $conn->connect_error);
}

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!$first_name || !$last_name || !$email || !$password) {
        $errors[] = "Alle velden zijn verplicht.";
    } else {
        $email = $conn->real_escape_string($email);
        $check = $conn->query("SELECT id FROM profiel WHERE email = '$email'");
        if ($check->num_rows > 0) {
            $errors[] = "E-mailadres bestaat al.";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO profiel (email, password, first_name, last_name, role) VALUES (?, ?, ?, ?, 'member')");
            $stmt->bind_param("ssss", $email, $hash, $first_name, $last_name);
            $stmt->execute();
            $_SESSION['user'] = [
                'email' => $email,
                'first_name' => $first_name,
                'last_name' => $last_name
            ];
            header("Location: dashboard.php");
            exit();
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registreren | MLD</title>
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
    <h1  >Registreren</h1>
    <?php foreach ($errors as $error): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endforeach; ?>
    <form class="inlogsysteem" method="POST">
        <label>Voornaam:</label><br><input type="text" name="first_name" required><br>
        <label>Achternaam:</label><br><input type="text" name="last_name" required><br>
        <label>Email:</label><br><input type="email" name="email" required><br>
        <label>Wachtwoord:</label><br><input type="password" name="password" required><br><br>
        <button type="submit">Registreren</button>

    <p>Heb je al een account? <a href="login.php">Inloggen</a></p>
    </form>
    </div>
</main>
<footer>Made by MLD Music&copy;</footer>
<script src="js/main.js"></script>

</body>
</html>
