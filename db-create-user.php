<?php
$servername = "localhost";
$username = "root"; //add localhost user and pass
$password = "";
$dbname = "ukf-eshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST['name'];
$surname = $_POST['surname'];
$pass = $_POST['password'];

$sql = "INSERT INTO users (name, surname, pass) VALUES ('$name', '$surname', '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "User created successfully!";
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
