<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.php";
    ?>
</head>

<body>
    <div class="container" id="main-cont">
        <form action="check-login.php" method="post">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" required><br>
            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>