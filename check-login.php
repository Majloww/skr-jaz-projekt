<?php
session_start();
include "dbconnect.php";
$conn = dbconnect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM users WHERE username = '$username' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $_SESSION["username"] = $username;
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["is_admin"] = $row["admin"];

        header("Location: main.php");
        exit();
    } else {
        header("Location: login.php?error");
        exit();
    }
}
