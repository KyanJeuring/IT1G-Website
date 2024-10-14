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

        <div id="products">
            <div class="ocean-breeze">
                <a href="">
                    <img src="resources/sunny_socks_photos/catalogus/Sunny_socks_blue.jpg" alt="Ocean Breeze">
                    <p>Ocean Breeze</p>
                    <p>$25.99</p>
                </a>
            </div>

            <div class="navy-drift">
                <a href="">
                    <img src="resources/sunny_socks_photos/catalogus/Sunny_socks_green.jpg" alt="Navy Drift">
                    <p>Navy Drift</p>
                    <p>$25.99</p>
                </a>
            </div>

            <div class="sunny-socks">
                <a href="">
                    <img src="resources/sunny_socks_photos/catalogus/Sunny_socks_uni_yellow.jpg" alt="Sunny Socks">
                    <p>Sunny Socks</p>
                    <p>$33.99</p>
                </a>
            </div>

            <div class="glam-walkers">
                <a href="">
                    <img src="resources/sunny_socks_photos/catalogus/Sunny_socks_pink_01.jpg" alt="Glam Walkers">
                    <p>Glam Walkers</p>
                    <p>$25.99</p>
                </a>
            </div>

            <div class="crimson-web">
                <a href="">
                    <img src="resources/sunny_socks_photos/catalogus/Sunny_socks_red.jpg" alt="Crimson Web">
                    <p>Crimson Web</p>
                    <p>$25.99</p>
                </a>
            </div>

            <div class="cool-blue">
                <a href="">
                    <img src="resources/sunny_socks_photos/catalogus/Sunny_socks_uni_blue.jpg" alt="Cool Blue">
                    <p>Cool Blue</p>
                    <p>$33.99</p>
                </a>
            </div>

            <div class="navy-drift2">
                <a href="">
                    <img src="resources/sunny_socks_photos/catalogus/Sunny_socks_uni_green.jpg" alt="Navy Drift">
                    <p>Navy Drift</p>
                    <p>$33.99</p>
                </a>
            </div>

            <div class="cotton-candy">
                <a href="">
                    <img src="resources/sunny_socks_photos/catalogus/Sunny_socks_uni_pink.jpg" alt="Cotton Candy">
                    <p>Cotton Candy</p>
                    <p>$25.99</p>
                </a>
            </div>

            <div class="tomato">
                <a href="">
                    <img src="resources/sunny_socks_photos/catalogus/Sunny_socks_uni_red.jpg" alt="Tomato">
                    <p>Tomato</p>
                    <p>$33.99</p>
                </a>
            </div>

            <div class="lemon-whirl">
                <a href="">
                    <img src="resources/sunny_socks_photos/catalogus/Sunny_socks_yellow.jpg" alt="Lemon Whirl">
                    <p>Lemon Whirl</p>
                    <p>$25.99</p>
                </a>
            </div>

            <div class="sporty">
                <a href="">
                    <img src="" alt="Sporty">
                    <p>Sporty</p>
                    <p>$35.99</p>
                </a>
            </div>
        </div>
    </main>
</div>
