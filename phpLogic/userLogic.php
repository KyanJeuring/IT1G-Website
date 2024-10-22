<?php
    // PREPARE SESSION DATA
    if (!isset($_SESSION['user']) || empty($_SESSION['user']))
    {
        $_SESSION['user'] = new User();
    } 

    // DEAL WITH INPUT
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $uname = filter_input(INPUT_POST, "uname");
        $password = filter_input(INPUT_POST, "password");
        $login = filter_input(INPUT_POST, "login", FILTER_VALIDATE_BOOLEAN);
        $logout = filter_input(INPUT_POST, "logout", FILTER_VALIDATE_BOOLEAN);
        $showRegistration = filter_input(INPUT_POST, "showRegistration", FILTER_VALIDATE_BOOLEAN);
        $register = filter_input(INPUT_POST, "register", FILTER_VALIDATE_BOOLEAN);

        $alert = "";
        if($login === true)
        {
            if($_SESSION['user']->login($uname, $password))
            {
                $alert = "<h1>Login Success!</h1>";
            }
            else
            {
                $alert = "<div class='errorMessage'><p>The credentials are incorrect!</p></div>";
            }
        }

        if($logout)
        {
            $_SESSION['user']->logout();
            $alert = "<h1>Logout Success!</h1>";
        }

        if($register)
        {
            if($_SESSION['user']->register($uname, $password))
            {
                $alert = "<h1>Registration Successful!</h1>";
            }
            else
            {
                $alert = "<div class='errorMessage'><p>Registration failed!</p></div>";
            }
        }
    }
?>