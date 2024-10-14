<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Store page content</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias provident eos doloribus quas aspernatur. Suscipit nihil dignissimos aliquid animi neque voluptatem, fugit quam voluptas ad hic natus. Eaque, deserunt quia.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt harum quae optio distinctio? Possimus ullam vitae, iste doloremque officiis in? In sapiente debitis tempora doloribus iusto corporis commodi aspernatur.</p>
        <div class="search-container">
            <div class="filter-section">
                <form action="" method="POST">
                    <input type="search" name="search" placeholder="search">
                    <button type="submit">Search</button>
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
                        new product('Ocean Breeze', 'blue', 'striped'),
                        new product('Navy Drift', 'light blue', 'striped'),
                        new product('Sunny Socks', 'yellow', 'solid'),
                        new product('Glam Walkers', 'pink', 'striped'),
                        new product('Crimson Web', 'red', 'striped'),
                        new product('Cool Blue', 'blue', 'solid'),
                        new product('Navy Drift', 'blue', 'solid'),
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
                if(isset($_GET['search']) && !empty($_GET['search']))
                {
                    $searchQuery = strtolower($_GET['search']); // case sense
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
                    if (!empty($filteredProducts)) {
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
                    
                }
                
                ?>
            </div>
        </div>
    </body>
</html>
