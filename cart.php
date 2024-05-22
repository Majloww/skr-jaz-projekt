<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.php";
    include_once "dbconnect.php";
    dbconnect();
    include_once "products.php";

    $product = new Product();
    $products = $product->getAll();
    ?>
</head>

<body>
    <?php
    $page = 'cart.php';
    include "header.php";
    ?>
    <div class="container" id="main-cont">
        <?php
        echo "<h1>Shopping Cart:</h1>";
        if (!empty($_SESSION['cart'])) {
            echo '<div class="container">';
            $totalPrice = 0;

            foreach ($_SESSION['cart'] as $productId => $quantity) {
                $productDetails = null;
                foreach ($products as $item) {
                    if ($item['product_id'] == $productId) {
                        $productDetails = $item;
                        break;
                    }
                }

                if ($productDetails) {
                    $productPrice = $productDetails['price'];
                    $totalPrice += $productPrice * $quantity;

                    $product->updateQuantity($productId, $quantity);

                    echo '<div class="row">';
                    echo '<div class="col-md">';
                    echo '<h3>' . $productDetails['title'] . '</h3>';
                    echo '<img src="images/' . htmlspecialchars($item['product_id']) . '.jpg" alt="' . htmlspecialchars($item['title']) . '" class="shop-img" id="' . htmlspecialchars($item['product_id']) . '">';
                    echo '<p>Quantity: ' . $quantity . '</p>';
                    echo '<p>Total Price: $' . ($productPrice * $quantity) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    unset($_SESSION['cart'][$productId]);
                }
            }
            echo '<div class="row">';
            echo '<div class="col-md" style="height: auto; padding-bottom: 10px; ">';
            echo '<h3>Total: $' . $totalPrice . '</h3>';
            echo '<form method="post" action="main.php">';
            echo '<button type="submit" class="btn btn-secondary">Purchase</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
    <?php
    include "footer.php";
    ?>

</body>

</html>