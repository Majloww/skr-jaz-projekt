<?php
session_start();
include "dbconnect.php";
$conn = dbconnect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION["user_id"];
    $choice = intval($_POST['choice']);
    $rating = 5;
    $review = $_POST['review'];

    $sql = "INSERT INTO reviews (user_id, countryid, rating, review) VALUES ($id, '$choice', $rating, '$review')"; /*furt nejdu tie hviezdy, ani v console.logu :((*/

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for leaving a review!";
        sleep(2);
        header("Location: main.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
