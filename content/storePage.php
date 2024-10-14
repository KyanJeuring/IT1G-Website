<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Store</title>
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
                            echo "<div class='product-item'>";
                            echo "<h3>" . (isset($product['name']) ? $product['name'] : 'No name') . "</h3>"; 
                            echo "<p>Color: " . (isset($product['color']) ? $product['color'] : 'No color') . "</p>";
                            echo "<p>Design: " . (isset($product['design']) ? $product['design'] : 'No design') . "</p>"; 
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
