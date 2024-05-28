<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.php";
    ?>
</head>

<body>
    <?php
    $page = 'users.php';
    include "header.php";
    ?>

    <div class="container" id="main-cont">
        <?php
        if (isset($_SESSION["user_id"]) && isset($_SESSION["is_admin"])) {
            echo "Username: " . $_SESSION["username"] . ", ID: " . $_SESSION["user_id"] . ", admin privileges: " . $_SESSION["is_admin"] . ".";
        } else {
            echo "Session variables not set.";
        }
        ?>
    </div>

</body>

</html>