<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.php";
    ?>
</head>

<body>
    <?php
    $page = 'shop.php';
    include "header.php";
    ?>

    <!--Items - row col img-->
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h3>
                    Security Camera
                </h3>
                <img src="camera.png" alt="" class="shop-img" id="0001">
                <button type="button" class="btn btn-secondary" onclick="alert('Id 1 \nSecurity camera model 2020')">Info</button>
                <button type="button" class="btn btn-secondary">Add to Cart</button>
            </div>
            <div class="col-md">
                <h3>
                    Motion Sensor
                </h3>
                <img src="motion-sensor.jpg" alt="" class="shop-img" id="0002">
                <button type="button" class="btn btn-secondary" onclick="alert('Id 2 \nInfrared motion sensor')">Info</button>
                <button type="button" class="btn btn-secondary">Add to Cart</button>
            </div>
            <div class="col-md">
                <h3>
                    Control Panel
                </h3>
                <img src="control-panel.jpg" alt="" class="shop-img" id="0003">
                <button type="button" class="btn btn-secondary" onclick="alert('Id 3 \nControl panel that monitors your cameras')">Info</button>
                <button type="button" class="btn btn-secondary">Add to Cart</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <h3>
                    CCTV Camera
                </h3>
                <img src="camera2.jpg" alt="" class="shop-img" id="0003">
                <button type="button" class="btn btn-secondary" onclick="alert('Id 4 \nCCTV camera 1st gen')">Info</button>
                <button type="button" class="btn btn-secondary">Add to Cart</button>
            </div>
            <div class="col-md">
                <h3>
                    CCTV Camera V2
                </h3>
                <img src="camera3.jpg" alt="" class="shop-img" id="0003">
                <button type="button" class="btn btn-secondary" onclick="alert('Id 5 \nCCTV camera, upgraded model')">Info</button>
                <button type="button" class="btn btn-secondary">Add to Cart</button>
            </div>
            <div class="col-md">
                <h3>
                    Ball Camera
                </h3>
                <img src="camera4.jpg" alt="" class="shop-img" id="0003">
                <button type="button" class="btn btn-secondary" onclick="alert('Id 6 \nSecurity camera with ball head')">Info</button>
                <button type="button" class="btn btn-secondary">Add to Cart</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <h3>
                    Security Panel
                </h3>
                <img src="panel2.jpg" alt="" class="shop-img" id="0003">
                <button type="button" class="btn btn-secondary" onclick="alert('Id 7 \nSecurity panel with buttons')">Info</button>
                <button type="button" class="btn btn-secondary">Add to Cart</button>
            </div>
            <div class="col-md">
                <h3>
                    Fingerprint Lock
                </h3>
                <img src="padlock.jpg" alt="" class="shop-img" id="0003">
                <button type="button" class="btn btn-secondary" onclick="alert('Id 8 \nPadlock with fingerprint reader')">Info</button>
                <button type="button" class="btn btn-secondary">Add to Cart</button>
            </div>
            <div class="col-md">
                <h3>
                    VPN Service
                </h3>
                <img src="vpn.jpg" alt="" class="shop-img" id="0003">
                <button type="button" class="btn btn-secondary" onclick="alert('Id 9 \nVPN Service provided')">Info</button>
                <button type="button" class="btn btn-secondary">Add to Cart</button>
            </div>
        </div>

        <!--Forward na inu stranku cez button-->
        <p>Didn't find what you were looking for? Check out our US store:</p><button class="btn btn-dark"><a href="https://www.amazon.com/" style="text-decoration: none;">Amazon</a></button>
    </div>

    <?php
    include "footer.php";
    ?>
</body>

</html>