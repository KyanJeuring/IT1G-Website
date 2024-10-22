<?php 
    class User
    {
        public $isLoggedIn = false;
        public $username;

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
                        // get other user data
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
        }
    }
?>