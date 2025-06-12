<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "reviews");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all worlds
$sql = "SELECT * FROM worlds";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music | MLD</title>
    <link rel="stylesheet" href="css/music.css">
</head>
<body>
<header>
    MLD
    <img src="img/MLD-removebg-preview.png" alt="MLD">
    Music
    <button class="profile-btn open-popup" ><img class="profile-pic " src="img/profile2-removebg-preview.png"></button>
</header>
<div class="popup">
    <h2>profiel</h2>
    <h3>voornaam</h3>
    <h3>achternaam</h3>
    <h3>E-mail</h3>
    <h4>uitloggen</h4>
    <button class="close-popup">terug naar site</button>
</div>
<nav>
    <a href="contact.php">Contact</a>
    <a href="index.php">Home</a>
    <a href="#">Music</a>
    <a href="about-us.php">About-Us</a>
</nav>

<main>
    <div class="flex-box">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="blok">
                <span><?php echo htmlspecialchars($row['name']); ?></span>
                <a href="world.php?id=<?php echo $row['id']; ?>">
                    <img src="img/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</main>

<footer>
    Made by MLD Music&copy;
</footer>
<script src="js/main.js"></script>

</body>
</html>
