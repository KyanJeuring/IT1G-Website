<?php
    if(!session_id()) session_start();
?>
        <h1>Store page content</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias provident eos doloribus quas aspernatur. Suscipit nihil dignissimos aliquid animi neque voluptatem, fugit quam voluptas ad hic natus. Eaque, deserunt quia.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt harum quae optio distinctio? Possimus ullam vitae, iste doloremque officiis in? In sapiente debitis tempora doloribus iusto corporis commodi aspernatur.</p>
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
            <form action="" class="search">
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
        <div class="product-list">
                <?php

                    // product class
                    class product
                    {
                        public $name;
                        public $color;
                        public $design;

    
                        public function __construct($name, $color, $design)
                        {
                            $this->name = $name;
                            $this->color = $color;
                            $this->design = $design;
                        }



                    }
    
                      // list of products
                    $products =
                    [
                        new product('Ocean Breeze', 'blue', 'striped', 'ocean-breeze'),
                        new product('Navy Drift', 'light blue', 'striped', ''),
                        new product('Sunny Socks', 'yellow', 'solid',''),
                        new product('Glam Walkers', 'pink', 'striped',''),
                        new product('Crimson Web', 'red', 'striped',''),
                        new product('Cool Blue', 'blue', 'solid',''),
                        new product('Navy Drift', 'blue', 'solid',''),
                        new product('Cotton Candy', 'pink', 'solid',''),
                        new product('Tomato', 'red', 'solid',''),
                        new product('Lemon Whirl', 'yellow', 'striped',''),
                        new product('Sporty', 'white', 'striped',''),
                        new product('Long Stripes', 'multicolor', 'striped',''),
                        new product('White Dream', 'white', 'solid',''),
                        new product('Grey Dream', 'grey', 'solid',''),
                        new product('Confusion', 'multicolor', 'unique',''),
                        new product('Wooble Double', 'multicolor', 'unique',''),
                        new product('Splashy Colors', 'multicolor', 'unique',''),
                        new product('Warm Flowers', 'color', 'unique',''),
                    ];
                
    
    
                

                // Search query checker
                if(isset($_SESSION["search"]))
                {
                    $searchQuery = strtolower($_SESSION["search"]); // case sense
                    $filteredProducts = []; 
                    
                    // product loop
                    foreach($products as $product)
                    
                    {
                        $nameMatch = false;
                        $designMatch = false;
                        $colorMatch = false;

                        //product check
                        if (isset($product->name)) 
                        {
                            $nameMatch = strpos(strtolower($product->name), $searchQuery) !== false;
                        }
                        if (isset($product->design)) 
                        {
                            $designMatch = strpos(strtolower($product->design), $searchQuery) !== false;
                        }
                        if (isset($product->color)) 
                        {
                            $colorMatch = strpos(strtolower($product->color), $searchQuery) !== false;
                        }

                        //if there's a match, it enters the filtered products variable
                        if ($nameMatch || $colorMatch || $designMatch) 
                        {
                            $filteredProducts[] = $product;
                        }
                    }
                    //product display (the echos are temporary, I will update them with the actual products when the time comes)
                    if (!empty($filteredProducts)) 
                    {
                        foreach ($filteredProducts as $product) 
                        {
                            
                            echo "<div class='product-item'>";
                            echo "<h3>" . (isset($product->name) ? $product->name : 'No name') . "</h3>"; 
                            echo "<p>Color: " . (isset($product->color) ? $product->color : 'No color') . "</p>";
                            echo "<p>Design: " . (isset($product->design) ? $product->design : 'No design') . "</p>"; 
                            echo "</div>";

                        }
                    }
                    else 
                    {
                        echo "No products found.";
                    }
                }
                else 
                {
                    echo "<p> test text</p>";
                }
                
                ?>
            </div>
    </main>
</div>

            
        
    </body>
</html>
