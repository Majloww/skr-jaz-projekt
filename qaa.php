<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.php";
    ?>
</head>

<body>
    <?php
    $page = 'qaa.php';
    include "header.php";
    ?>

    <!--Akordeon-->
    <div class="container" id="qaa-cont">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h2 id="qaah2">
                                Who are we?
                            </h2>
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        We are the leading world-known home security providers, who ensure your home stays safe all year
                        long.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h2 id="qaah2">
                                Where do we ship from?
                            </h2>
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Our warehouse is located in Nitra, Slovakia. Shipping in Europe should be around 3-4 days.
                        Worldwide shipping is taking a bit longer - it should arrive in less than two weeks.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h2 id="qaah2">
                                How can I order?
                            </h2>
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Head to our <a href="shop.php">shop</a> or look inside your <a href="">cart</a>, you will find
                        products there.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h2 id="qaah2">
                                Where can i change my shipping information?
                            </h2>
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        When ordering through the <a href="">cart</a>, a window shows up with blank spaces, or you can
                        save it for future orders in <a href="">profile</a>.
                    </div>
                </div>
            </div>
        </div>
        <h2>Do you have other questions? Send them our way and we`ll be sure to answer!</h2>
        <div class="form-group">
            <label for="comment"></label>
            <textarea class="form-control" id="comment" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </div>

    <?php
    include "footer.php";
    ?>

</body>

</html>