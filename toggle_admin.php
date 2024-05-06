<?php
$servername = "localhost";
$username = "root"; //add localhost user and pass
$password = "";
$dbname = "ukf-eshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user_id = $_POST["user_id"];

$sql = "UPDATE users SET admin = (CASE WHEN admin = 1 THEN 0 ELSE 1 END) WHERE user_id = $user_id";

if (mysqli_query($conn, $sql)) {
    header("Location: users.php");
    exit;
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

$conn->close();
