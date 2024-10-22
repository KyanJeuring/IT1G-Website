<!-- creating the main page container which all content will fall into -->
<main class="pageContainer">
    <!-- hero intro section (container) | this is what the viewer sees when they first load in -->
    <section class="introImageContainer">
        <!-- creating the info box -->
        <div class="semitransparentContentBox">
            <h1 class="introHeaderText"><span class="oneLineBlockElement">Lets change</span> <span class="oneLineBlockElement">the world</span> <span class="oneLineBlockElement">one sock at a time</span></h1>
            <p class="generalText">We like to add some color to one of the the most everyday moments of life.</p>
            <button class="ctaButtonArrow" onclick="document.getElementById('galleryContainer').scrollIntoView({ behavior: 'smooth' });">Make The Change Today</button>
        </div>
    </section>

    <!-- gallery/carousel section (container) -->
    <section class="galleryContainer" id="galleryContainer">
        <h1 class="headerText">Browse Our Collections</h1>
        <div class="galleryCarousel">
            <!-- setting up carousel structure such as: button-left | info box | button-right -->
            <button class="galleryButton" id="galleryLeftButton"></button>
            <div class="semitransparentContentBox">
                <h1 class="headerText">Summer Breeze</h1>
                <p class="generalText">Keep cool and stylish with our lightweight summer socks, ideal for every sun-filled adventure.</p>
                <button class="ctaButton">Summary Collection</button>
            </div>
            <button class="galleryButton" id="galleryRightButton"></button>
        </div>
    </section>

    <!-- Short product catalog section (container) -->
    <section class="productCatalogSection">
        <h1 class="headerText">Our Products</h1>

        <!-- creating the box which products will be structured in -->
        <div class="productCatalog">
            <!-- Creating the box containers -->
            <?php
            $products = [
                [
                    'image' => 'resources\socksImages\3ColourSocks(available_in_15_combinations).png',
                    'name' => 'Socks',
                    'slogan' => 'Slogan',
                    'newPrice' => '$ New Price',
                    'oldPrice' => '$ Old Price'
                ],
                [
                    'image' => 'resources\socksImages\comfy.png',
                    'name' => 'Socks',
                    'slogan' => 'Slogan',
                    'newPrice' => '$ New Price',
                    'oldPrice' => '$ Old Price'
                ],
                [
                    'image' => 'resources\socksImages\green.png',
                    'name' => 'Socks',
                    'slogan' => 'Slogan',
                    'newPrice' => '$ New Price',
                    'oldPrice' => '$ Old Price'
                ],
                [
                    'image' => 'resources\socksImages\image2.png',
                    'name' => 'Socks',
                    'slogan' => 'Slogan',
                    'newPrice' => '$ New Price',
                    'oldPrice' => '$ Old Price'
                ],
                [
                    'image' => 'resources\socksImages\image3.png',
                    'name' => 'Socks',
                    'slogan' => 'Slogan',
                    'newPrice' => '$ New Price',
                    'oldPrice' => '$ Old Price'
                ],
                [
                    'image' => 'resources\socksImages\red.png',
                    'name' => 'Socks',
                    'slogan' => 'Slogan',
                    'newPrice' => '$ New Price',
                    'oldPrice' => '$ Old Price'
                ],
                [
                    'image' => 'resources\socksImages\image4.png',
                    'name' => 'Socks',
                    'slogan' => 'Slogan',
                    'newPrice' => '$ New Price',
                    'oldPrice' => '$ Old Price'
                ],
                [
                    'image' => 'resources\socksImages\image5.png',
                    'name' => 'Socks',
                    'slogan' => 'Slogan',
                    'newPrice' => '$ New Price',
                    'oldPrice' => '$ Old Price'
                ]
            ];

            foreach ($products as $product) {
                echo '<div class="productBox">';
                echo '<img src="' . $product['image'] . '" alt="image of product item" class="productImage">';
                echo '<div class="productInfoBox">';
                echo '<h2 class="productName">' . $product['name'] . '</h2>';
                echo '<p class="productSlogan">' . $product['slogan'] . '</p>';
                echo '<div class="productPrices">';
                echo '<p class="productNewPrice">' . $product['newPrice'] . '</p>';
                echo '<p class="productOldPrice">' . $product['oldPrice'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
        <button class="ctaButton" id="productsCtaButton">See More</button>
    </section>

    <!-- About section that gives information about the company (container) -->
     <section class="aboutGridContainer">
        <div class="aboutGridElement" id="box1">
        </div>
        <div class="aboutGridElement" id="box2">
            <h1 class="headerText">Why We Do This</h1>
        </div>
        <div class="aboutGridElement" id="box3">
            <h1 class="headerText">Let's Change</h1>
            <h1 class="headerText">The World</h1>
            <h1 class="headerText">One Sock At A Time</h1>
        </div>
        <div class="aboutGridElement" id="box4">
            <h2>#Change</h2>
        </div>
        <div class="aboutGridElement" id="box5">
            <h2>#Freedom</h2>
        </div>
        <div class="aboutGridElement" id="box6">
            <h2>#Explore</h2>
        </div>
        <div class="aboutGridElement" id="box7">
            <p>
                At Sunny, we blend style with sustainability to make a positive impact with every pair of socks. We embrace eco-friendly materials and fair labor practices because we believe in doing good for both our planet and its people.
            </p>
            <button class="ctaButton">Learn More</button>
        </div>
    </section>

    <?php
        include 'newsletterSignUpForm.php'
    ?>
</main>