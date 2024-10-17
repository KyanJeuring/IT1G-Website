<form class="section left" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <button id="logoButton" type="submit" name="navBtn" value="Home">
        <img src="resources/Logo's/png/sunny_logos_blue.png" alt="Sunny socks logo">
    </button>
</form>
<form class="section center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <button id="aboutButton" type="submit" name="navBtn" value="About">ABOUT</button>
    <button id="menButton" type="submit" name="navBtn" value="Shop">MEN</button>
    <button id="womenButton" type="submit" name="navBtn" value="Shop">WOMEN</button>
    <button id="shopButton" type="submit" name="navBtn" value="Shop">SHOP</button>
    <button id="contactButton" type="submit" name="navBtn" value="Contact">CONTACT</button>
</form>
<form class="section right" form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <button><img class="icon" src="resources/icons/svg/searchIcon.svg" alt="searchIcon"></button>
    <button><img class="icon" src="resources/icons/svg/shoppingBagIcon.svg" alt="cartIcon"></button>
    <button id="loginButton" type="submit" name="navBtn" value="Login"><img class="icon" src="resources/icons/svg/userIcon.svg" alt="profileIcon"></button>
</form>