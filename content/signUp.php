<div class="forms" id="login">
    <div id="leftForm">
        <img src="resources\Logo's\png\sunny_logos_blue.png" alt="Sunny Socks Logo">
        <h1>Welcome</h1>
        <p>Glad to see you 👋</p>
        <p>Create your account below</p>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $uname = filter_input(INPUT_POST, "uname");
                $email = filter_input(INPUT_POST, "email");
                $password = filter_input(INPUT_POST, "password");
                $checkPassword = filter_input(INPUT_POST, "checkPassword");
                    if($password != $checkPassword)
                    {
                        echo "<div class='errorMessage'><p>The credentials are incorrect!</p></div>";
                    }
                    else
                    {
                        echo "<h1>Signup Success!</h1>";
                    }
            }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="text" name="uname" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="checkPassword" placeholder="Password" required>
            <button type="submit" name="navBtn" value="Signup">Sign up</button>
        </form>
    </div>
    <div id="rightForm">
        <h1>Other Login Options</h1>
    </div>
</div>