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
        <?php
        include "products.php";
        $product = new Product();
        $products = $product->getAll();

        if ($products) {
            $rowOpen = false;
            foreach ($products as $index => $item) {
                if ($index % 3 == 0) {
                    if ($rowOpen) {
                        echo '</div>';
                    }
                    echo '<div class="row">';
                    $rowOpen = true;
                }

                echo '<div class="col-md">';
                echo '<h3>' . htmlspecialchars($item['title']) . '</h3>';
                echo '<img src="images/' . htmlspecialchars($item['product_id']) . '.jpg" alt="' . htmlspecialchars($item['title']) . '" class="shop-img" id="' . htmlspecialchars($item['product_id']) . '">';
                echo '<button type="button" class="btn btn-secondary" onclick="alert(\'Id ' . htmlspecialchars($item['description']) . '\')">Info</button>';
                echo '<form method="post" action="add-to-cart.php" style="display:inline;">';
                echo '<input type="hidden" name="product_id" value="' . htmlspecialchars($item['product_id']) . '">';
                echo '<input type="hidden" name="quantity" value="1">';
                echo '<button type="submit" class="btn btn-secondary">Add to Cart</button>';
                echo '</form>';
                echo '</div>';
            }
            if ($rowOpen) {
                echo '</div>';
            }
            echo '<p>Didn`t find what you were looking for? Check out our US store:</p><button class="btn btn-dark"><a href="https://www.amazon.com/" style="text-decoration: none;">Amazon</a></button>';
            echo '</div>';
        }

        ?>
    </div>

    <?php
    include "footer.php";
    ?>
</body>

</html>