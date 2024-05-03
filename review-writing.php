<?php
$servername = "localhost";
$username = ""; //add localhost user and pass
$password = "";
$dbname = "ukf-eshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//displays nothing if connected successfully

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $choice = intval($_POST['choice']);
    $rating = 5;
    $review = $_POST['review'];



    $sql = "INSERT INTO reviews (mail, countryid, rating, review) VALUES ('$email', '$choice', $rating, '$review')"; /*+'rating' lebo sa dojbli hviezdicky :((*/

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for leaving a review!";
        sleep(4);
        header("Location: main.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>