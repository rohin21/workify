<?php
include(main.php);
session_start();
//connect to db
$servername = "localhost";
$username = "rohin";
$passsword = "pandey1215";
$dbname = "test_db";

//get user information from the sign up form
$userid = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

//establish connection
$conn = new mysqli($servername, $username, $passsword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//form validation before user registration
if(!empty($userid) && !empty($email) && !empty($passsword) && !empty($confirm_password)) {
    if($password == $confirm_password) {
//check for existing user
        $sql_check = "select * from user_details where username = '$userid'";
        $sql_entry = "INSERT INTO testuser VALUES ('$userid','$email','$password')";
        if($conn->query(sql_check)===TRUE) {
            echo 'user already registered';
        }
//Enter user data into database.
        else if ($conn->query($sql_entry) === TRUE) {
            header("Location:display.php"); 
            exit;             
        }    
    }
    /*else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }*/
}
$conn->close();
?>