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
        include "show-users.php";
        ?>
    </div>
</body>

</html>