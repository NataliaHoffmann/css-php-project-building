<?php
    //crud = create / read / update / delete
    require_once 'database.php';
    // extending database class on this one
    class crud extends database {
        public function __construct() {
            parent::__construct();
        }
        public function execute($query){
            $result = $this->connection->query($query);
            if($result == false){
                echo "<p> Error: cannot execute the command</p>";
                return false;
            }else{
                return true;
            }
        }
        public function escape_string($value){
            return $this->connection->real_escape_string($value);
        }
        // Login method
        public function login($username_or_email, $password) {
            // Escape input to prevent SQL injection
            $username_or_email = $this->escape_string($username_or_email);
            
            // Query to fetch user by username or email
            $sql = "SELECT * FROM users WHERE username = '$username_or_email' OR email = '$username_or_email'";
            $result = $this->connection->query($sql);
        
            // If the user exists, check the password
            if ($result && $result->num_rows > 0) {
                $user = $result->fetch_assoc(); // Fetch user data
        
                // Verify password
                if (password_verify($password, $user['password'])) {
                    return $user; // Return user data if authentication is successful
                } else {
                    return false; // Invalid password
                }
            }
        
            return false; // No user found
        }

    }
?>