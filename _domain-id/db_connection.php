
<?php
$servername = "localhost";
$username = "u681230832_ID_DOMAIN";
$password = "c4U+s@gOWN9";
$dbname = "u681230832_ID_DOMAIN";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
