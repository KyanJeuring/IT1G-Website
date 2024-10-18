<form class="section left" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <button id="logoButton" type="submit" name="navBtn" value="Home">
        <img src="resources/Logo's/png/sunny_logos_blue.png" alt="Sunny socks logo">
    </button>
</form>
<form class="section center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <button id="aboutButton" type="submit" name="navBtn" value="About" >
        <p>ABOUT</p>
        <img src="resources/icons/svg/downArrow.svg" alt="arrowIcon">
    </button>
    <button id="menButton" type="submit" name="navBtn" value="Shop">
        <p>MEN</p>
        <img src="resources/icons/svg/downArrow.svg" alt="arrowIcon">
    </button>
    <button id="womenButton" type="submit" name="navBtn" value="Shop">
        <p>WOMEN</p>
        <img src="resources/icons/svg/downArrow.svg" alt="arrowIcon">
    </button>
    <button class="shopButton" type="submit" name="navBtn" value="Shop">
        <p>SHOP</p>
        <img src="resources/icons/svg/downArrow.svg" alt="arrowIcon">
    </button>
    <button id="contactButton" type="submit" name="navBtn" value="Contact">
        <p>CONTACT</p>
        <img src="resources/icons/svg/downArrow.svg" alt="arrowIcon">
    </button>
</form>
<form class="section right" form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <button><img class="icon" src="resources/icons/svg/searchIcon.svg" alt="searchIcon"></button>
    <button><img class="icon" src="resources/icons/svg/shoppingBagIcon.svg" alt="cartIcon"></button>
    <button id="loginButton" type="submit" name="navBtn" value="Login"><img class="icon" src="resources/icons/svg/userIcon.svg" alt="profileIcon"></button>
</form>