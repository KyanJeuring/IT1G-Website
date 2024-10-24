<?php 
    $item = filter_input(INPUT_POST, 'itemToDisplay');
    $addToCart = filter_input(INPUT_POST, "addToCart", FILTER_VALIDATE_BOOLEAN);
    if(isset($item)) 
    {
        $_SESSION['item'] = json_decode($item);
    }
    $product = $_SESSION['item'];

    if($addToCart == true)
    {
        array_push($_SESSION["shoppingCart"]->items, $product);
    }
?>
<main id="item">
    <?php
        echo "<img src = 'resources/products/{$product->name}.jpg' alt='{$product->name}'> ";
    ?>
    <aside id="info">
        <?php
            echo "<h1>" . $product->name . "</h1>";
            echo "<p>" . ucfirst($product->material) .  " Socks</p>";
        ?>
        <div id="price">
            <h2><?php echo "&#8364;&#160;".$product->price; ?></h2>
            <h2><?php echo "&#8364;&#160;".round($product->price*1.25, 2); ?></h2>
        </div>
        <p>Step Into Luxury With Our Premium Socks, Meticulously Crafted For Supreme Comfort And Enduring Style. Made With High-Quality, Soft Cotton Blends, These Socks Are Gentle On Your Skin And Provide Excellent Breathability To Keep Your Feet Cool And Dry All Day Long.</p>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <button type="submit" name="addToCart" value=true>
                <p>Add To Cart</p>
            </button>
            <input type="hidden" name="navBtn" value="Item">
        </form>
        <?php
            if($addToCart == true)
            {
                echo "<div id='success'>";
                    echo "<p>Item added to cart successfully!</p>";
                echo "</div>";
            }
        ?>
    </aside>
</main>