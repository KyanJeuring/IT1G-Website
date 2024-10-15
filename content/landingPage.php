<!-- creating the main page container which all content will fall into -->
<main class="pageContainer">
    <!-- hero intro section (container) | this is what the viewer sees when they first load in -->
    <section class="introImageContainer">
        <!-- creating the info box -->
        <div class="semitransparentContentBox">
            <h1 class="introHeaderText"><span class="oneLineBlockElement">Lets change</span> <span class="oneLineBlockElement">the world</span> <span class="oneLineBlockElement">one sock at a time</span></h1>
            <p class="generalText">We like to add some color to one of the the most everyday moments of life.</p>
            <button class="ctaButtonArrow">Make The Change Today</button>
        </div>
    </section>

    <!-- gallery/carousel section (container) -->
    <section class="galleryContainer">
        <h1 class="headerText">Browse Our Collections</h1>
        <div class="galleryCarousel">
            <!-- setting the background images that will dynamically change upon clicking cta buttons -->
            <img src="" alt="image of socks in the winter" class="dynamicImage" id="js-dynamicImage">
            <img src="" alt="image of socks in the summer" class="dynamicImage" id="js-dynamicImage">
            <img src="" alt="image of socks in autumn" class="dynamicImage" id="js-dynamicImage">
            <img src="" alt="image of socks in spring" class="dynamicImage" id="js-dynamicImage">

            <!-- setting up carousel structure such as: button-left | info box | button-right -->
            <button class="galleryButton" id="galleryLeftButton"><img src="" alt="image of arrow pointing to the left"></button>
            <div class="semitransparentContentBox">
                <h1 class="headerText">Summer Breeze</h1>
                <p class="generalText">Keep cool and stylish with our lightweight summer socks, ideal for every sun-filled adventure.</p>
                <button class="ctaButton">Summary Collection</button>
            </div>
            <button class="galleryButton" id="galleryLeftButton"><img src="" alt="image of arrow pointing to the right"></button>
        </div>
    </section>

    <!-- Short product catalog section (container) -->
    <section class="productCatalogSection">
        <h1 class="headerText">Our Products</h1>

        <!-- creating the box which products will be structured in -->
        <div class="productCatalog">
            <!-- Creating the box containers -->
            <div class="productBox">
                <img src="" alt="image of product item" class="productImage">
                <div class="productInfoBox">
                    <h2 class="productName">Socks</h2>
                    <p class="productSlogan">Slogan</p>
                    <p class="productNewPrice">$ New Price</p>
                    <p class="productOldPrice">$ Old Price</p>
                </div>
            </div>
            <div class="productBox">
                <img src="" alt="image of product item" class="productImage">
                <div class="productInfoBox">
                    <h2 class="productName">Socks</h2>
                    <p class="productSlogan">Slogan</p>
                    <p class="productNewPrice">$ New Price</p>
                    <p class="productOldPrice">$ Old Price</p>
                </div>
            </div>
            <div class="productBox">
                <img src="" alt="image of product item" class="productImage">
                <div class="productInfoBox">
                    <h2 class="productName">Socks</h2>
                    <p class="productSlogan">Slogan</p>
                    <p class="productNewPrice">$ New Price</p>
                    <p class="productOldPrice">$ Old Price</p>
                </div>
            </div>
            <div class="productBox">
                <img src="" alt="image of product item" class="productImage">
                <div class="productInfoBox">
                    <h2 class="productName">Socks</h2>
                    <p class="productSlogan">Slogan</p>
                    <p class="productNewPrice">$ New Price</p>
                    <p class="productOldPrice">$ Old Price</p>
                </div>
            </div>
            <div class="productBox">
                <img src="" alt="image of product item" class="productImage">
                <div class="productInfoBox">
                    <h2 class="productName">Socks</h2>
                    <p class="productSlogan">Slogan</p>
                    <p class="productNewPrice">$ New Price</p>
                    <p class="productOldPrice">$ Old Price</p>
                </div>
            </div>
            <div class="productBox">
                <img src="" alt="image of product item" class="productImage">
                <div class="productInfoBox">
                    <h2 class="productName">Socks</h2>
                    <p class="productSlogan">Slogan</p>
                    <p class="productNewPrice">$ New Price</p>
                    <p class="productOldPrice">$ Old Price</p>
                </div>
            </div>
            <div class="productBox">
                <img src="" alt="image of product item" class="productImage">
                <div class="productInfoBox">
                    <h2 class="productName">Socks</h2>
                    <p class="productSlogan">Slogan</p>
                    <p class="productNewPrice">$ New Price</p>
                    <p class="productOldPrice">$ Old Price</p>
                </div>
            </div>
            <div class="productBox">
                <img src="" alt="image of product item" class="productImage">
                <div class="productInfoBox">
                    <h2 class="productName">Socks</h2>
                    <p class="productSlogan">Slogan</p>
                    <p class="productNewPrice">$ New Price</p>
                    <p class="productOldPrice">$ Old Price</p>
                </div>
            </div>
        </div>
        
        <!-- cta button that takes user to the products catalog -->
        <button class="ctaButton">See More</button>
    </section>

    <!-- About section that gives information about the company (container) -->
     <section class="aboutGridContainer">
        <div class="aboutGridElement">
            <img src="" alt="image of lady standing on towel wearing socks">
        </div>
        <div class="aboutGridElement">
            <h1>Why We Do This</h1>
        </div>
        <div class="aboutGridElement">
            <h1 class="headerText">Let's Change</h1>
            <h1 class="headerText">The World</h1>
            <h1 class="headerText">One Sock At A Time</h1>
        </div>
        <div class="aboutGridElement">
            <img src="" alt="image of happy father putting on socks for child">
            <h2>#Change</h2>
        </div>
        <div class="aboutGridElement">
            <img src="" alt="">
            <h2>#Freedom</h2>
        </div>
        <div class="aboutGridElement">
            <img src="" alt="">
            <h2>#Explore</h2>
        </div>
        <div class="aboutGridElement">
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