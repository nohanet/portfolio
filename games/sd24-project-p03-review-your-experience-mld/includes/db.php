<?php
// includes/db.php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "inlogsysteem";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
?>
