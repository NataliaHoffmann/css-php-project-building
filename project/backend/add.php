<?php
include_once('crud.php');
include_once('validate.php');

// new objects
$crud = new crud();
$valid = new validate();

if (isset($_POST['Submit'])) {
    $fname = $crud->escape_string($_POST['fname']);
    $lname = $crud->escape_string($_POST['lname']);
    $email = $crud->escape_string($_POST['email']);
    $phone = $crud->escape_string($_POST['phone']);
    $hobbies = $crud->escape_string($_POST['hobbies']);
    $username = $_POST['username'];
    
    $password = $crud->escape_string($_POST['password']);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 

    $days = isset($_POST['days']) ? $_POST['days'] : []; 
    $availability = [];

    foreach ($days as $day) { /* construct the availability */
        $times = isset($_POST[$day . '-time']) ? implode(", ", $_POST[$day . '-time']) : "No time selected";
        $availability[] = "$day: $times";  // Format as "Monday: Morning, Afternoon"
    }
    
    // Convert the array into a string to save in the database
    $availabilityString = implode("; ", $availability);
    
    $result = $crud->execute("INSERT INTO users (fname, lname, email, phone, bookings, username, password) 
    VALUES ('$fname', '$lname', '$email', '$phone', NULL, '$username', '$hashedPassword')");
    echo "<p>Record has been added successfully.</p>";
    echo "<a href='../index.php'>Go Back</a>";
}
?>


