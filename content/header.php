<form class="section left" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <button id="logoButton" type="submit" name="navBtn" value="Home">
        <img src="resources/Logo's/png/sunny_logos_blue.png" alt="Sunny socks logo">
    </button>
</form>
<form class="section center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <button id="aboutButton" type="submit" name="navBtn" value="About">ABOUT<img src="resources/icons/svg/downArrow.svg" alt="arrowIcon"></button>
    <button id="menButton" type="submit" name="navBtn" value="Shop">MEN<img src="resources/icons/svg/downArrow.svg" alt="arrowIcon"></button>
    <button id="womenButton" type="submit" name="navBtn" value="Shop">WOMEN<img src="resources/icons/svg/downArrow.svg" alt="arrowIcon"></button>
    <button class="shopButton" type="submit" name="navBtn" value="Shop">SHOP<img src="resources/icons/svg/downArrow.svg" alt="arrowIcon"></button>
    <button id="contactButton" type="submit" name="navBtn" value="Contact">CONTACT<img src="resources/icons/svg/downArrow.svg" alt="arrowIcon"></button>
</form>
<form class="section right" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <div class="barNav">
        <input type="search" name="search" placeholder="Search">
        <button type="submit" name="navBtn" value="Shop"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
    </div>
    <button id="cartButton" type="submit" name="navBtn" value="Checkout"><img class="icon" src="resources/icons/svg/shoppingBagIcon.svg" alt="cartIcon"></button>
    <button id="loginButton" type="submit" name="navBtn" value="Login"><img class="icon" src="resources/icons/svg/userIcon.svg" alt="profileIcon"></button>
</form>