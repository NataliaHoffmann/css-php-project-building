<?php
// Start the session to handle session data
session_start();

// Include the necessary files for database interaction
include_once('crud.php');

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: ../yourpage.php"); // Redirect to the desired page if the user is logged in
    exit();
}

// Create an instance of the crud class for database interaction
$crud = new crud();

// Handle form submission
if (isset($_SESSION['user_id'])) {
    // Get user input from the form
    $username_or_email = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if the user exists by email or username
    $user = $crud->login($username_or_email, $password);

    if ($user) {
        // Set session variables for the user if login is successful
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['fname'] = $user['fname'];
        $_SESSION['lname'] = $user['lname'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['phone'] = $user['phone']; 
        $_SESSION['bookings'] = $user['bookings'];

        // Redirect the user to yourpage.php after successful login
        header("Location: ../yourpage.php");
        var_dump($_SESSION);  // Check session data after login
        var_dump($user);  // Check the user data from the database
        exit();
    } else {
        // Password or username/email is incorrect
        $_SESSION['error_message'] = "Invalid username/email or password.";
        header("Location: ../index.php"); // Redirect back to login page with error
        exit();
    }
}
?>
