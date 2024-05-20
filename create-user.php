<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap and js-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--css-->
    <link rel="stylesheet" href="eshop.css">

    <title>Secure home</title>
    <link rel="icon" type="image/x-icon" href="shield-halved-solid.ico">
</head>

<body>
    <div class="container" id="main-cont">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="db-create-user.php" method="post"> <!--neda sa do action vo forme hodid function() -->
                    <h1>Create a new account</h1>
                    <label for="name">Name:</label><br>
                    <input class="form-control" type="text" id="name" name="name" required><br><br>

                    <label for="surname">Surname:</label><br>
                    <input class="form-control" type="text" id="surname" name="surname" required><br><br>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div><br>

                    <label for="password">Password:</label><br>
                    <input class="form-control" type="password" id="password" name="password" required><br><br>

                    <button type="submit" class="btn btn-secondary btn-block">Submit</button>
                    <hr>
                    <p style="font-size: small;">An e-mail will be sent to your e-mail address containing your ID number and a confirmation of creation of your profile. Check your inbox or spam folder.</p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>