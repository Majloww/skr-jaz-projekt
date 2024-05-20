<?php
function show_users()
{
    include "dbconnect.php";
    $conn = dbconnect(); /*dbconnect.php function dbconnect()*/
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if (isset($_SESSION["user_id"]) && isset($_SESSION["is_admin"])) {
                if ($_SESSION["is_admin"] == 1) {
                    $is_admin = $row["admin"] == 1 ? "Yes" : "No";
                    echo "User ID: " . $row["user_id"] . " - Name: " . $row["name"] . " " . $row["surname"] . " - Has admin rights: " . $is_admin . "." . '<form action="toggle_admin.php" method="POST">';
                    echo '<input type="hidden" name="user_id" value="' . $row["user_id"] . '">';
                    echo '<button type="submit" name="toggle_admin" class="btn btn-secondary">' . ($row["admin"] == 1 ? "Remove Admin" : "Make Admin") . '</button>';
                    echo '</form><br><hr>';
                } else {
                    echo "User ID: " . $row["user_id"] . " - Name: " . $row["name"] . " " . $row["surname"] . "." . "<br>";
                }
            } else {
                echo "Session variables not set.";
            }
        }
    } else {
        echo "0 users found.";
    }

    $conn->close();
}
