<div id="container">
    <aside>
        <div class="categories">
            <p>Product categories</p>
            <p class="keywords">Keywords</p>

            <div id="keywords">
                <div class="spring">Spring x</div>
                <div class="smart">Smart x</div>
                <div class="modern">Modern x</div>
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="form">
                <div id="filter">
                    <input type="checkbox" name="filter" value="men" checked="checked"> Men <br>
                    <input type="checkbox" name="filter" value="women" checked="checked"> Women <br>
                    <input type="checkbox" name="filter" value="kids" checked="checked"> Kids <br>
                </div>

                <div id="price">
                    <label for="price">Price Range</label>
                    <label for="price">$0-100</label>
                    <input type="range" name="price" min="0" max="100" step="1" defauk="0" />
                </div>

                <div id="color">
                    <p>Filter by Color</p>
                    <input type="checkbox" name="color" value="red" checked="checked"> Red</input> <br>
                    <input type="checkbox" name="color" value="blue" checked="checked"> Blue</input> <br>
                    <input type="checkbox" name="color" value="yellow" checked="checked"> Yellow</input> <br>
                </div>

                <div id="size">
                    <p>Filter by Size</p>
                    <input type="checkbox" name="size" value="small" checked="checked"> Small</input> <br>
                    <input type="checkbox" name="size" value="medium" checked="checked"> Medium</input> <br>
                    <input type="checkbox" name="size" value="large" checked="checked"> Large</input> <br>
                </div>
            </form> 
        </div>
    </aside> 

    <main>
        <div id="bar">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="search">
                <input type="search" name="search">
                <label for="search">Search</label>
            </form>
        </div>

        <!-- <div id="products">
            <div class="ocean-breeze">
                <a href="">
                    <img src="resources/sunny_socks_photos/catalogus/Sunny_socks_blue.jpg" alt="Ocean Breeze">
                    <p>Ocean Breeze</p>
                    <p>$25.99</p>
                </a>
            </div>
        </div> -->
        
    </main>
</div>
        <div class="search-container">
            <div class="filter-section">
                <form action="" method="POST">
                    <input type="search" name="search" placeholder="search">
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class="product-list">
                <?php
                //list of products
                $products = 
                [
                    ['name' => 'Ocean Breeze', 'color' => 'blue', 'design' => 'striped'],
                    ['name' => 'Navy Drift', 'color' => 'light blue', 'design' => 'striped'],
                    ['name' => 'Sunny Socks', 'color' => 'yellow', 'design' => 'solid'],
                    ['name' => 'Glam Walkers', 'color' => 'pink', 'design' => 'striped'],
                    ['name' => 'Crimson Web', 'color' => 'red', 'design' => 'striped'],
                    ['name' => 'Cool Blue', 'color' => 'blue', 'design' => 'solid'],
                    ['name' => 'Navy Drift', 'color' => 'light blue', 'design' => 'solid'],
                    ['name' => 'Cotton Candy', 'color' => 'pink', 'design' => 'solid'],
                    ['name' => 'Tomato', 'color' => 'red', 'design' => 'solid'],
                    ['name' => 'Lemon Whirl', 'color' => 'yellow', 'design' => 'striped'],
                    ['name' => 'Sporty', 'color' => 'white', 'design' => 'striped'],
                    ['name' => 'Long Stripes', 'color' => 'multicolor','design' => 'striped'],
                    ['name' => 'White Dream', 'color' => 'white', 'design' => 'solid'],
                    ['name' => 'Grey Dream', 'color' => 'grey', 'design' => 'solid'],
                    ['name' => 'Confusion', 'color' => 'multicolor', 'design' => 'unique'],
                    ['name' => 'Wooble Double', 'color' => 'multicolor', 'design' => 'unique'],
                    ['name' => 'Splashy Colors', 'color' => 'multicolor', 'design' => 'unique'],
                    ['name' => 'Warm Flowers', 'color' => 'multicolor', 'design' => 'unique'],
                ];


                // Search query checker
                if(isset($_POST['search']) && !empty($_POST['search']))
                {
                    $searchQuery = strtolower($_POST['search']); // case sense
                    $filteredProducts = []; 
                    

                    // product loop
                    foreach($products as $product)
                    
                    {
                        $nameMatch = false;
                        $designMatch = false;
                        $colorMatch = false;

                        //product check
                        if (isset($product['name'])) 
                        {
                            $nameMatch = strpos(strtolower($product['name']), $searchQuery) !== false;
                        }
                        if (isset($product['design'])) 
                        {
                            $designMatch = strpos(strtolower($product['design']), $searchQuery) !== false;
                        }
                        if (isset($product['color'])) 
                        {
                            $colorMatch = strpos(strtolower($product['color']), $searchQuery) !== false;
                        }

                        //if there's a match, it enters the filtered products variable
                        if ($nameMatch || $colorMatch || $designMatch) 
                        {
                            $filteredProducts[] = $product;
                        }
                    }
                    //product display (the echos are temporary, I will update them with the actual products when the time comes)
                    if (!empty($filteredProducts)) {
                        foreach ($filteredProducts as $product) 
                        {
                            echo "<div class='item'>";
                            // echo "<div class='product-item'>";
                            // echo "<h3>" . (isset($product['name']) ? $product['name'] : 'No name') . "</h3>"; 
                            // echo "<p>Color: " . (isset($product['color']) ? $product['color'] : 'No color') . "</p>";
                            // echo "<p>Design: " . (isset($product['design']) ? $product['design'] : 'No design') . "</p>"; 
                            // echo "</div>";
                        }
                    }
                    else 
                    {
                        echo "No products found.";
                    }
                }
                else 
                {
                    
                }
                
                ?>
            </div>
        </div>
    </body>
</html>
