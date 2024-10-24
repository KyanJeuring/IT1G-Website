<div class="forms" id="login">
    <div class="form">
        <img src="resources\Logo's\png\sunny_logos_blue.png" alt="Sunny Socks Logo">
        <?php if(!$showRegistration): ?>
            <h1>Welcome back</h1>
            <?php 
                var_dump($_SESSION["user"]);
                if($_SESSION["user"]->isLoggedIn)
                {
                    echo "<h1>".$_SESSION["user"]->username."</h1>";
                }
                else
                {
            ?>
            <p>Glad to see you again 👋</p>
            <p>Login to your account below</p>
            <?php
                }
            ?>
            <?php echo $alert; ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <?php if($_SESSION["user"]->isLoggedIn): ?>
                    <input type="hidden" name="navBtn" value="UserPage">
                    <button type="submit" name="logout" value="true">Logout</button>
                <?php else: ?>
                    <input type="text" name="uname" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="hidden" name="navBtn" value="UserPage">
                    <button type="submit" name="login" value="true">Login</button>
                <?php endif; ?>
            </form>
            <?php if($_SESSION["user"]->isAdmin === true): ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
                    <button type="submit" name="navBtn" value="Admin">Admin Panel</button>
                </form>
            <?php endif; ?>
            <?php if(!$_SESSION["user"]->isLoggedIn): ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <input type="hidden" name="showRegistration" value="true">
                    <button type="submit" name="navBtn" value="UserPage">Not a member yet?</button>
                </form>
            <?php endif; ?>
        <?php else: ?>
            <h1>Welcome</h1>
            <p>Nice to meet you 👋</p>
            <p>Fill in the form bellow to register</p>
            <?php echo $alert; ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input type="text" name="uname" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="hidden" name="navBtn" value="UserPage">
                <button type="submit" name="register" value="true">Sign Up</button>
            </form>
        <?php endif; ?>
    </div>
    <?php if(!$_SESSION["user"]->isLoggedIn): ?>
    <div class="verticalSeparatorLine"></div>
    <div class="form">
        <h1>Other Login Options</h1>
    </div>
    <?php endif; ?>
</div>