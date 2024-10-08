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
                $products = [
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
                ]
                ?>
            </div>
        </div>
    </body>
</html>
