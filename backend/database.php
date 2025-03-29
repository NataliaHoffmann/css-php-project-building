<?php
    class database{
        private $host = 'localhost';
        private $username = 'root';
        private $password = 'mysql';
        private $database = 'project';
        protected $connection;
        public function __construct(){
            if(!isset($this->connection)){
                $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
                if(!$this->connection){
                    echo "<p>Cannot connect to the database</p>";
                    exit();
                }
            }
            return $this->connection;
        }
    }
    /* 

        This was the assignment 2 - I need to create a new one once the form is done and I know the 
        fields
        
        CREATE TABLE users (
        user_id INT AUTO_INCREMENT PRIMARY KEY,  
        fname VARCHAR(100) NOT NULL,
        lname VARCHAR(100) NOT NULL,
        email VARCHAR(255) UNIQUE NOT NULL,
        phone VARCHAR(15) NOT NULL,
        hobbies TEXT NOT NULL,
        availability TEXT NOT NULL,  -- Add this column
        username VARCHAR(255) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL
        );
    */
?>