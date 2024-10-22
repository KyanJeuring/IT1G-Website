<div class="forms" id="login">
    <div id="leftForm">
        <img src="resources\Logo's\png\sunny_logos_blue.png" alt="Sunny Socks Logo">
        <h1>Welcome back</h1>
        <p>Glad to see you again 👋</p>
        <p>Login to your account below</p>
        <?php echo $alert; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <?php if ($_SESSION["user"]->isLoggedIn): ?>
                <input type="hidden" name="navBtn" value="Login">
                <button type="submit" name="logout" value="true">Logout</button>
            <?php else: ?>
                <input type="text" name="uname" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="hidden" name="navBtn" value="Login">
                <button type="submit" name="login" value="true">Login</button>
                <button>Not a member yet?</button>
            <?php endif; ?>
        </form>
    </div>
    <div id="rightForm">
        <h1>Other Login Options</h1>
    </div>
</div>