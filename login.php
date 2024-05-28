<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'head.php';
    ?>
</head>

<body>
    <div class="container" id="main-cont">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="check-login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input class="form-control" type="text" name="username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password:</label><br>
                        <input class="form-control" type="password" name="pass" id="pass" required><br>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-block">Submit</button>
                    <a href="create-user.php">Don't have an account yet? Crate one!</a>
                    <?php
                    if (isset($_GET['error'])) {
                        echo "<br><h2 style='color: red'; class='blink'>Wrong ID or password!</h2>";
                        echo "<p>hint:11, 11</p>";
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>