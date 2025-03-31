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
        CREATE TABLE users ( 
            user_id INT AUTO_INCREMENT PRIMARY KEY,  
            fname VARCHAR(100) NOT NULL,
            lname VARCHAR(100) NOT NULL,
            email VARCHAR(255) UNIQUE NOT NULL,
            phone VARCHAR(15) NOT NULL,
            bookings TEXT NULL,  
            username VARCHAR(255) UNIQUE NOT NULL,
            password VARCHAR(255) NOT NULL
        );

        bookings will be null at first because we will be able to add the bookings only on the login page
        
    */
?>