<div class="forms" id="login">
    <div id="leftForm">
        <img src="resources\Logo's\png\sunny_logos_orange.png" alt="Sunny Socks Logo">
        <h1>Welcome back</h1>
        <p>Glad to see you again 👋</p>
        <p>Login to your account below</p>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $uname = filter_input(INPUT_POST, "uname");
                $password = filter_input(INPUT_POST, "password");
                if(empty($_POST['uname']))
                {
                    echo "<div class='errorMessage'><p>Please provide an username.</p></div>";
                }
                if(empty($_POST['password']))
                {
                    echo "<div class='errorMessage'><p>Please provide a password.</p></div>";
                }
                else
                {
                    if($uname != "user" || $password != "1234")
                    {
                        echo "<div class='errorMessage'><p>The credentials are incorrect!</p></div>";
                    }
                    else
                    {
                        echo "<h1>Login Success!</h1>";
                    }
                }
            }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="text" name="uname" placeholder="Username">
            <input type="text" name="password" placeholder="Password">
            <button type="submit" name="login">Login</button>
            <button>Not a member yet?</button>
        </form>
    </div>
    <div id="rightForm">
        <h1>Continue</h1>
    </div>
</div>