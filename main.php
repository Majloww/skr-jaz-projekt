<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.php";
    ?>
</head>

<body>
    <?php
    $page = 'main.php';
    include "header.php";
    ?>

    <!--Main container-->
    <div class="container" id="main-cont">

        <!--Slideshow-->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" id="carousel-img" src="images/2.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" id="carousel-img" src="images/3.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" id="carousel-img" src="images/7.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" id="carousel-img" src="images/9.jpg" alt="Fourth slide">
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
                <img src="images/5.jpg" alt="banner" class="img-fluid">
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