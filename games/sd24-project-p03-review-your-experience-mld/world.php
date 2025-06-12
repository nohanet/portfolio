<?php
$conn = new mysqli("localhost", "root", "", "reviews");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$world_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch world info
$world_sql = "SELECT * FROM worlds WHERE id = $world_id";
$world_result = $conn->query($world_sql);
$world = $world_result->fetch_assoc();

// Handle review submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $stars = intval($_POST['stars']);
    $desc = $conn->real_escape_string($_POST['description']);

    $insert = "INSERT INTO review (name, stars, world_id, description) 
               VALUES ('$name', $stars, $world_id, '$desc')";
    $conn->query($insert);
}

// Fetch existing reviews
$review_sql = "SELECT * FROM review WHERE world_id = $world_id ORDER BY id DESC";
$review_result = $conn->query($review_sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($world['name']); ?> | MLD</title>
    <link rel="stylesheet" href="css/world.css">
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
    <a href="music.php">Music</a>
    <a href="about-us.php">About-Us</a>
</nav>

<main>
    <div class="world-info">
        <h2><?php echo htmlspecialchars($world['name']); ?></h2>
        <a href="music.php">
        <img src="img/<?php echo htmlspecialchars($world['image']); ?>" alt="<?php echo htmlspecialchars($world['name']); ?>" class="world-image">
        </a>
            <div class="info">
        <p><strong>Price:</strong> €<?php echo number_format($world['price'], 2); ?></p>
        <p><strong>Info:</strong> <?php echo nl2br(htmlspecialchars($world['info'])); ?></p>
        </div>
        <audio controls>
            <source src="mp3/<?= $world["name"]; ?>.mp3" type="audio/mpeg">

        </audio>

        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="anyavdmee@gmail.com">
            <input type="hidden" name="item_name" value="Muziek Download">
            <input type="hidden" name="amount" value="<?= $world['price']; ?>">
            <input type="hidden" name="currency_code" value="EUR">
            <input type="hidden" name="return" value="https://jouwsite.nl/bedankt.html">
            <button type="submit">Betaal €<?php echo number_format($world['price'], 2); ?> voor <?= $world["name"]; ?></button>
        </form>

    </div>

    <!-- Review Form -->
    <div class="review-form">
        <h3>Write a Review</h3>
        <form method="post">
            <label>Name:<br><input type="text" name="name" required></label><br><br>
            <label>Stars (1-5):<br><input type="number" name="stars" min="1" max="5" required></label><br><br>
            <label>Description:<br><textarea name="description" rows="4" cols="50" required></textarea></label><br><br>
            <input type="submit" value="Submit Review">
        </form>
    </div>

    <!-- Existing Reviews -->
    <div class="reviews">
        <h3>Reviews</h3>
        <?php while($review = $review_result->fetch_assoc()): ?>
            <div class="review-box">
                <strong><?php echo htmlspecialchars($review['name']); ?></strong>
                (<?php echo $review['stars']; ?>⭐)<br>
                <p><?php echo nl2br(htmlspecialchars($review['description'])); ?></p>
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
