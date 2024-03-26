<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.php";
    ?>
</head>

<body>
    <!--Header-->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="shield-halved-solid.ico" alt="Home"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="review.php">Contact</a>
                </li>
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                            </svg>Profile</a>
                        <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                            </svg>Cart</a>
                        <a class="dropdown-item" href="qaa.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                            </svg>Q&A</a>
                        <a class="dropdown-item" href="review.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                            </svg>Review</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!--Main container-->
    <div class="container" id="main-cont">

        <!--Slideshow-->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" id="carousel-img" src="camera4.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" id="carousel-img" src="motion-sensor.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" id="carousel-img" src="control-panel.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" id="carousel-img" src="panel2.jpg" alt="Fourth slide">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!--Description-->
        <div class="container" id="desc-cont">
            <h1>Secure home</h1>
            <h2>Your go-to destination for global home security solutions.</h2>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex" id="text-col">
                <p>Explore our range of cutting-edge devices, from smart cameras to advanced doorbell systems, providing
                    unmatched protection worldwide. With a commitment to quality assurance, our products are designed
                    for
                    easy
                    installation and user-friendly operation.
                    <span style="font-weight: bolder; color: rgb(95, 95, 95);">Shielded™</span> can be
                    seamlessly integrated into your home, ensuring
                    peace of mind no matter where you are.
                </p>
            </div>
            <div class="col-md-6">
                <img src="camera.jpg" alt="banner" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Kreativny .blink-->
                <h4 class="blink">Join us in creating a safer world, one home at a time.</h4>
            </div>
        </div>

        <!--Table-->
        <ul class="list-group">
            <li class="list-group-item list-group-item-success">We make the best security devices in central Europe and
                proudly stand by this!</li>
            <li class="list-group-item">We ship to almost every country in the world!</li>
            <li class="list-group-item">We have a wide variety of security devices in stock!</li>
            <li class="list-group-item">Our customer support is available <span style="color: red; font-weight: bold;">24/7</span></li>
            <li class="list-group-item">When ordering in slovakia, you can opt for free installation by our expert team!
                <span class="blink" style="color: orangered;">Offer is available until 31.12.2023</span>
            </li>
        </ul>
    </div>

    <?php
    include "footer.php";
    ?>

</body>

</html>