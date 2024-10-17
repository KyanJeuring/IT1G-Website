<?php
    include("logic.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sunny socks</title>
        
        <link rel="stylesheet" href="./css/header.css" type="text/css">
        <link rel="stylesheet" href="./css/main.css" type="text/css">
        <link rel="stylesheet" href="./css/footer.css" type="text/css">
        <link rel="stylesheet" href="./css/loginSignup.css" type="text/css">
        <link rel="stylesheet" href="./css/navLinks.css" type="text/css">
        <link rel="stylesheet" href="./css/offerPopup.css" type="text/css">
        <link rel="stylesheet" href="./css/aboutPage.css" type="text/css">
        <link rel="icon" href="./resources/Favicons/ico/SunnySocksIconBlue.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/homePage.css" type="text/css">
        <link rel="icon" href="./resources\Favicons\ico\SunnySocksIcon.ico" type="image/x-icon">
        <script src="javascript/main.js" type="module"></script>
        <script>
        </script>
    </head>
    <body>
        <div id="header">
            <form class="section left" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                <button id="logoButton" type="submit" name="navBtn" value="Home">
                    <img src="resources/Logo's/png/sunny_logos_blue.png" alt="Sunny socks logo">
                </button>
            </form>
            <form class="section center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                <button id="aboutButton" type="submit" name="navBtn" value="About">ABOUT</button>
                <button id="menButton" type="submit" name="navBtn" value="Shop">MEN</button>
                <button id="womenButton" type="submit" name="navBtn" value="Shop">WOMEN</button>
                <button id="shopButton" type="submit" name="navBtn" value="Shop">SHOP</button>
                <button id="contactButton" type="submit" name="navBtn" value="Contact">CONTACT</button>
            </form>
            <form class="section right" form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                <button><img class="icon" src="resources/icons/svg/searchIcon.svg" alt="searchIcon"></button>
                <button><img class="icon" src="resources/icons/svg/shoppingBagIcon.svg" alt="cartIcon"></button>
                <button id="loginButton" type="submit" name="navBtn" value="Login"><img class="icon" src="resources/icons/svg/userIcon.svg" alt="profileIcon"></button>
            </form>
        </div>
        <div id="navLinks">
        </div>
        <div id="offerButton">
            <button id="toggleOffer" class="pulseAnimation"><img src="resources/icons/offerIcon.svg" alt="Offer button"></button>
        </div>
        <div id="offerPopup">
            <h1>Special Offer!</h1>
            <h2>Use Coupon Code</h2>
            <button id="shopButton" type="button">FUNSOX</button>
            <h2>for 30% off</h2>
        </div>
        <div id="content">
            <?php
                // display content based on current location. See logic.php for more info
                include($location);
            ?>
        </div>
        <footer>
            <section>
                <img src="./resources/Logo's/png/sunny_logos-01.png" alt="Sunny Socks Logo" id="footerLogo">
                <div class="socials1">
                    <a href="https://x.com/X" target="_blank"><img src="./resources/icons/socialMedia/xLogo.svg" alt="X"></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="./resources/icons/socialMedia/instagramLogo.svg" alt="Instagram"></a>
                    <a href="https://www.facebook.com/" target="_blank"><img src="./resources/icons/socialMedia/facebookLogo.svg" alt="Facebook"></a>
                    <a href="https://www.linkedin.com/" target="_blank"><img src="./resources/icons/socialMedia/linkedinLogo.svg" alt="LinkedIn"></a>
                </div>
                <p>Making the world more sustainable, one sock at a time</p>
            </section>
            <section>
                <h2>Products</h2>
                <ul>
                    <li><a href="#">Spring Socks</a></li>
                    <li><a href="#">Summer Socks</a></li>
                    <li><a href="#">Autumn Socks</a></li>
                    <li><a href="#">Winter Socks</a></li>
                </ul>
            </section>
            <section>
                <h2>Buying</h2>
                <ul>
                    <li><a href="#">shop</a></li>
                    <li><a href="#">Terms Of Use</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">How It Works</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </section>
            <section>
                <h2>Social</h2>
                <ul>
                    <li><a href="https://x.com/X" target="_blank">X</a></li>
                    <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
                    <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                    <li><a href="https://www.linkedin.com/" target="_blank">LinkedIn</a></li>
                </ul>
                <div class="socials2">
                    <a href="https://x.com/X" target="_blank"><img src="./resources/icons/socialMedia/xLogo.svg" alt="X"></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="./resources/icons/socialMedia/instagramLogo.svg" alt="Instagram"></a>
                    <a href="https://www.facebook.com/" target="_blank"><img src="./resources/icons/socialMedia/facebookLogo.svg" alt="Facebook"></a>
                    <a href="https://www.linkedin.com/" target="_blank"><img src="./resources/icons/socialMedia/linkedinLogo.svg" alt="LinkedIn"></a>
                </div>
            </section>
        </footer>
    </body>
</html>
