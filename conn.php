<?php
session_start();
//connect to db
$servername = "localhost";
$username = "rohin";
$passsword = "pandey1215";
$dbname = "test_db";

//establish connection
$conn = new mysqli($servername, $username, $passsword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>