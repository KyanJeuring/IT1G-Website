<form class="section left" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <button id="logoButton" type="submit" name="navBtn" value="Home">
        <img src="resources/Logo's/png/sunny_logos_blue.png" alt="Sunny socks logo">
    </button>
</form>
<form class="section center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <button id="aboutButton" type="submit" name="navBtn" value="About">ABOUT<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon points="12 17.414 3.293 8.707 4.707 7.293 12 14.586 19.293 7.293 20.707 8.707 12 17.414"/></svg></button>
    <button id="menButton" type="submit" name="navBtn" value="Shop">MEN<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon points="12 17.414 3.293 8.707 4.707 7.293 12 14.586 19.293 7.293 20.707 8.707 12 17.414"/></svg></button>
    <button id="womenButton" type="submit" name="navBtn" value="Shop">WOMEN<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon points="12 17.414 3.293 8.707 4.707 7.293 12 14.586 19.293 7.293 20.707 8.707 12 17.414"/></svg></button>
    <button class="shopButton" type="submit" name="navBtn" value="Shop">SHOP<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon points="12 17.414 3.293 8.707 4.707 7.293 12 14.586 19.293 7.293 20.707 8.707 12 17.414"/></svg></button>
    <button id="contactButton" type="submit" name="navBtn" value="Contact">CONTACT<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon points="12 17.414 3.293 8.707 4.707 7.293 12 14.586 19.293 7.293 20.707 8.707 12 17.414"/></svg></button>
    <?php
        if($_SESSION['user']->isLoggedIn && ($_SESSION['user']->username == 'admin'))
        {
            ?>
            <button id="contactButton" type="submit" name="navBtn" value="Admin">ADMIN<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon points="12 17.414 3.293 8.707 4.707 7.293 12 14.586 19.293 7.293 20.707 8.707 12 17.414"/></svg></button>
            <?php
        }
    ?>
</form>
<form class="section right" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <div class="barNav">
        <input type="search" name="search" placeholder="Search">
        <button type="submit" name="navBtn" value="Shop"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
    </div>
    <button id="cartButton" type="submit" name="navBtn" value="Checkout"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 576 512">
        <path d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192 32 192c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512L430 512c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32l-85.6 0L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192l-232.6 0L253.3 35.1zM192 304l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16zm128 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
        <p id="numberOfItemsInCart"><?php echo count($_SESSION['shoppingCart'] -> items); ?></p>
    </button>
    <button id="loginButton" type="submit" name="navBtn" value="UserPage"><svg xmlns="http://www.w3.org/2000/svg"  width="26" height="26" viewBox="0 0 512 512"><path d="M406.5 399.6C387.4 352.9 341.5 320 288 320l-64 0c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3l64 0c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z"/></svg></button>
</form>