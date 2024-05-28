<?php
include "dbconnect.php";
$conn = dbconnect();

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $sql = "DELETE FROM users WHERE user_id = $user_id";

    if (mysqli_query($conn, $sql)) {
        echo "User deleted successfully.";
        header("Location: users.php");
        exit;
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "User ID not provided.";
}

$conn->close();
