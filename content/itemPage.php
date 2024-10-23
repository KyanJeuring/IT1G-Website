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
            <h2>$ 26.99</h2>
            <h2>$ 32.00</h2>
        </div>
        <p>Step Into Luxury With Our Premium Socks, Meticulously Crafted For Supreme Comfort And Enduring Style. Made With High-Quality, Soft Cotton Blends, These Socks Are Gentle On Your Skin And Provide Excellent Breathability To Keep Your Feet Cool And Dry All Day Long.</p>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <button type="submit" name="addToCart" value=true>
                <p>Add To Cart</p>
            </button>
            <input type="hidden" name="navBtn" value="Item">
        </form>
    </aside>
</main>