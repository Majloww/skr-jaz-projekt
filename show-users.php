<?php
function show_users()
{
    if (!isset($_SESSION["user_id"]) || !isset($_SESSION["is_admin"])) {
        echo "Session variables not set.";
        return;
    }

    include "dbconnect.php";
    $conn = dbconnect();
    $sql = "SELECT * FROM users ORDER BY user_id ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $is_admin = $row["admin"] == 1 ? "Yes" : "No";
            echo "User ID: " . $row["user_id"] . " - Name: " . $row["name"] . " " . $row["surname"] . " - Has admin rights: " . $is_admin . ".";
 
            echo '<br>';
            echo '<form action="toggle_admin.php" method="POST" style="display:inline-block; margin-right:10px;">';
            echo '<input type="hidden" name="user_id" value="' . $row["user_id"] . '">';
            echo '<button type="submit" name="toggle_admin" class="btn btn-secondary">' . ($row["admin"] == 1 ? "Remove Admin" : "Make Admin") . '</button>';
            echo '</form>';

            echo '<form action="delete-user.php" method="POST" style="display:inline-block;">';
            echo '<input type="hidden" name="user_id" value="' . $row["user_id"] . '">';
            echo '<button type="submit" name="delete_user" class="btn btn-danger">Delete User</button>';
            echo '</form>';

            echo '<br><hr>';
        }
    } else {
        echo "0 users found.";
    }

    $conn->close();
}
