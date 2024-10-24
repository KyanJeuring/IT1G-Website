<?php 
    class User
    {
        public $username;
        public $password;
        public $isAdmin;
        //other user properties

        public function __construct($username, $password)
        {
            $this->username = $username;
            $this->password = $password;
            $this->isAdmin = false;
        }
    }

    class UserHandler
    {
        public $isLoggedIn = false;
        public $username;
        public $isAdmin = false;

        public function login($username, $password)
        {
            $filePath = 'data/users.json';
            if (file_exists($filePath)) 
            {
                $existingUsers = json_decode(file_get_contents($filePath), true);
                foreach($existingUsers as $user)
                {
                    if($user["username"] == $username && $user["password"] == $password)
                    {
                        $this->isLoggedIn = true;
                        $this->username = $username;
                        $this->isAdmin = $user["isAdmin"];
                        return true;
                    }
                }
            } 
            return false;
        }
        
        public function logout()
        {
            $this->isLoggedIn = false;
            $this->username = null;
            $this->isAdmin = false;
        }

        public function register($username, $password)
        {
            $filePath = 'data/users.json';
            if (file_exists($filePath)) 
            {
                $currentUsers = json_decode(file_get_contents($filePath));
                array_push($currentUsers, new User($username, $password));
                file_put_contents($filePath, json_encode($currentUsers, JSON_PRETTY_PRINT));

                return true;
            }
            return false;
        }
    }
?>