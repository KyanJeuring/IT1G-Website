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
            <button type="submit" name="addToCart" value=true>Add To Cart</button>
            <input type="hidden" name="navBtn" value="Item">
        </form>
        <?php
            // if the user wants has clicked the add to cart button
            if(($addToCart == true) && (count($_SESSION['shoppingCart'] -> items) < 99))
            {
                echo "<p id='success'>Item added to cart successfully!</p>"; // display appropriate message
                // display it using php and javascript so that it disapears after 2 seconds
                echo "<script>
                        setTimeout(function() {
                            document.getElementById('success').style.display = 'none';
                        }, 2000);
                      </script>";
            }
        ?>
    </aside>
</main>