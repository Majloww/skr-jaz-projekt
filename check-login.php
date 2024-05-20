<?php
session_start();

include "dbconnect.php";
$conn = dbconnect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM users WHERE user_id = '$id' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION["user_id"] = $id;
        $_SESSION["is_admin"] = $row["admin"];

        header("Location: main.php");
        exit();
    } else {
        header("Location: login.php?error");
        exit();
    }
}
