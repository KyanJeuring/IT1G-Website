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
                        <input type="checkbox" name="color" value="orange" style="accent-color: var(--companyOrange);">
                        <label for="color">Orange</label>
                    </div>
                    <div>
                        <input type="checkbox" name="color" value="blue" style="accent-color: var(--companyBlue);">
                        <label for="color">Blue</label>
                    </div>                    
                    <div>
                        <input type="checkbox" name="color" value="yellow" style="accent-color: var(--companyYellow);">
                        <label for="color">Yellow</label>
                    </div>
                    <div>
                        <input type="checkbox" name="color" value="green" style="accent-color: var(--companyGreen);">
                        <label for="color">Green</label>
                    </div>
                    <div>
                        <input type="checkbox" name="color" value="pink" style="accent-color: var(--companyPink);">
                        <label for="color">Pink</label>
                    </div>
                    <div>
                        <input type="checkbox" name="color" value="white" style="accent-color: var(--productWhite);">
                        <label for="color">White</label>
                    </div>
                    <div>
                        <input type="checkbox" name="color" value="grey" style="accent-color: var(--productGrey);">
                        <label for="color">Grey</label>
                    </div>
                    <div>
                        <input type="checkbox" name="color" value="multicolor" style="accent-color: var(--productMulti);">
                        <label for="color">Multicolor</label>
                    </div>
                </div>

                <div id="design">
                    <p>Filter by Design</p>
                    <div>
                        <input type="checkbox" name="design" value="solid">
                        <label for="design">Solid</label>
                    </div>
                    <div>
                        <input type="checkbox" name="design" value="striped">
                        <label for="design">Striped</label>
                    </div>                    
                    <div>
                        <input type="checkbox" name="design" value="unique">
                        <label for="design">Unique</label>
                    </div>
                </div>

                <div id="material">
                    <p>Filter by Material</p>
                    <div>
                        <input type="checkbox" name="material" value="cotton">
                        <label for="material">Cotton</label>
                    </div>
                    <div>
                        <input type="checkbox" name="material" value="wool">
                        <label for="material">Wool</label>
                    </div>
                    <div>
                        <input type="checkbox" name="material" value="fibre">
                        <label for="material">Sustainable Fibre</label>
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
                        public $material;
    
                        public function __construct($name, $color, $design, $material)
                        {
                            $this->name = $name;
                            $this->color = $color;
                            $this->design = $design;
                            $this->material = $material;
                        }



                    }
    
                      // list of products
                    $products =
                    [
                        new product('Ocean Breeze', 'blue', 'striped', 'cotton'),
                        new product('Navy Drift', 'green', 'striped', 'cotton'),
                        new product('Sunny Socks', 'yellow', 'solid', 'cotton'),
                        new product('Glam Walkers', 'pink', 'striped', 'cotton'),
                        new product('Crimson Web', 'orange', 'striped', 'cotton'),
                        new product('Cool Blue', 'blue', 'solid', 'cotton'),
                        new product('Cool Navy', 'green', 'solid', 'cotton'),
                        new product('Cotton Candy', 'pink', 'solid', 'cotton'),
                        new product('Tomato', 'orange', 'solid', 'cotton'),
                        new product('Lemon Whirl', 'yellow', 'striped', 'cotton'),
                        new product('Sporty', 'white', 'solid', 'wool'),
                        new product('Long Stripes', 'multicolor', 'striped', 'sustainable fibre'),
                        new product('White Dream', 'white', 'solid', 'wool'),
                        new product('Grey Dream', 'grey', 'solid', 'wool'),
                        new product('Confusion', 'multicolor', 'unique','sustainable fibre'),
                        new product('Wooble Double', 'multicolor', 'unique', 'sustainable fibre'),
                        new product('Splashy Colors', 'multicolor', 'unique', 'sustainable fibre'),
                        new product('Warm Flowers', 'color', 'unique', 'sustainable fibre'),
                    ];
                
    
                    // Search query checker
                    if(isset($_POST["search"])) $searchQuery = strtolower(filter_input(INPUT_POST, "search"));
                    else $searchQuery = "";
                    $filteredProducts = []; 
                    
                    // product loop
                    foreach($products as $product)
                    {
                        $nameMatch = false;
                        $designMatch = false;
                        $colorMatch = false;
                        $materialMatch = false;

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
                        if (isset($product->material)) 
                        {
                            $materialMatch = strpos(strtolower($product->material), $searchQuery) !== false;
                        }

                        //if there's a match, it enters the filtered products variable
                        if ($nameMatch || $colorMatch || $designMatch || $materialMatch) 
                        {
                            $filteredProducts[] = $product;
                        }
                    }
                    //product display
                    if (isset($filteredProducts)) 
                    {
                        echo "<div id='products'>";

                        foreach ($filteredProducts as $product) 
                        {
                                    echo "<a href='#'>";
                                        echo "<img src = 'resources/products/{$product->name}.jpg' alt='{$product->name}'> ";
                                        echo "<p>".$product->name."</p>";
                                        echo "<p>&#8364;&#160;25.99</p>";
                                    echo "</a>";
                        }
                        echo "</div>";
                    }   
                ?>
            </div>
    </main>
</div>