<?php
    // Classes need to be defined before session_start()
    require_once("phpLogic/shoppingCart.php");
    require_once("phpLogic/userClass.php");
    session_start();
    
    include("phpLogic/logic.php");
    include("phpLogic/userLogic.php");
    include("phpLogic/storeLogic.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sunny socks</title>
        
        <link rel="stylesheet" href="./css/itemPage.css" type="text/css">
        <link rel="stylesheet" href="./css/header.css" type="text/css">
        <link rel="stylesheet" href="./css/main.css" type="text/css">
        <link rel="stylesheet" href="./css/footer.css" type="text/css">
        <link rel="stylesheet" href="./css/loginSignup.css" type="text/css">
        <link rel="stylesheet" href="./css/navLinks.css" type="text/css">
        <link rel="stylesheet" href="./css/storePage.css" type="text/css">
        <link rel="stylesheet" href="./css/offerPopup.css" type="text/css">
        <link rel="stylesheet" href="./css/aboutPage.css" type="text/css">
        <link rel="stylesheet" href="./css/homePage.css" type="text/css">
        <link rel="stylesheet" href="./css/toTopButton.css" type="text/css">
        <link rel="stylesheet" href="./css/checkoutPage.css" type="text/css">
        <link rel="stylesheet" href="./css/contactPage.css" type="text/css">
        <link rel="stylesheet" href="./css/orderConfirmed.css" type="text/css">
        <link rel="stylesheet" href="./css/newsletterSignUpForm.css" type="text/css">
        <link rel="stylesheet" href="./css/addReview.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="icon" href="./resources/Favicons/ico/SunnySocksIconBlue.ico" type="image/x-icon">
        <script src="javascript/main.js" type="module"></script>
    </head>
    <body>
        <div id="top"></div>
        <div id="header">
            <?php include("content/header.php"); ?>
        </div>
        <div id="navLinks">
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <?php if($contentSwitcher->currentPage->name != "Home") printNavLinks($contentSwitcher->currentPage); ?>
            </form>
        </div>
        <div id="offerButton">
            <button id="toggleOffer" class="pulseAnimation"><svg width="48" height="48" viewBox="0 0 0.96 0.96"><path d="m 0.90049492,0.47999543 0.053054,-0.091694 a 0.0480562,0.04805774 0 0 0 -0.01754,-0.065647 l -0.0917878,-0.053056 v -0.105727 a 0.0480562,0.04805774 0 0 0 -0.048056,-0.048058 h -0.1056758 l -0.053006,-0.091742 a 0.04844065,0.0484422 0 0 0 -0.02917,-0.022395 0.04771981,0.04772133 0 0 0 -0.036475,0.00481 l -0.091787,0.053056 -0.091787,-0.053104 a 0.0480562,0.04805774 0 0 0 -0.065645,0.017589 l -0.053054,0.09179 h -0.1056758 a 0.0480562,0.04805774 0 0 0 -0.048056,0.048058 v 0.105679 l -0.091787,0.053056 a 0.04796009,0.04796162 0 0 0 -0.01754,0.065695 l 0.053053,0.091694 -0.053054,0.091694 a 0.04824842,0.04824997 0 0 0 0.017492,0.065695 l 0.091787,0.053056 v 0.105679 a 0.0480562,0.04805774 0 0 0 0.048056,0.048058 h 0.1057236 l 0.053054,0.09179 a 0.04853676,0.04853831 0 0 0 0.041617,0.024029 c 0.00836,0 0.016676,-0.00221 0.024076,-0.00649 l 0.091691,-0.053056 0.091787,0.053056 a 0.04810426,0.04810579 0 0 0 0.065645,-0.017541 l 0.053006,-0.09179 h 0.1056755 a 0.0480562,0.04805774 0 0 0 0.048056,-0.048058 v -0.105679 l 0.091787,-0.053056 a 0.0480562,0.04805774 0 0 0 0.01754,-0.065695 z m -0.5406323,-0.2407693 a 0.07210834,0.07211065 0 1 1 -4.8e-5,0.1442213 0.07210834,0.07211065 0 0 1 4.8e-5,-0.1442213 z m 0.014417,0.4613543 -0.07689,-0.057621 0.2883372,-0.3844619 0.07689,0.057621 z m 0.2258641,0.019223 a 0.07210834,0.07211065 0 1 1 4.81e-5,-0.1442213 0.07210834,0.07211065 0 0 1 -4.81e-5,0.1442213 z"/></svg></button>
        </div>
        <div id="offerPopup">
            <h1>Special Offer!</h1>
            <h2>Use Coupon Code</h2>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <button class="ctaButton" type="submit" name="navBtn" value="Checkout">FUNSOX</button>
            </form>
            <h2>for 30% off</h2>
        </div>
        <div id="content">
            <?php
                // display content based on current location. See logic.php for more info
                include($contentSwitcher->currentPage->location);
            ?>
        </div>
        <button class="toTopButton" onclick="document.getElementById('top').scrollIntoView({ behavior: 'smooth' });"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 320 512"><path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8l256 0c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg></button>
        <footer>
            <section>
                <img src="./resources/Logo's/png/sunny_logos-01.png" alt="Sunny Socks Logo" id="footerLogo">
                <div class="socials socialsDesktop">
                    <a href="https://x.com/X" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a>
                    <a href="https://www.instagram.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                    <a href="https://www.facebook.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg></a>
                    <a href="https://www.linkedin.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
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
                <div class="socials socialsMobile">
                    <a href="https://x.com/X" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a>
                    <a href="https://www.instagram.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                    <a href="https://www.facebook.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg></a>
                    <a href="https://www.linkedin.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>                </div>
            </section>
        </footer>
    </body>
</html>
