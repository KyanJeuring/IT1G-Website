<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sunny socks</title>
        
        <link rel="stylesheet" href="./css/header.css" type="text/css">
        <link rel="stylesheet" href="./css/main.css" type="text/css">
        <link rel="stylesheet" href="./css/footer.css" type="text/css">
        <link rel="stylesheet" href="./css/login.css" type="text/css">
        <link rel="stylesheet" href="./css/navLinks.css" type="text/css">
        <link rel="icon" href="./resources\Favicons\ico\SunnySocksIcon.ico" type="image/x-icon">
        <script src="javascript/main.js" type="module"></script>
        <script>
        </script>
    </head>
    <body>
        <div id="header">
            <div class="section left">
                <button id="logoButton" href="index.php">
                    <img src="resources/Logo's/png/sunny_logos_blue.png" alt="Sunny socks logo">
                </button>
            </div>
            <div class="section center">    
                <button id="aboutButton" type="button">ABOUT</button>
                <button id="menButton" type="button">MEN</button>
                <button id="womenButton" type="button">WOMEN</button>
                <button id="shopButton" type="button">SHOP</button>
                <button id="contactButton" type="button">CONTACT</button>
            </div>
            <div class="section right">
                <button><img class="icon" src="resources/icons/svg/searchIcon.svg" alt="searchIcon"></button>
                <button><img class="icon" src="resources/icons/svg/shoppingBagIcon.svg" alt="cartIcon"></button>
                <button id="toggleLogin"><img class="icon" src="resources/icons/svg/userIcon.svg" alt="profileIcon"></button>
            </div>
        </div>
        <div id="login">
            <h2>Profile</h2>
            <form action="./index.php" action="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" name="login">Login</button>
                <hr>
                <h3>Not a member yet?</h3>
                <input type="email" name="email" placeholder="Email">
                <button type="submit" name="signup">Sign Up</button>
                <?php
                ?>
            </form>
        </div>
        </div>
        <div id="navLinks">
        </div>
        <div id="content"></div>
        <footer>
            <section>
                <img src="./resources/Logo's/png/sunny_logos-01.png" alt="Sunny Socks Logo" id="footerLogo">
                <div class="socials">
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
            </section>
        </footer>
    </body>
</html>
