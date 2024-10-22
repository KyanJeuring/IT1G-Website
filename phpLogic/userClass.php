<?php 
    class User
    {
        public $isLoggedIn = false;
        public $username;

        public function login($username, $password)
        {
            //connect to database
            if($username == "user" && $password == "1234")
            {
                $this->isLoggedIn = true;
                return true;
            }
            return false;
        }
        public function logout()
        {
            $this->isLoggedIn = false;
            $this->username = null;
        }
    }
?>