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

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="form">
                <div id="filter">
                    <div>
                        <input type="checkbox" name="filter" value="men" checked="checked">
                        <label for="filter">Men</label>
                    </div>
                    <div>
                        <input type="checkbox" name="filter" value="women" checked="checked">
                        <label for="filter">Women</label>
                    </div>
                    <div>
                        <input type="checkbox" name="filter" value="kids" checked="checked">
                        <label for="filter">Kids</label>
                    </div>
                </div>

                <div id="price">
                    <label for="price">Price Range</label>
                    <label for="price">$0-100</label>
                    <input type="range" name="price" min="0" max="100" step="1" defauk="0" />
                </div>

                <div id="color">
                    <p>Filter by Color</p>
                    <div>
                        <input type="checkbox" name="color" value="orange" checked="checked" style="accent-color: var(--companyOrange);">
                        <label for="color">Orange</label>
                    </div>
                    <div>
                        <input type="checkbox" name="color" value="blue" checked="checked" style="accent-color: var(--companyBlue);">
                        <label for="color">Blue</label>
                    </div>                    
                    <div>
                        <input type="checkbox" name="color" value="yellow" checked="checked" style="accent-color: var(--companyYellow);">
                        <label for="color">Yellow</label>
                    </div>
                    <div>
                        <input type="checkbox" name="color" value="green" checked="checked" style="accent-color: var(--companyGreen);">
                        <label for="color">Green</label>
                    </div>
                    <div>
                        <input type="checkbox" name="color" value="pink" checked="checked" style="accent-color: var(--companyPink);">
                        <label for="color">Pink</label>
                    </div>
                </div>

                <div id="size">
                    <p>Filter by Size</p>
                    <div>
                        <input type="checkbox" name="size" value="small" checked="checked">
                        <label for="size">Small</label>
                    </div>
                    <div>
                        <input type="checkbox" name="size" value="medium" checked="checked">
                        <label for="size">Medium</label>
                    </div>                    
                    <div>
                        <input type="checkbox" name="size" value="large" checked="checked">
                        <label for="size">Large</label>
                    </div>
                </div>
            </form> 
        </div>
    </aside> 

    <main>
        <div id="bar">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="search">
                <input type="search" name="search" placeholder="Search">
                <!-- TODO: style this button / make it an icon -->
                <button type="submit" name="navBtn" value="Shop"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
            </form>
        </div>

        
        
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
                        new product('Ocean Breeze', 'blue', 'striped',),
                        new product('Navy Drift', 'light blue', 'striped'),
                        new product('Sunny Socks', 'yellow', 'solid'),
                        new product('Glam Walkers', 'pink', 'striped'),
                        new product('Crimson Web', 'red', 'striped'),
                        new product('Cool Blue', 'blue', 'solid'),
                        new product('Cool Navy', 'blue', 'solid'),
                        new product('Cotton Candy', 'pink', 'solid'),
                        new product('Tomato', 'red', 'solid'),
                        new product('Lemon Whirl', 'yellow', 'striped'),
                        new product('Sporty', 'white', 'striped'),
                        new product('Long Stripes', 'multicolor', 'striped'),
                        new product('White Dream', 'white', 'solid'),
                        new product('Grey Dream', 'grey', 'solid'),
                        new product('Confusion', 'multicolor', 'unique'),
                        new product('Wooble Double', 'multicolor', 'unique'),
                        new product('Splashy Colors', 'multicolor', 'unique'),
                        new product('Warm Flowers', 'color', 'unique'),
                    ];
                
    
    
                

                // Search query checker
                if(isset($_POST["search"]))
                {
                    $searchQuery = strtolower($_POST["search"]); // case sense
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
                    if (isset($filteredProducts)) 
                    {
                        echo "<div id='products'>";

                        foreach ($filteredProducts as $product) 
                        {
                                    echo "<a href '#'>";
                                        echo "<img src = 'resources/products/{$product->name}.jpg' alt='{product->name}'";
                                        echo "<p>{$product->name}</p>";
                                        echo "<p>$25.99</p>";
                                    echo "</a>";
                        }
                        echo "</div>";
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