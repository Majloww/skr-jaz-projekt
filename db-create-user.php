<?php
include "dbconnect.php";
$conn = dbconnect();

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$pass = $_POST['password'];

$sql_check = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql_check);

if (mysqli_num_rows($result) > 0) {
    header("Location: create-user.php?error");
} else {
    $sql = "INSERT INTO users (username, name, surname, pass) VALUES ('$username', '$name', '$surname', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "User created successfully!";
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$conn->close();
