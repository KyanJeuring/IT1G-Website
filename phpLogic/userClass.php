<?php 
    class User
    {
        public $isLoggedIn = false;
        public $username;
        public $isAdmin = false;

        public function login($username, $password)
        {
            $filePath = 'data/users.txt';
            if (file_exists($filePath)) 
            {
                $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                foreach($lines as $line) 
                {
                    $user = explode(":", $line);
                    if($user[0] == $username && $user[1] == $password)
                    {
                        $this->isLoggedIn = true;
                        $this->username = $username;
                        if(isset($user[2]) && $user[2] == "admin")
                        {
                            $this->isAdmin = true;
                        }
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
            if(str_contains($username, ":") || str_contains($password, ":"))
            {
                //username and password cannot contain ':' because it is used as a delimiter
                return false;
            }
            $filePath = 'data/users.txt';
            $user = "\n".$username.":".$password;
            if (file_exists($filePath)) 
            {
                $current = file_get_contents($filePath);
                $current .= $user;
                file_put_contents($filePath, $current);
                return true;
            }
            return false;
        }
    }
?>